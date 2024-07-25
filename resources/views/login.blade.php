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
              src="img/pst.png"
              alt="logo PST"
              class="h-16 w-16"
            />
        </div>
        <h2 class="text-xl xl:text-3xl font-bold text-black text-center">
            Login Admin
        </h2>
        <p class="font-extralight text-lg xl:text-lg text-center mb-4">
            Antrian PST
        </p>
        <form>
            <div class="mb-4">
                <label for="username" class="block text-black text-sm md:text-sm font-medium">Username</label>
                <input
                  type="text"
                  id="floating_username"
                  class="block mt-2 py-2 lg:py-2 pl-5 w-full text-sm text-grey bg-silver rounded-md border border-gray-300 appearance-none focus:outline-none focus:ring-0 peer"
                  placeholder=" "
                  required
                />
            </div>
            <div class="mb-6">
                <label for="username" class="block text-black text-sm font-medium">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    class="block mt-2 py-2 lg:py-2 pl-5 w-full text-sm text-grey bg-silver rounded-md border border-gray-300 appearance-none focus:outline-none focus:ring-0 peer"
                />
            </div>
            <button type="submit" class="w-full bg-birunavbar text-white p-2 rounded hover:bg-blue-600 font-bold">Login</button>
        </form>
    </div>
</body>
</html>
