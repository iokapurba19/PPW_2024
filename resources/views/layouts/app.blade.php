<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM Institut Teknologi Del</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow p-4">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
            <div class="flex items-center space-x-4 mb-4 md:mb-0">
                <img src="{{ asset('image/bem.png') }}" alt="Logo IT Del" class="w-12 h-12 cursor-pointer">
                <div class="flex flex-col text-center md:text-left">
                    <span class="text-2xl font-bold text-gray-800">BEM IT Del</span>
                    <span class="text-0 font-bold text-gray-800">Kabinet Sahala Saunduran</span>
                </div>
            </div>
            <ul class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-8">
                <li><a href="#" class="text-gray-700 hover:text-blue-500">Home</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500">About us</a></li>
                
                <!-- Dropdown Menu -->
                <li class="relative group">
                    <a href="#" class="text-gray-700 hover:text-blue-500 flex items-center">
                        Department
                       <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 transform translate-y-2 z-20">
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">DIPTEK</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">DEPAGSOS</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">DPDK</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">DHPM</a>
                    </div>
                </li>

                <li><a href="#" class="text-gray-700 hover:text-blue-500">Voting</a></li>
            </ul>
            <div class="mt-4 md:mt-0">
                <a href="{{ url('/login') }}" class="bg-blue-900 text-white px-4 py-2 ml-0 rounded-md">Login</a>
                <!-- <a href="{{ url('/register') }}" class="bg-blue-900 text-white px-4 py-2 rounded-md">Register</a> -->
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-6 mt-10">
        <div class="container mx-auto text-center md:text-left md:flex justify-between items-center">
            <div class="flex items-center mb-4 md:mb-0">
                <img src="{{ asset('image/logodel.png') }}" alt="Logo IT Del" class="w-20 h-20 mx-4">
                <div class="ml-4">
                    <h3 class="text-lg font-bold">Kontak Kami</h3>
                    <p>Institut Teknologi Del</p>
                    <p>Jl. Sisingamangaraja, Sitoluama, Laguboti, Toba, Sumatera Utara, Indonesia</p>
                    <p>Kode Pos: 22381</p>
                    <p>+62 632 331234</p>
                    <p>hims@del.ac.id</p>
                </div>
            </div>
            <div class="flex space-x-4 justify-center md:justify-start mx-4">
                <a href="mailto:hims@del.ac.id" target="_blank" class="text-white hover:text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 12.713l-11.985-6.713v14h23.971v-14z" />
                        <path d="M12 11.287l11.985-6.713h-23.971z" />
                    </svg>
                </a>
                <a href="https://www.instagram.com/bem.itdel/" target="_blank" class="text-white hover:text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.17.057 1.98.24 2.43.402.53.182.91.398 1.311.799.402.401.618.782.799 
