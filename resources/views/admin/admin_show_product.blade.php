<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Starter Template - Night Admin Template: Tailwind Toolbox</title>
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
	
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
    <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

	<style>
		.bg-black-alt  {
			background:#191919;
		}
		.text-black-alt  {
			color:#191919;
		}
		.border-black-alt {
			border-color: #191919;
		}
		
	</style>

</head>
<body class="bg-black-alt font-sans leading-normal tracking-normal">

    <nav id="header" class="bg-gray-900 fixed w-full z-10 top-0 shadow">
	
        @include('admin.admin_navbar')
		
	</nav>

	<!--Container-->
	<div class="container w-full mx-auto pt-20">
		<div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal ">
            
            <!-- <table class="table table-striped bg-secondary text-black mt-10 table-hover table-bordered align-middle">
                <thead class="table-secondary">
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Photo</th>
                        <th>Update Action</th>
                        <th>Delete Action</th>


                    </tr>
                    .
                </thead>
                <tbody class="" >
                @foreach ($product_from_db as $product)
                    <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>
                        <img width="200px" src="/uploaded_product_image/{{$product->image}}" alt="">
                        <h6>{{$product->image}}</h6>
                    </td>
                    <td><a class="btn btn-info mt-5" href="">Update</a></td>
                    <td><a class="btn btn-danger mt-5" href="{{url('deleteproduct', $product->id)}}">Delete</a></td>

                    </tr>
                @endforeach

                   
                </tbody>
            </table> -->
            @if(session()->has('alert'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-6" role="alert">
                    <p class="font-bold">{{session()->get('alert')}}</p> 
                </div>

            @endif
            <table class="min-w-full border-collapse block md:table">
                <thead class="block md:table-header-group">
                    <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell">Name</th>
                        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell">Price</th>
                        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell">Description</th>
                        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell">Quantity</th>
                        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell">Photo</th>
                        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell">Action</th>
                    </tr>
                </thead>
                <tbody class="block md:table-row-group">
                    @php
                        $odd = 'true';
                    @endphp
                    @foreach ($product_from_db as $product)
                        @if ($odd == 'true') 
                            <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                                <td class="p-2 md:border md:border-grey-500 block md:table-cell text-center"><span class="inline-block w-1/3 md:hidden font-bold">Name</span>{{$product->name}}</td>
                                <td class="p-2 md:border md:border-grey-500 block md:table-cell text-center"><span class="inline-block w-1/3 md:hidden font-bold">Price</span>{{$product->price}}</td>
                                <td class="p-2 md:border md:border-grey-500 block md:table-cell text-center"><span class="inline-block w-1/3 md:hidden font-bold">Description</span>{{$product->description}}</td>
                                <td class="p-2 md:border md:border-grey-500 block md:table-cell text-center"><span class="inline-block w-1/3 md:hidden font-bold">Quantity</span>{{$product->quantity}}</td>
                                <td class="p-2 md:border md:border-grey-500 block md:table-cell text-center"><span class="inline-block w-1/3 md:hidden font-bold">Photo</span>
                                    <img class="mx-auto" width="200px" src="/uploaded_product_image/{{$product->image}}" alt="">
                                    <h6>{{$product->image}}</h6>
                                </td>

                                <td class="p-2 md:border md:border-grey-500  block md:table-cell text-center">
                                    <span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
                                    <a href="{{url('edit_product', $product->id)}}">
                                        <button class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Edit</button>
                                    </a>
                                    <a href="{{url('delete_product', $product->id)}}">
                                        <button class=" bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button>
                                    </a>
                                </td>
                            </tr>
                            @php
                                $odd = 'false';
                            @endphp

                        @else
                            <tr class="bg-white border border-grey-500 md:border-none block md:table-row">
                                <td class="p-2 md:border md:border-grey-500 text-center block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Name</span>{{$product->name}}</td>
                                <td class="p-2 md:border md:border-grey-500 text-center block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Price</span>{{$product->price}}</td>
                                <td class="p-2 md:border md:border-grey-500 text-center block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Description</span>{{$product->description}}</td>
                                <td class="p-2 md:border md:border-grey-500 text-center block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Quantity</span>{{$product->quantity}}</td>
                                <td class="p-2 md:border md:border-grey-500 text-center block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Photo</span>
                                    <img class="mx-auto" width="200px" src="/uploaded_product_image/{{$product->image}}" alt="">
                                    <h6>{{$product->image}}</h6>
                                </td>
                                <td class="p-2 md:border md:border-grey-500 block md:table-cell text-center">
                                    <span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
                                    <a href="{{url('edit_product', $product->id)}}">
                                        <button class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Edit</button>
                                    </a>
                                    <a href="{{url('delete_product', $product->id)}}">
                                        <button class=" bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button>
                                    </a>
                                </td>
                            </tr>
                            @php
                                $odd = 'true';
                            @endphp
                        @endif
                    @endforeach	
                </tbody>
	        </table>

    
        </div>
    </div>


	<!--/container-->
	
	@include('admin.admin_footer')

    @include('admin.admin_script')

</body>
</html>
