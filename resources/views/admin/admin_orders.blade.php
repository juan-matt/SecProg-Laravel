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


        <div class="bg-gray p-8 rounded-md w-full">
            <div class=" flex items-center justify-between pb-6">
                <div>
                    <h2 class="text-white font-semibold">Orders</h2>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex bg-gray items-center p-2 rounded-md">
                        
                </div>
                        
                    </div>
                </div>
                <div>
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Name
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Phone
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Address
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Product Name
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Quantity
                                        </th>
                                        
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Image
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Status
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $odd = 'true';
                                    @endphp
                                    @foreach($orders_from_db as $order)
                                    
                                    @if ($order->status == 'Pending')
                                        <tr>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-gray text-sm">
                                                <div class="flex items-center">
                                                    <div class="ml-3">
                                                        <p class="text-white whitespace-no-wrap">
                                                            {{$order->name}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-gray text-sm">
                                                <p class="text-white whitespace-no-wrap">{{$order->phone}}</p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-gray text-sm">
                                                <p class="text-white whitespace-no-wrap">{{$order->address}}</p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-gray text-sm">
                                                <p class="text-white whitespace-no-wrap">{{$order->product_name}}</p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-gray text-sm">
                                                <p class="text-white whitespace-no-wrap">{{$order->product_quantity}}</p>
                                            </td>
                                            
                                            <td class="px-5 py-5 border-b border-gray-200 bg-gray text-sm">
                                                <img src="/uploaded_product_image/{{$order->product_image}}" width="200px" alt="">
                                            </td>
                                            
                                            <td class="px-5 py-5 border-b border-gray-200 text-sm">
                                                <span
                                                    class="relative inline-block px-3 py-1 font-semibold text-white leading-tight">
                                                    <span aria-hidden
                                                        class="absolute inset-0 bg-red-900 opacity-50 rounded-full"></span>
                                                <span class="relative">{{$order->status}}</span>
                                                </span>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-gray text-sm">
                                                <!-- <p class="text-white whitespace-no-wrap">{{$order->product_quantity}}</p> -->
                                                <!-- <button class="pointer-events-none bg-green-500 text-white font-bold py-1 px-2 border border-blue-500 rounded" disabled>Sent</button> -->
                                                <a href="{{url('change_to_sent', $order->id)}}">
                                                    <button class=" bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Sent</button>
                                                </a>
                                            </td>
                                        </tr>


                                    @php
                                    $odd = 'false';
                                    @endphp
                                    @else
                                        <tr>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-gray text-sm">
                                                <div class="flex items-center">
                                                    <div class="ml-3">
                                                        <p class="text-white whitespace-no-wrap">
                                                            {{$order->name}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-gray text-sm">
                                                <p class="text-white whitespace-no-wrap">{{$order->phone}}</p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-gray text-sm">
                                                <p class="text-white whitespace-no-wrap">{{$order->address}}</p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-gray text-sm">
                                                <p class="text-white whitespace-no-wrap">{{$order->product_name}}</p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-gray text-sm">
                                                <p class="text-white whitespace-no-wrap">{{$order->product_quantity}}</p>
                                            </td>
                                            
                                            <td class="px-5 py-5 border-b border-gray-200 bg-gray text-sm">
                                                <img src="/uploaded_product_image/{{$order->product_image}}" width="200px" alt="">
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 text-sm">
                                                <span
                                                    class="relative inline-block px-3 py-1 font-semibold text-white leading-tight">
                                                    <span aria-hidden
                                                        class="absolute inset-0 bg-green-900 opacity-50 rounded-full"></span>
                                                <span class="relative">{{$order->status}}</span>
                                                </span>
                                            </td>
                                            <!-- <td class="px-5 py-5 bg-gray text-sm">
                                                <span
                                                    class="relative inline-block px-3 py-1 font-semibold text-white leading-tight">
                                                    <span aria-hidden
                                                        class="absolute inset-0 bg-red-900 opacity-50 rounded-full"></span>
                                                <span class="relative">Pending</span>
                                                </span>
                                            </td> -->
                                            <td class="px-5 py-5 border-b border-gray-200 bg-gray text-sm">
                                                <!-- <p class="text-white whitespace-no-wrap">{{$order->product_quantity}}</p> -->
                                                <button class="pointer-events-none bg-green-500 text-white font-bold py-1 px-2 border border-blue-500 rounded" disabled>Good Job!</button>
                                            </td>
                                        </tr>
                                        
                                    
                                        @php
                                            $odd = 'true';
                                        @endphp
                                    @endif
                                    
                                    @endforeach
                                </tbody>
                            </table>
                            <div
                                class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
                                
                            </div>
                        </div>
                    </div>
                </div>
	</div>










        </div>
    </div>


	<!--/container-->
	
	@include('admin.admin_footer')

    @include('admin.admin_script')

</body>
</html>
