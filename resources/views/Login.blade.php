<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Login</title>
</head>
<body class="bg-slate-100">
    
        <div class="mx-auto p-4 md:flex md:justify-center mb-6 mt-10" >
            <!-- wrapper -->
                <!-- card container -->
                <div class="max-w-screen-lg border-2 shadow-lg rounded overflow-hidden m-4 lg:flex">
                    <!-- card-content -->
                    {{-- <div class="h-auto sm:h-auto sm:w-48 md:w-64 flex-none bg-cover bg-center text-center overflow-hidden" style="background-image: url('https://unsplash.it/804/800')"></div> --}}
                    <div class="bg-white px-8 pt-6 pb-8  flex flex-col ">
                        <div class="text-xl ">
                            <div class="text-red-500 font-bold">
                                Tempo<div class="inline-block text-gray-400">Store</div> 
                            </div>
                        </div>
                        <div class="m-3"></div>
                        <p class="text-2xl font-bold ">
                            Login
                        </p>
                        <p class="text-sm text-gray-400 mb-3">
                            Pleace Input Yout Account
                        </p>
                        <div class="mb-4">
                          <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
                            Username
                          </label>
                          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="username" type="text" placeholder="Username">
                        </div>
                        <div class="mb-6">
                          <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
                            Password
                          </label>
                          <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3" id="password" type="password" placeholder="******************">
                        </div>
                        <div class="flex items-center justify-between">
                          <button class="bg-purple-600 hover:bg-blue-dark w-full text-white font-bold py-2 px-4 rounded" type="button">
                            Login
                          </button>
                        </div>
                        
                    </div>
                    <div class="bg-red-500 border-x-2 rounded px-8 pt-6 pb-8 overflow-hidden  flex flex-col">
                        <div class="w-96">asas</div>
                    </div>
                </div>
            </div>
    </div>
    
    
</body>
</html>