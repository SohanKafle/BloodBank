<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            max-width: 100%;
            scroll-behavior: smooth;
        }

        .container,
        .content,
        .section,
        .header,
        .footer {
            overflow-x: hidden;
            max-width: 100%;
            margin: 0 auto;
        }

        .container {
            padding-right: 1rem;
            padding-left: 1rem;
            width: 100%;
        }

        .transition-all {
            transition: all 0.3s ease;
        }

        .footer-line {
            border-top: 1px solid gray;
            margin-top: 1px;
        }

        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 24px;
            line-height: 50px;
            text-align: center;
            cursor: pointer;
            z-index: 1000;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
        }

        .back-to-top:hover {
            background-color: #0056b3;
        }


        li {
            margin-left: 20px;
        }

        li a,
        .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 7px 20px;
            text-decoration: none;
        }



        li.dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #D22B2B;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 20px;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .btn {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            width: 100%;
            text-align: left;
        }

        .btn:hover {
            background-color: #f1f1f1;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body class="font-sans bg-gray-100 text-gray-900">

    <header class="bg-white">
        <nav class="bg-red-600 shadow-md fixed top-0 left-0 w-full z-50">
            <div class=" flex justify-between items-center py-0 pr-0 md:px-0 mr-4">

                <a href="{{route('users.index')}}"> <img class="h-20 mr-20" src="{{asset('images\donor\logoo.png')}}" alt="Bloodbank Logo" class="h-16"></a>


                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-black hover:text-white focus:outline-none">
                        <i class='bx bx-menu text-3xl'></i>
                    </button>
                </div>


                <ul id="nav-links" class="hidden md:flex items-center">
                    <li>
                        <a href="{{route('users.index')}}" class="text-2xl font-medium flex items-center space-x-1 text-white hover:text-black">
                            <i class='bx bx-home'></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('users.about')}}" class="text-2xl font-medium flex items-center space-x-1 text-white hover:text-black">
                            <i class='bx bx-user'></i>
                            <span>About Us</span>
                        </a>
                    </li>
                    <li>
                        <a href="#goals" class="text-2xl font-medium flex items-center space-x-1 text-white hover:text-black">
                            <i class='bx bx-cog'></i>
                            <span>Our Goals</span>
                        </a>
                    </li>
                    
                </ul>


                <ul>
                    <li class="dropdown">
                        @auth
                        <a href="javascript:void(0)" class="dropbtn text-2xl font-medium flex items-center space-x-1 text-black hover:text-white">Hi, {{auth()->user()->name}}</a>
                        <div class="dropdown-content">
                            <a href="{{route('users.profile')}}">Profile</a>
                            <form action="{{route('logout')}}" method="post" class="inline">
                                @csrf
                                <button type="submit" class=" btn">Logout</button>
                            </form>

                        </div>
                        @endauth
                    </li>
                </ul>
            </div>

            <div id="mobile-menu" class="md:hidden hidden bg-gray-100 shadow-md transition-all">
                <ul class="flex flex-col items-center space-y-4 py-4">
                    <li>
                        <a href="{{route('users.index')}}">" class="text-1xl font-bold flex items-center space-x-1 text-black hover:text-blue-500">
                            <i class='bx bx-home'></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#about" class="text-1xl font-bold flex items-center space-x-1 text-black hover:text-blue-500">
                            <i class='bx bx-user'></i>
                            <span>About Us</span>
                        </a>
                    </li>
                    <li>
                        <a href="#goals" class="text-1xl font-bold flex items-center space-x-1 text-black hover:text-blue-500">
                            <i class='bx bx-cog'></i>
                            <span>Our Goals</span>
                        </a>
                    </li>
                </ul>


                <div class="relative" data-twe-dropdown-ref>
                    <button class="flex items-center rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong" type="button" id="dropdownMenuButton1" data-twe-dropdown-toggle-ref aria-expanded="false" data-twe-ripple-init data-twe-ripple-color="light">
                        Dropdown button
                        <span class="ms-2 w-2 [&>svg]:h-5 [&>svg]:w-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    </button>
                    <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark" aria-labelledby="dropdownMenuButton1" data-twe-dropdown-menu-ref>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="#" data-twe-dropdown-item-ref>Action</a>
                        </li>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="#" data-twe-dropdown-item-ref>Another action</a>
                        </li>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="#" data-twe-dropdown-item-ref>Something else here</a>
                        </li>
                    </ul>
                </div>



            </div>
        </nav>
    </header>


    @yield('content')


    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 px-4 md:px-0">

            <div class="lg:col-span-2">
                <h3 class="font-bold mb-2 ml-5">About Us</h3>
                <p class="text-gray-400 ml-5">
                If you are looking for a blood donor or wanting to donate blood then we are the one for you. We look forward to helping you!</p>
            </div>

            <div>
                <h3 class="font-bold mb-2 ml-4">Contact Info</h3>
                <ul class="text-gray-400 ">
                    <li class="flex items-center mb-3 font-medium hover:text-red-500">
                        <i class='bx bx-map mr-2'></i> Gaindakot-01, Nawalpur
                    </li>
                    <li class="flex items-center mb-3 font-medium hover:text-red-500">
                        <i class='bx bx-phone mr-2'></i> 078-7501202 / 9812345678
                    </li>
                    <li class="flex items-center mb-3 font-medium hover:text-red-500">
                        <i class='bx bx-envelope mr-2'></i> info@bloodbank.com
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="font-bold mb-2 ml-6">Quick Links</h3>
                <ul>
                    <li class="mb-0 font-medium"><a href="{{route('users.index')}}" class="hover:text-red-500">Home</a></li>
                    <li class="mb-0 font-medium"><a href="{{route('users.about')}}" class="hover:text-red-500">About Us</a></li>
                    <li class="mb-0 font-medium"><a href="#goals" class="hover:text-red-500">Our Goals</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-bold mb-2">Find Us On</h3>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-red-500"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="hover:text-red-500"><i class='bx bxl-twitter'></i></a>
                    <a href="#" class="hover:text-red-500"><i class='bx bxl-instagram'></i></a>
                    <a href="#" class="hover:text-red-500"><i class='bx bxl-linkedin'></i></a>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-line"></div>
    <div class="copyright text-center bg-gray-900 text-white py-2 font-medium">
        <p>&copy;{{date('Y')}} All Rights Reserved Blood Bank</p>
    </div>


    <!-- Back to top button -->
    <button class="back-to-top" id="back-to-top">
        <i class="bx bx-up-arrow-alt"></i>
    </button>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();

        // Toggle mobile menu
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Back to top button
        const backToTopButton = document.getElementById('back-to-top');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 200) {
                backToTopButton.style.display = 'block';
            } else {
                backToTopButton.style.display = 'none';
            }
        });
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>

</html>