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
            <div class="flex flex-wrap place-content-center ">
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <p class="text-white text-5xl">Edit Product</p>

                    <form class="w-full max-w-sm mt-8" action="{{url('editing_product', $product->id)}}" method="post" enctype="multipart/form-data"> 
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name" >
                                    Product Name
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input value="{{$product->name}}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="name" type="text" placeholder="Edit Product's Name" required>
                            </div>
                        </div>

                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                                    Price
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input value="{{$product->price}}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="price" type="number" placeholder="Edit Product's Price" required>
                            </div>
                        </div>

                        
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                                    Description
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <textarea rows="3" class="py-2 px-4 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" name="description" placeholder="Edit Product's Description" required>{{$product->description}}</textarea>
                            </div>
                        </div>

                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                                    Quantity
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input value="{{$product->quantity}}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="quantity" type="number" placeholder="Edit Product's Quantity" required>
                            </div>
                        </div>

                        <div class="md:flex md:items-center mb-10">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                                    Product Photo
                                </label>
                            </div>
                            <div class="md:w-2/3 text-white">
                                <h6 class="text-gray-500 font-bold  mb-1 md:mb-0 pr-4 text-center">Old image</h6>
                                <img src="/uploaded_product_image/{{$product->image}}" alt="">
                                <h6>{{$product->image}}</h6>
                                <br>
                                <h6 class="text-gray-500 font-bold pb-3 md:mb-0 pr-4 text-center">(Optional) Upload New Image</h6>
                                <input class=" text-white" type="file" name="product_image">
                            </div>
                        </div>

                        <div class="md:flex md:items-center">
                            <div class="md:w-1/3"></div>
                            <div class="md:w-2/3">
                                <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                                    Edit Product
                                </button>
                            </div>
                        </div>

                        
                    </form>
                    @if(session()->has('alert'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-6" role="alert">
                            <p class="font-bold">{{session()->get('alert')}}</p>
                        </div>

                    @endif

                    

                </div>
            </div>





        </div>
    </div>




    <!--/container-->
	
	@include('admin.admin_footer')

    @include('admin.admin_script')

</body>
</html>
