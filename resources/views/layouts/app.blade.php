<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
/>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        @if(Session::has('success'))
        <div class="fixed top-4 right-4 rounded-lg shadow-md bg-blue-600 text-white px-5 py-3" id="message">
            <p>{{session('success')}}</p>
        </div>
        <script>
            setTimeout(() => {
                document.getElementById('message').style.display = 'none';
            }, 2000);
        </script>
        @endif

        <div class="flex">
            <div class="w-56 h-screen bg-gray-100 shadow">
                <img src="{{asset('images/donor/adminlogo.png')}}" alt="" class="p-2 m-2 w-9/12 mx-auto mt-5 ">
                <div class="mt-5">
                    <a href="{{route('dashboard')}}" class="text-xl block pl-4 p-2 m-2 border-b border-red-500 hover:bg-red-700 hover:text-white"><i class="ri-dashboard-fill px-2"></i>Dashboard</a>
                    <a href="{{route('donors.index')}}" class="text-xl block pl-4 p-2 m-2 border-b border-red-500 hover:bg-red-700 hover:text-white"><i class="ri-user-heart-line px-2"></i>Donors</a>
                    <a href="" class="text-xl block pl-4 p-2 m-2 border-b border-red-500 hover:bg-red-700 hover:text-white"><i class="ri-contrast-drop-2-line px-2"></i>Blood Requests</a>
                    <form action="{{route('logout')}}" method="post" class="text-xl block pl-4 p-2 m-2 border-b border-red-500 hover:bg-red-700 hover:text-white">
                        @csrf
                        <button type="submit" class="block w-full text-left"><i class="ri-logout-circle-line px-2"></i> Logout</button>
                    </form>
                </div>
            </div>
            <div class="p-4 flex-1">
                @yield('content')
            </div>
        </div>
    </body>
</html>