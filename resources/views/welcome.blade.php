<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <!-- Navbar (Horizontal) -->
    <nav class="bg-gradient-to-b from-white to-gray-100 text-black py-4 px-6 shadow-md fixed top-0 left-0 right-0 z-10 w-full">
        <div class="flex items-center justify-between max-w-screen-xl mx-auto">
            <div class="text-xl font-semibold tracking-wide">Logo</div>
            <!-- Menu Toggler (Hamburger) for Mobile -->
            <div class="lg:hidden flex items-center">
                <button id="navbar-toggle" class="text-black focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Navbar Links -->
            <div class="hidden lg:flex items-center space-x-6 text-sm">
                <a href="#" class="hover:text-yellow-500 transition duration-300">Product</a>
                <a href="#" class="hover:text-yellow-500 transition duration-300">Features</a>
                <a href="#" class="hover:text-yellow-500 transition duration-300">Company</a>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="hover:text-yellow-500 transition duration-300">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" 
                            class="bg-yellow-500 text-white py-1 px-4 rounded-md shadow-md hover:bg-yellow-600 transition duration-300 transform hover:scale-105">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" 
                                class="hover:text-yellow-500 transition duration-300">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <!-- Mobile Menu (Hidden by Default) -->
    <div id="mobile-menu" class="lg:hidden absolute top-0 left-0 right-0 bg-white shadow-md hidden">
        <div class="flex flex-col items-center py-4">
            <a href="#" class="text-black py-2 px-4 hover:text-yellow-500 transition duration-300">Product</a>
            <a href="#" class="text-black py-2 px-4 hover:text-yellow-500 transition duration-300">Features</a>
            <a href="#" class="text-black py-2 px-4 hover:text-yellow-500 transition duration-300">Company</a>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-black py-2 px-4 hover:text-yellow-500 transition duration-300">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" 
                        class="bg-yellow-500 text-white py-2 px-4 rounded-md shadow-md hover:bg-yellow-600 transition duration-300 transform hover:scale-105">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" 
                            class="text-black py-2 px-4 hover:text-yellow-500 transition duration-300">Register</a>
                    @endif
                @endif
            @endif
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="pt-24 px-6 flex items-center justify-center min-h-screen">
        <div class="max-w-screen-xl w-full bg-white rounded-lg shadow-lg overflow-hidden p-8">
            <div class="flex flex-col lg:flex-row items-center">
                <!-- Left Section (Text) -->
                <div class="lg:w-1/2 p-6 text-center lg:text-left">
                    <h1 class="text-4xl font-bold text-gray-800 mb-4">Data to Enrich Your Business</h1>
                    <p class="text-lg text-gray-600 mb-6">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                    <div class="mt-8 space-y-4 lg:space-x-4 lg:space-y-0 lg:flex">
                        <a href="#" class="bg-blue-500 text-white py-3 px-6 rounded-lg w-full lg:w-auto hover:bg-blue-600 transition duration-300">Get Started</a>
                        <a href="#" class="text-blue-500 inline-block w-full lg:w-auto py-3 px-6 rounded-lg text-center lg:text-left hover:text-blue-600 transition duration-300">Learn More →</a>
                    </div>
                </div>

                <!-- Right Section (Image) -->
                <div class="lg:w-1/2 p-6 mt-8 lg:mt-0">
                    <img src="{{ asset('build/assets/images/foto_reza.JPG') }}" alt="Background Image" class="w-full h-auto object-cover rounded-lg shadow-md">
                </div>
            </div>

            <!-- Footer -->
            <footer class="bg-white text-black text-center py-4 mt-8">
                <p>Reza Aditya / Developer</p>
            </footer>
        </div>
    </div>

    <script>
        // Toggle Mobile Menu
        const navbarToggle = document.getElementById('navbar-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        navbarToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>

</html>
