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
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <img src="{{ asset('image/bem.png') }}" alt="Logo IT Del" class="w-50 h-50 cursor-pointer">
                <span class="text-lg font-bold text-gray-800">BEM IT Del</span>
                <span class="text-lg font-bold text-gray-800">Kabinet Sahala</span>
            </div>
            <ul class="flex space-x-8">
                <li><a href="#" class="text-gray-700 hover:text-blue-500">Home</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500">About us</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500">Department</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500">Voting</a></li>
            </ul>
            <a href="#" class="bg-blue-900 text-white px-4 py-2 rounded-md">Login</a>
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
