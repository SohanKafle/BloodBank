@extends('layouts.app')
@section('content')
    <h2 class="font-bold text-3xl text-red-500">Dashboard</h2>
    <hr class="h-1 bg-red-500">

    <div class="grid grid-cols-3 gap-4 mt-10">
        <div class="bg-blue-500 p-4 shadow-md rounded-lg">
            <h3 class="font-bold text-2xl text-white">Total Donors</h3>
            <p class="text-4xl text-white font-bold">100</p>
        </div>
        <div class="bg-red-500 p-4 shadow-md rounded-lg">
            <h3 class="font-bold text-2xl text-white">Blood Request</h3>
            <p class="text-4xl text-white font-bold">100</p>
        </div>
    </div>
    
@endsection