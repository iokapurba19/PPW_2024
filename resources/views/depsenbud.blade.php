@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-10">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">DEPARTEMEN SENI DAN BUDAYA</h1>
            <p class="text-gray-600 max-w-5zxl mx-auto">
            Berperan dalam menyediakan wadah untuk mahasiswa/i IT Del untuk mengembangkan kemampuan dalam bidang seni juga berperan dalam hal menjaga kebudayaan yang dianut di kampus. Departemen ini akan selalu mengambil tema acara yang memiliki sangkut paut dengan kesenian & kebudayaan            </p>
        </div>

        <!-- Images and Description -->
        <div class="flex justify-center mb-12">
            <div class="w-1/2 p-4">
                <img src="{{ asset('image/logodepsen.png') }}" alt="Department Logo" class="rounded-md mx-auto">
            </div>
            <div class="w-1/2 p-4">
                <img src="{{ asset('image/prodepsen.Jpg') }}" alt="Department Event" class="rounded-md mx-auto">
            </div>
        </div>

        <!-- Leaders Section -->
        <div class="text-center mb-12">
            <div class="flex justify-center space-x-8">
                <div>
<<<<<<< HEAD
                <img src="{{ asset('image/ketua depsen.Jpg') }}" alt="Leader 1" class="w-30 h-30 rounded-full float-left mb-4 mr-5 ml-15">
                    <p class="text-lg font-bold">THEO MANULLANG</p>
=======
                <img src="{{ asset('image/ketua depsen.Jpg') }}" alt="Leader 1" class="w-30 h-30 rounded-full float-left mb-4 mr-12">
                    <p class="text-lg font-bold">Theo Hosea Manullang</p>
>>>>>>> 63e00428e5c30c8bdeb9b6ffd3f05e38bdf934cb
                    <p>Kepala Divisi</p>

                </div>
                <div>
<<<<<<< HEAD
                    <img src="{{ asset('image/wakdepsenbud.jpg') }}" alt="Leader 2"  class="w-30 h-26 rounded-full float-left mb-4 mr-5">
                    <p class="text-lg font-bold">SALOMO GEMAYEL</p>
=======
                    <img src="{{ asset('image/wakdepsen.Jpg') }}" alt="Leader 2"  class="w-30 h-26 rounded-full float-left mb-4 mr-5">
                    <p class="text-lg font-bold">Salomo Gemayel</p>
>>>>>>> 63e00428e5c30c8bdeb9b6ffd3f05e38bdf934cb
                    <p>Wakil Kepala Divisi</p>
                </div>
            </div>
        </div>

        <!-- Program Kerja Section -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-8">PROGRAM KERJA</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Festival Budaya</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Del ART Competition</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Malam Keakraban</a>

            </div>
        </div>

@endsection
