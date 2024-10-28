@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-10">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">DEPARTEMEN AGAMA DAN SOSIAL</h1>
            <p class="text-gray-600 max-w-5zxl mx-auto">
            Departemen Agama dan Sosial (DEPAGSOS) Merupakan departemen yang bertugas untuk melakukan kegiatan yang berhubungan dengan kegiatan kerohanian dan social mahasiswa. Departemen ini berperan dalam kegiatan keagamaan dan social yang bekerjasama dengan keasramaan.            </p>
        </div>

        <!-- Images and Description -->
        <div class="flex justify-center mb-12">
            <div class="w-1/2 p-4">
                <img src="{{ asset('image/logodepag.png') }}" alt="Department Logo" class="rounded-md mx-auto">
            </div>
            <div class="w-1/2 p-4">
                <img src="{{ asset('image/prodeg.png') }}" alt="Department Event" class="rounded-md mx-auto">
            </div>
        </div>

        <!-- Leaders Section -->
        <div class="text-center mb-12">
            <div class="flex justify-center space-x-8">
                <div>
                <img src="{{ asset('image/markus.png') }}" alt="Leader 1" class="w-30 h-30 rounded-full float-left mb-4 mr-5 ml-15">
                    <p class="text-lg font-bold">MARKUS HUTAGALUNG</p>
                    <p>Kepala Divisi</p>

                </div>
                <div>
                    <img src="{{ asset('image/Richard.png') }}" alt="Leader 2"  class="w-30 h-26 rounded-full float-left mb-4 mr-5">
                    <p class="text-lg font-bold">Richard</p>
                    <p>Wakil Kepala Divisi</p>
                </div>
            </div>
        </div>

        <!-- Program Kerja Section -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-8">PROGRAM KERJA</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Ibadah jumat</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Weekly reflection</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Festival Musik Rohani (FMR)</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Paskah</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Pengajian</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Sharing session</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Charity</a>
            </div>
        </div>

@endsection
