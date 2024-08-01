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
            <a href="{{route('welcome')}}" class="absolute bg-red-500 text-white px-2 py-3 m-2 rounded-lg">Go Home</a>
            <img src="https://www.cpsmumbai.org/Uploads/2762023161833920.png" alt="" class="w-full h-screen shadow-lg">
       </div>
        <div class="flex items-center justify-center w-8/12 mx-auto">
            <div class="text-center">
                <h2 class="font-bold text-2xl mb-5">Request Blood Form</h2>
                <p class="font-semibold text-xl mb-5 text-red-500">Request Blood without signup!!</p>
                <form action="{{route('peoples.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" class="border border-gray-300 p-2 w-full mt-4 rounded-lg" placeholder="Name" name="name" value="{{old('name')}}">
                    @error('name')
                    <p class="text-red-500 text-sm">{{$message}}</p> 
                    @enderror

                    <input type="text" class="border border-gray-300 p-2 w-full mt-4 rounded-lg" placeholder="Phone" name="phone" value="{{old('phone')}}">
                    @error('phone')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                    @enderror
                    <input type="text" class="border border-gray-300 p-2 w-full mt-4 rounded-lg" placeholder="Address" name="address" value="{{old('address')}}">
                    @error('address')
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
                  
                    <input type="text" class="border border-gray-300 p-2 w-full mt-4 rounded-lg" placeholder="Age" name="age" value="{{old('age')}}">
                    @error('age')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                    @enderror
                   
                  
                    <input type="file" class="border border-gray-300 p-2 w-full mt-4 rounded-lg" name="photopath" id="photopath">
                    @error('photopath')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                    @enderror
                    <button type="submit" class="bg-red-500 text-white py-2 w-full rounded-lg mt-2">Register</button>
                </form>
                
        </div>
    </div>
</body>
</html>