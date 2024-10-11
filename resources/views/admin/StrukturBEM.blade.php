<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Table</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
<div class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[200px] overflow-y-auto text-center bg-gray-900">
      <div class="text-gray-100 text-xl">
        <div class="p-2.5 mt-1 flex items-center">
          <i class="bi bi-app-indicator px-2 py-1 rounded-md bg-blue-600"></i>
          <h1 class="font-bold text-gray-200 text-[15px] ml-3">Admin BEM</h1>
          <i
            class="bi bi-x cursor-pointer ml-28 lg:hidden"
            onclick="openSidebar()"
          ></i>
        </div>
        <div class="my-2 bg-gray-600 h-[1px]"></div>
      </div>
      <div
        class="p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700 text-white"
      >
        <i class="bi bi-search text-sm"></i>
        <input
          type="text"
          placeholder="Search"
          class="text-[15px] ml-4 w-full bg-transparent focus:outline-none"
        />
      </div>
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
      >
        <i class="bi bi-house-door-fill"></i>
        <span class="text-[15px] ml-4 text-gray-200 font-bold">Home</span>
      </div>
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
      >
        <i class="bi bi-bookmark-fill"></i>
        <span class="text-[15px] ml-4 text-gray-200 font-bold">Departemen</span>
      </div>
      <!-- <div class="my-4 bg-gray-600 h-[1px]"></div> -->
      <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
        <i class="bi bi-chat-left-text-fill"></i>
        <div class="flex justify-between w-full items-center">
          <a href="strukturbem"  class="text-[15px] ml-4 text-gray-200 font-bold">Keanggotaan</a>
        </div>
      </div>
      <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
        <i class="bi bi-box-arrow-in-right"></i>
        <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
      </div>
    </div>

    <div class="container mx-auto p-4">
        <!-- <h1 class="text-2xl font-bold mb-4 ml-20">Struktur Bem Table </h1> -->

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
