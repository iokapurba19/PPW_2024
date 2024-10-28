@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-10">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">DEPARTEMEN AGAMA DAN SOSIAL</h1>
            <p class="text-gray-600 max-w-3xl mx-auto">
            Departemen Agama dan Sosial (DEPAGSOS) Merupakan departemen yang bertugas untuk melakukan kegiatan yang berhubungan dengan kegiatan kerohanian dan social mahasiswa. Departemen ini berperan dalam kegiatan keagamaan dan social yang bekerjasama dengan keasramaan.
            </p>
        </div>

        <!-- Images and Description -->
        <div class="flex justify-center mb-12">
            <div class="w-1/2 p-4">
                <img src="{{ asset('image/depagsos.png')) }}" alt="Department Logo" class="rounded-md mx-auto">
            </div>
            <div class="w-1/2 p-4">
                <img src="{{ asset('image/your-department-image.jpg') }}" alt="Department Event" class="rounded-md mx-auto">
            </div>
        </div>

        <!-- Leaders Section -->
        <div class="text-center mb-12">
            <div class="flex justify-center space-x-8">
                <div>
                    <img src="{{ asset('image/leader1.jpg') }}" alt="Leader 1" class="w-24 h-24 rounded-full mx-auto mb-4">
                    <p class="text-lg font-bold">MARKUS HUTAGALUNG</p>
                    <p>Kepala Divisi</p>
                </div>
                <div>
                    <img src="{{ asset('image/leader2.jpg') }}" alt="Leader 2" class="w-24 h-24 rounded-full mx-auto mb-4">
                    <p class="text-lg font-bold">RICHARD ARITONANG</p>
                    <p>Wakil Kepala Divisi</p>
                </div>
            </div>
        </div>

        <!-- Program Kerja Section -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-8">PROGRAM KERJA</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Del Goes to School</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">DMSC</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">PKM</a>
            </div>
        </div>

@endsection
