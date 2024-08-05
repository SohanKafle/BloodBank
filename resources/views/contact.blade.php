@extends('layouts.master')
@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 mt-4">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Contact Us</h2>
        <form action="#" method="POST">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                <textarea id="message" name="message" rows="4" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"></textarea>
            </div>
            <div>
                <button type="submit" class="w-full p-3 bg-red-600 text-white rounded-lg hover:bg-red-700 transition duration-300">Send Message</button>
            </div>
        </form>
    </div>
</div>
@endsection