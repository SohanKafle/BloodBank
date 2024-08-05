@extends('layouts.task')
@section('content')
<br>
<br>
<br>
<br>
    <h2 class="font-bold text-3xl text-red-600">Edit Profile </h2>
    <hr class="h-1 bg-red-600">

    <div class="mt-10">
        <form action="{{route('users.update',$donor->id)}}" method="POST">
            @csrf
           
            <div class="mb-5">
                <input type="text" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Name" name="name" value="{{$donor->name}}">
                @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-5">
                <input type="text" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Address" name="address" value="{{$donor->address}}">
                @error('address')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            
            
            <div class="mb-5">
                <input type="text" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Email" name="email" value="{{$donor->email}}">
                @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-5">
                <input type="text" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="phone" name="phone" value="{{$donor->phone}}">
                @error('phone')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>

           

            <div class="mb-5 flex gap-5 justify-center">
                <button class="bg-red-600 text-white p-3 rounded-lg">Update details</button>
                <a href="{{route('users.index')}}" class="bg-gray-600 text-white p-3 rounded-lg">Cancel</a>
            </div>
        </form>
    </div>


@endsection