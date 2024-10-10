<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Table</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

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
            
            <li class="flex flex-col items-center">
                <a href="strukturbem" class="bg-gray-100 p-3 rounded-full">
                    <img src="" alt="Tours Icon" class="h-6 w-6"/>
                </a>
                <span class="text-gray-300 text-xs mt-2">Anggota BEM</span>
            </li>
        </ul>
    </div>

    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4 ml-20">Struktur Bem Table </h1>

        <!-- Button Tambah Data dan Tabel dalam satu kontainer -->
        <div class="max-w-4xl mx-auto ml-50">

            <!-- Flex untuk button dan tabel -->
            <div class="flex justify-between items-center mb-4">
                <!-- Button Tambah Data berada di atas ujung kiri tabel -->
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 border border-green-700 rounded">
                    <a href="/tambahdata" > Tambah Data </a>
                </button>
            </div>

            <!-- Tabel -->
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4 border-b text-left w-12">#</th>
                        <th class="py-2 px-4 border-b text-left w-32">Nama</th>
                        <th class="py-2 px-4 border-b text-left w-32">Departemen</th>
                        <th class="py-2 px-4 border-b text-left w-64">Jabatan</th>
                        <th class="py-2 px-4 border-b text-left w-35">Foto</th>
                        <th class="py-2 px-4 border-b text-center w-36">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                        $no = 1;
                    @endphp
                    @foreach ($data as $row)
                    <tr>
                        <td class="py-2 px-4 border-b">{{$no++}}</td>
                        <td class="py-2 px-4 border-b">{{$row->nama}}</td>
                        <td class="py-2 px-4 border-b">{{$row->departemen}}</td>
                        <td class="py-2 px-4 border-b">{{$row->jabatan}}</td>
                        <td class="py-2 px-4 border-b">{{$row->foto}} </td>
                        <td class="py-2 px-4 border-b text-center">
                            <div class="inline-flex space-x-2">
                                <a href="/tampilkandata/{{$row->id}}" type=button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded-full">Edit</a>
                                <a href="/delete/{{$row->id}}" type=button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded-full">Delete</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>
