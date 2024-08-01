<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>
<body>
    <div class="grid grid-cols-2">
       <div class="relative">
<<<<<<< HEAD
            <a href="{{route('welcome')}}" class="absolute bg-red-500 text-white px-2 py-3 m-2 rounded-lg">Go Home</a>
            <img src="https://everestservice.com.np/upload/images/es-blood-bank.jpg" alt="" class="w-full h-screen shadow-lg">
=======
            <a href="{{route('welcome')}}" class="absolute bg-blue-500 text-white px-2 py-3 m-2 rounded-lg">Go Home</a>
            <img src="https://thumbs.dreamstime.com/b/vector-illustration-red-blood-drop-bottle-hand-white-background-blood-bank-red-drop-cross-116932473.jpg" alt="" class="w-full h-screen shadow-lg">
>>>>>>> 5a3ea78d5ec41c920d7a56797540326216bf5801
       </div>
        <div class="flex items-center justify-center w-8/12 mx-auto">
            <div class="text-center">
                <h2 class="font-bold text-2xl mb-5">Login</h2>
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <input type="text" class="border border-gray-300 p-2 w-full mt-4 rounded-lg" placeholder="Email" name="email">
                    <input type="password" class="border border-gray-300 p-2 w-full mt-4 rounded-lg" placeholder="Password" name="password">
<<<<<<< HEAD
                    <button type="submit" class="bg-red-500 text-white py-2 w-full rounded-lg mt-2">Login</button>
=======
                    <button type="submit" class="bg-blue-500 text-white py-2 w-full rounded-lg mt-2">Login</button>
>>>>>>> 5a3ea78d5ec41c920d7a56797540326216bf5801
                </form>
                <p class="mt-4">Don't have an account? <a href="{{route('register')}}" class="text-red-500">Become Donor</a></p>
            </div>
        </div>
    </div>
</body>
</html>
