<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-200 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-sm">
        <div class="flex justify-center mb-4">  
            <img
              src="img/logo bps.png"
              alt="logo BPS"
              class="h-16 w-16"
            />
        </div>
        <h2 class="text-xl xl:text-3xl font-bold text-black text-center">
            Login Admin
        </h2>
        <p class="font-extralight text-lg xl:text-lg text-center mb-4">
            Antrian PST
        </p>

        @if(Session::has('loginError'))
            <div id="alert" class="relative bg-red-300 text-red-800 border border-red-400 p-4 rounded mb-4 flex items-start">
                <button class="absolute top-2 right-2 text-red-800 hover:text-red-600" onclick="document.getElementById('alert').style.display='none';">
                    &times;
                </button>
                {{ session('loginError') }}
            </div>
        @endif

        <form action="/login" method="POST">
            @csrf
            <div class="mb-4">
                <label for="username" class="block text-black text-sm md:text-sm font-medium">Username</label>
                <input
                  name="username"
                  type="text"
                  id="username"
                  class="block mt-2 py-2 lg:py-2 pl-5 w-full text-sm text-grey bg-silver rounded-md border border-gray-300 appearance-none focus:outline-none focus:ring-0 peer"
                  placeholder=" "
                  required
                />
            </div>
            <div class="mb-6">
                <label for="username" class="block text-black text-sm font-medium">Password</label>
                <input 
                    name="password"
                    type="password" 
                    id="password" 
                    class="block mt-2 py-2 lg:py-2 pl-5 w-full text-sm text-grey bg-silver rounded-md border border-gray-300 appearance-none focus:outline-none focus:ring-0 peer"
                    required
                    />
            </div>
            <button type="submit" class="w-full bg-birunavbar text-white p-2 rounded hover:bg-blue-600 font-bold">Login</button>
        </form>
    </div>
</body>
</html>
