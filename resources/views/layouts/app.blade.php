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
                    <span class="text-lg font-bold text-gray-800">BEM IT Del</span>
                    <span class="text-lg font-bold text-gray-800">Kabinet Sahala</span>
                </div>
            </div>
            <ul class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-8">
                <li><a href="#" class="text-gray-700 hover:text-blue-500">Home</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500">About us</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500">Department</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500">Voting</a></li>
            </ul>
            <div class="mt-4 md:mt-0">
                <a href="{{ url('/login') }}" class="bg-blue-900 text-white px-4 py-2 rounded-md">Login</a>
                <!-- <a href="{{ url('/register') }}" class="bg-blue-900 text-white px-4 py-2 rounded-md">Register</a> -->
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
    
    <footer class="bg-gray-900 text-white py-6 mt-10">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 BEM IT Del. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
