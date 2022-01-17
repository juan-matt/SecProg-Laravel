<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;

use App\Models\actionOnProducts;
use App\Models\transaction;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function upload_product()
    {
        if(Auth::id()){
            if(Auth::user()->user_privilege == '1') return view('admin.admin_upload_product');
            else return redirect('home');
        }
        else return redirect('login');
    }

    public function uploading_product(Request $request)
    {
        $inputted_data = new products;

        $inputted_data->name = $request->name;
        $inputted_data->price = $request->price;
        $inputted_data->description = $request->description;
        $inputted_data->quantity = $request->quantity;

        $image = $request->product_image;
        $image_name = date("d-m-y h_i_s") . '- [ ' . ($_FILES['product_image']['name']) . ' ]';
        $extenstion = pathinfo($request['name'], PATHINFO_EXTENSION);
        if ($extenstion == "jpg" && $extenstion == "png" ){
            $request->product_image->move('uploaded_product_image', $image_name);
            $inputted_data->image = $image_name;
            
            $inputted_data->save();
            return redirect()->back()->with('alert', 'Product Successfully Added');
        }
        elseif ($extenstion != "jpg" && $extenstion != "png" ){
            return redirect()->back()->with('alert', 'JPG or PNG Extension only / Image Only');
        }

    }

    public function show_product()
    {
        if(Auth::id()){
            if(Auth::user()->user_privilege == '1'){
                $product_from_db = products::all(); 
                return view('admin.admin_show_product', compact('product_from_db'));
            }
            else return redirect('home');
            
        }
        else return redirect('login');

        
    }

    public function delete_product($id)
    {
        if(Auth::id()){
            if(Auth::user()->user_privilege == '1'){

                $query = DB::table('products')->where('id', $id);
                $products = $query->first();
        
                $id = $products->id;
                $name = $products->name;
                $price = $products->price;
                $description = $products->description;
                $quantity = $products->quantity;
                $image = $products->image;
                $query->delete();
        
                $action_on_products = new actionOnProducts;
        
                $action_on_products->action = 'delete';
                $action_on_products->idOnProducts = $id;
                $action_on_products->old_name = $name;
                $action_on_products->old_price = $price;
                $action_on_products->old_description = $description;
                $action_on_products->old_quantity = $quantity;
                $action_on_products->old_image = $image;
                $action_on_products->save();
                
        
                return redirect()->back()->with('alert', 'Product ' . $name . 'has been deleted' );

            }
            else return redirect('home');
        }
        else return redirect('login');
        
    }

    public function edit_product($id)
    {
        if(Auth::id()){
            if(Auth::user()->user_privilege == '1'){
                $product = DB::table('products')->where('id', $id)->first();
                return view('admin.admin_edit_product', compact('product'));
            }
            else return redirect('home');
        }
        else return redirect('login');
    }

    public function editing_product($id, Request $request)
    {
        if(Auth::id()){
            if(Auth::user()->user_privilege == '1'){
                $query = DB::table('products')->where('id', $id);
                $products = $query->first();

                $old_id = $products->id;
                $old_name = $products->name;
                $old_price = $products->price;
                $old_description = $products->description;
                $old_quantity = $products->quantity;
                $old_image = $products->image;
                

                $action_on_products = new actionOnProducts;

                $action_on_products->action = 'edit';
                $action_on_products->idOnProducts = $old_id;
                $action_on_products->old_name = $old_name;
                $action_on_products->old_price = $old_price;
                $action_on_products->old_description = $old_description;
                $action_on_products->old_quantity = $old_quantity;
                $action_on_products->old_image = $old_image;
                $action_on_products->save();


                if(isset($request->product_image))
                {
                    $image = $request->product_image;
                    $image_name = date("d-m-y h:i:s") . '- [ ' . ($_FILES['product_image']['name']) . ' ]';

                    $extenstion = pathinfo($request['name'], PATHINFO_EXTENSION);
                    if ($extenstion == "jpg" && $extenstion == "png" ){
                        $request->product_image->move('uploaded_product_image', $image_name);
                        $inputted_data->image = $image_name;
                        
                        $inputted_data->save();
                        return redirect()->back()->with('alert', 'Product Successfully Added');
                    }
                    elseif ($extenstion != "jpg" && $extenstion != "png" ){
                        return redirect()->back()->with('alert', 'JPG or PNG Extension only / Image Only');
                    }
                }
                else
                {
                    $image_name = $old_image;
                }
                
                $query->update([
                    'name' => $request->name,
                    'price' => $request->price, 
                    'description' => $request->description,
                    'quantity' => $request->quantity,
                    'image' => $image_name
                ]);
                

                return redirect('show_product')->with('alert', 'Product: ' . $old_name . ' and its spesification(s) has been edited' );
            } 
            else return redirect('home');
        }
        else return redirect('login');
    }

    public function orders(){
        if(Auth::id()){
            if(Auth::user()->user_privilege == '1'){
                $orders_from_db = transaction::all(); 

                return view('admin.admin_orders', compact('orders_from_db'));
            }
            else return redirect('home');
        }
        else return redirect('login');
    }

    public function change_to_sent($id){
        if(Auth::id()){
            if(Auth::user()->user_privilege == '1'){
                $change_status = transaction::where('id', $id)->first();
                
                $change_status->update([
                    'status' => 'Sent',
                    'status_change' => date("d-m-y h:i:s")
                ]);
                return redirect()->back();
            }
            else return redirect('home');
        }
        else return redirect('login');
    }

}
