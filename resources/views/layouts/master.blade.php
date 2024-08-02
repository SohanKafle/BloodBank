<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
/>
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
    </style>
</head>

<body class="font-sans bg-gray-100 text-gray-900">

    <header class="bg-white">
        <nav class="bg-red-600 shadow-md fixed top-0 left-0 w-full z-50">
            <div class=" flex justify-between items-center py-0 pr-0 md:px-0 mr-4">

                <a href="/"> <img src="images/donor/logoo.png" alt="Bloodbank Logo" class="h-20 mr-20"></a>


                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-black hover:text-white focus:outline-none">
                        <i class='bx bx-menu text-3xl'></i>
                    </button>
                </div>


                <ul id="nav-links" class="hidden md:flex gap-10 items-center">
                    <li>
                        <a href="/" class="text-2xl font-medium flex items-center space-x-1 text-black hover:text-white">
                            <i class='bx bx-home'></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#about" class="text-2xl font-medium flex items-center space-x-1 text-black hover:text-white">
                            <i class='bx bx-user'></i>
                            <span>About Us</span>
                        </a>
                    </li>
                    <li>
                        <a href="#services" class="text-2xl font-medium flex items-center space-x-1 text-black hover:text-white">
                            <i class='bx bx-cog'></i>
                            <span>Our Services</span>
                        </a>
                    </li>
                    <li>
                        <a href="#contact" class="text-2xl font-medium flex items-center space-x-1 text-black hover:text-white">
                            <i class='bx bx-envelope'></i>
                            <span>Contact Us</span>
                        </a>
                    </li>
                </ul>
              
                
                
              
                <div class="hidden md:flex items-center space-x-4 lg:order-2">
                    <a href="{{ route('login') }}">
                        <button type="button" class="px-4 lg:px-5 py-2 lg:py-2.5 mr-2 text-white bg-gradient-to-br from-purple-500 to-purple-400 hover:bg-gradient-to-bl font-medium rounded-lg text-lg">
                            Login
                        </button>
                    </a>
                    <a href="{{ route('register') }}">
                        <button class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-lg font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900">
                            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-sec-600 dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                Register
                            </span>
                        </button>
                    </a>
                </div>
            </div>
                

            <div id="mobile-menu" class="md:hidden hidden bg-gray-100 shadow-md transition-all">
                <ul class="flex flex-col items-center space-y-4 py-4">
                    <li>
                        <a href="/" class="text-1xl font-bold flex items-center space-x-1 text-black hover:text-blue-500">
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
                        <a href="#services" class="text-1xl font-bold flex items-center space-x-1 text-black hover:text-blue-500">
                            <i class='bx bx-cog'></i>
                            <span>Our Services</span>
                        </a>
                    </li>
                    <li>
                        <a href="#contact" class="text-1xl font-bold flex items-center space-x-1 text-black hover:text-blue-500">
                            <i class='bx bx-envelope'></i>
                            <span>Contact Us</span>
                        </a>
                    </li>
                    <li class="flex flex-col items-center space-y-2">
                        <a href="{{ route('login') }}">
                            <button type="button" class="px-4 lg:px-5 py-2 lg:py-2.5 text-white bg-gradient-to-br from-purple-500 to-purple-400 hover:bg-gradient-to-bl font-medium rounded-lg text-sm">
                                Login
                            </button>
                        </a>
                        <a href="{{ route('register') }}">
                            <button class="relative mr-4 inline-flex items-center justify-center overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900">
                                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-sec-600 dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Register
                                </span>
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Main content -->
    @yield('content')

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 px-4 md:px-0">

            <div class="lg:col-span-2">
                <h3 class="font-bold mb-2 ml-5">About Us</h3>
                <p class="text-gray-400 ml-5">
                    Hello there. How are ya </p>
            </div>

            <div>
                <h3 class="font-bold mb-2">Contact Info</h3>
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
                <h3 class="font-bold mb-2">Quick Links</h3>
                <ul>
                    <li class="mb-1 font-medium"><a href="/" class="hover:text-red-500">Home</a></li>
                    <li class="mb-1 font-medium"><a href="#about" class="hover:text-red-500">About Us</a></li>
                    <li class="mb-1 font-medium"><a href="#services" class="hover:text-red-500">Our Goals</a></li>
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