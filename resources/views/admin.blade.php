<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Example with Dropdown</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('dropdown-menu');
            dropdown.classList.toggle('hidden');
        }
    </script>
</head>
<body class="flex">

    <!-- Sidebar -->
    <div class="w-20 h-screen bg-gray-800 p-5 fixed flex flex-col items-center space-y-10">
        <!-- Back button -->
        <button class="text-white text-2xl">&larr;</button>

        <!-- Menu Items -->
        <ul class="space-y-8">
            <!-- Active Dashboard -->
            <li class="flex flex-col items-center">
                <a href="/" class="bg-yellow-300 p-3 rounded-full">
                    <img src="https://img.icons8.com/ios-filled/50/000000/dashboard.png" alt="Dashboard Icon" class="h-6 w-6"/>
                </a>
                <span class="text-white text-xs mt-2">Dashboard</span>
            </li>

            <!-- Dropdown Menu: Tour Package -->
            <li class="relative flex flex-col items-center">
                <button onclick="toggleDropdown()" class="bg-gray-100 p-3 rounded-full focus:outline-none">
                    <img src="https://img.icons8.com/ios-filled/50/000000/suitcase.png" alt="Tour Package Icon" class="h-6 w-6"/>
                </button>
                <span class="text-gray-300 text-xs mt-2">Content</span>

                <!-- Dropdown items (di sebelah kanan) -->
                <ul id="dropdown-menu" class="hidden absolute left-full top-0 bg-gray-700 text-white mt-2 space-y-2 rounded-lg w-32 text-center">
                    <li class="relative group">
                     <a href="{{ route('creatorcontent') }}" class="block py-2 hover:bg-gray-600">Departemen</a>    
                 </li>
                    <li><a href="#" class="block py-2 hover:bg-gray-600">UKM</a></li>
                </ul>

            <!-- User -->
            <li class="flex flex-col items-center">
                <a href="tours" class="bg-gray-100 p-3 rounded-full">
                    <img src="https://img.icons8.com/ios-filled/50/000000/walking-tour.png" alt="Tours Icon" class="h-6 w-6"/>
                </a>
                <span class="text-gray-300 text-xs mt-2">USER</span>
            </li>
        </ul>
    </div>

    <!-- Content -->
    <div class="ml-20 p-8 flex-1">
        <h1 class="text-3xl font-bold">Welcome to Admin Page</h1>
        <p class="mt-4"></p>
    </div>

</body>
</html>
