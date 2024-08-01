<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regsiter Page</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>
<body>
    <div class="grid grid-cols-2">
       <div class="relative">
<<<<<<< HEAD
            <a href="{{route('welcome')}}" class="absolute bg-teal-500 text-white px-2 py-3 m-2 rounded-lg">Go Home</a>
            <img src="https://www.cpsmumbai.org/Uploads/2762023161833920.png" alt="" class="w-full h-screen shadow-lg">
=======
            <a href="{{route('welcome')}}" class="absolute bg-blue-500 text-white px-2 py-3 m-2 rounded-lg">Go Home</a>
            <img src="https://img.freepik.com/premium-vector/blood-donation-medical-background_87521-2933.jpg?w=360" alt="" class="w-full h-screen shadow-lg">
>>>>>>> bcd5389993a3a87745bc1e2f8480e60979cf400b
       </div>
        <div class="flex items-center justify-center w-8/12 mx-auto">
            <div class="text-center">
                <h2 class="font-bold text-2xl mb-5">Register</h2>
                <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" class="border border-gray-300 p-2 w-full mt-4 rounded-lg" placeholder="Name" name="name" value="{{old('name')}}">
                    @error('name')
                    <p class="text-red-500 text-sm">{{$message}}</p> 
                    @enderror
                    <input type="text" class="border border-gray-300 p-2 w-full mt-4 rounded-lg" placeholder="Email" name="email" value="{{old('email')}}">
                    @error('email')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                    @enderror
                    <input type="text" class="border border-gray-300 p-2 w-full mt-4 rounded-lg" placeholder="Phone" name="phone" value="{{old('phone')}}">
                    @error('phone')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                    @enderror
                    <select name="bloodgroup" name="bloodgroup"id="bloodgroup" class="border border-gray-300 p-2 w-full mt-4 rounded-lg" value="{{old('bloodgroup')}}">
                        <option value="bloodgroup" disabled selected>Select Blood Group</option>
                        <option value="a+">A+</option>
                        <option value="b+">B+</option>
                        <option value="ab+">AB+</option>
                        <option value="o+">O+</option>
                        <option value="a-">A-</option>
                        <option value="b-">B-</option>
                        <option value="ab-">AB-</option>
                        <option value="o-">O-</option>
                        </select>
                        @error('bloodgroup')
                        <p class="text-red-500 text-sm">{{$message}}</p>
                        @enderror
                    <input type="text" class="border border-gray-300 p-2 w-full mt-4 rounded-lg" placeholder="Address" name="address" value="{{old('address')}}">
                    @error('address')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                    @enderror
                    <input type="text" class="border border-gray-300 p-2 w-full mt-4 rounded-lg" placeholder="Age" name="age" value="{{old('age')}}">
                    @error('age')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                    @enderror
                    <input type="password" class="border border-gray-300 p-2 w-full mt-4 rounded-lg" placeholder="Password" name="password">
                    @error('password')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                    @enderror
                    <input type="password" class="border border-gray-300 p-2 w-full mt-4 rounded-lg" placeholder="Confirm Password" name="password_confirmation">
                    @error('password_confirmation')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                    @enderror
                    <input type="file" class="border border-gray-300 p-2 w-full mt-4 rounded-lg" name="photopath" id="photopath">
                    @error('photopath')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                    @enderror
                    <button type="submit" class="bg-teal-500 text-white py-2 w-full rounded-lg mt-2">Register</button>
                </form>
                <p class="mt-4">Already have an account? <a href="{{route('login')}}" class="text-teal-500">Login</a></p>
            </div>
        </div>
    </div>
</body>
</html>