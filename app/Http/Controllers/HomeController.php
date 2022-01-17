<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Products;
use App\Models\actionOnCart;
use App\Models\cart;
use App\Models\transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function redirect_to_dashboard()
    {
        
        // $user_priv = Auth::user()->user_privilege;
        if (isset(Auth::user()->user_privilege)){
            $user_priv = Auth::user()->user_privilege;
            if($user_priv == '1')
            {
                return view('admin.admin_dashboard');
            }
            elseif($user_priv == '0')
            {
                $product_from_db = products::all(); 
                $user = auth()->user();
                $product_on_cart = cart::where( 'user_id', $user->id)->count();
                return view('users.user_index', compact('product_from_db', 'product_on_cart'));
            }

        }
        else{
            $product_from_db = products::all(); 
            return view('users.user_index', compact('product_from_db'));
        }
    }
    public function index()
    {
        
        if(Auth::id() != '0')
        {
            return redirect ('home');
        }
        else 
        {
            $product_from_db = products::all(); 
            return view('users.user_index', compact('product_from_db'));

        }
    }
    public function products(){
        if(Auth::id()){
            $user = Auth::user(); 
            $product_on_cart = cart::where('user_id', '=', $user->id)->count(); 
            $product_from_db = products::all(); 
            return view('users.user_products', compact('product_from_db', 'product_on_cart')); 
        }
        else{
            $product_from_db = products::all(); 
            return view('users.user_products', compact('product_from_db')); 
        }
    }

    public function about(){
        if(Auth::id()){
            $user = Auth::user(); 
            $product_on_cart = cart::where('user_id', '=', $user->id)->count(); 
            return view('users.user_about', compact('product_on_cart')); 
        }
        else{
            return view('users.user_products'); 
        }
    }
    public function contact(){
        if(Auth::id()){
            $user = Auth::user(); 
            $product_on_cart = cart::where('user_id', '=', $user->id)->count(); 
            return view('users.user_contact', compact('product_on_cart')); 
        }
        else{
            return view('users.user_contact');
        }
    }

    public function cart(){
        // if(Auth::id() != '0'){
        //     return redirect('login');
        // }
        // else{
            $user = Auth::user();
            $product_from_db = cart::where('user_id', '=', $user->id)->get(); 
            return view('users.user_cart', compact('product_from_db')); 
            
        // }
    }



    public function add_to_cart($id, Request $request)
    {
        
        $query = DB::table('products')->where('id', $id)->first();
        $user = Auth::user();

        if($request->quantity_yang_mau_dibeli > $query->quantity){
            return redirect()->back()->with('alert', 'Quantity bought must less than Stock');
        }
        else{
            $new_in_cart = new cart;
            $new_in_cart->user_id = $user->id;
            $new_in_cart->idOnProducts = $query->id;
            $new_in_cart->name = $query->name;
            $new_in_cart->price = $query->price;
            $new_in_cart->description = $query->description;
            $new_in_cart->quantity = $request->quantity_yang_mau_dibeli;
            $new_in_cart->image = $query->image;
            $new_in_cart->save();

            return redirect()->back()->with('success', 'Product added to cart');
        }   
    }

    public function delete_from_cart($id){
        if(Auth::id()){
            if(Auth::user()->user_privilege == '0'){
                
                $product = cart::find($id);
                $action = "delete";
                $user_id = $product->user_id;
                $idonproducts = $product->idOnProducts;
                $idoncart = $product->id;
                $name = $product->name; 
                $user_id = $product->user_id;
                $userinputquantity = $product->quantity;
                $product->delete();

                $actiononcart = new actionOnCart;
                $actiononcart->action = $action;
                $actiononcart->user_id = $user_id;
                $actiononcart->idOnProducts = $idonproducts;
                $actiononcart->idOnCart = $idoncart;
                $actiononcart->name = $name;
                $actiononcart->user_input_quantity = $userinputquantity;
                $actiononcart->save();


                return redirect()->back()->with('alert', 'Product Deleted from Cart' );
            }
            else return redirect('home');
        }
        else return redirect('login'); 
    }

    public function buying_product(Request $request)
    {
        
        $checkquantity = DB::table('products')->where('name', '=', $request->product_name)->where('price', '=', $request->product_price)->first();
        if( $request->product_quantity > $checkquantity->quantity   ){
            return redirect()->back()->with('done', 'There was an unexpected error. Please try again later!' );
        }
        // dd($request->product_quantity); 

        $user = Auth::user();

        $userid = $user->id;
        $name = $user->name;
        $phone = $user->phone;
        $address = $user->address;

        foreach ( $request->product_name as $x=>$y )
        {
            $transaction = new transaction;
            $transaction->user_id = $userid;
            $transaction->name = $name;
            $transaction->phone = $phone;
            $transaction->address = $address;
            $transaction->product_name = $request->product_name[$x];
            $transaction->product_quantity = $request->product_quantity[$x];
            $transaction->product_price = $request->product_price[$x];
            $transaction->status="Pending";
            $transaction->status_change="Pending";
            $transaction->product_image = $request->product_image[$x];
            $transaction->save();

        }

        $product_from_db = products::all(); 

        if (DB::table('products')->where('name', '=', $transaction->product_name) && DB::table('products')->where('price', '=', $transaction->product_price) ){ 
            $query = products::where('name', '=', $transaction->product_name)->where('price', '=', $transaction->product_price)->first(); 
            $query->quantity = $query->quantity - $transaction->product_quantity;
            $query->save();

        }
        DB::table('carts')->where('user_id', '=', $userid)->delete();
        return redirect()->back()->with('done', 'Order Confirmed! Thank you for your order.' );

    }


}
