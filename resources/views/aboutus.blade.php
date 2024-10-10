@extends('layouts.app')

@section('content')
<!-- Navbar -->
<nav class="bg-gray-900 text-white w-full fixed top-0 left-0 z-50">
</nav>

<!-- Section dengan background-->
<section class="w-full bg-yellow-100 py-20">
    <div class="container mx-auto flex flex-col md:flex-row items-start md:space-x-10">
        <!-- Bagian Teks -->
        <div class="w-full md:w-2/3 text-left mb-10">
            <h2 class="text-32xl font-bold py-15">Sejarah</h2>
            <p class="text-black-600 mt-5">
                Institut Teknologi Del (IT Del) didirikan pada tahun 2001 di Laguboti, Sumatera Utara, dengan tujuan menjadi pusat pendidikan unggul di bidang teknologi dan rekayasa. IT Del bertujuan untuk mencetak lulusan yang tidak hanya kompeten di bidang akademis, tetapi juga memiliki integritas tinggi dan semangat pelayanan kepada masyarakat. Dengan visi "Menjadi Perguruan Tinggi Berkualitas Dunia yang Berlandaskan Nilai Kearifan Lokal", IT Del terus berkembang menjadi salah satu institusi pendidikan terkemuka di Indonesia.
                <br><br>
                Badan Eksekutif Mahasiswa (BEM) IT Del adalah organisasi mahasiswa yang mewakili seluruh mahasiswa di Institut Teknologi Del (IT Del). Kami berdedikasi untuk menjadi ruang aspirasi, inovasi, dan pengembangan diri bagi mahasiswa, serta berperan dalam membangun lingkungan kampus yang inklusif, dinamis, dan berorientasi pada perubahan positif.
            </p>
        </div>

        <!-- Bagian Gambar -->
        <div class="w-full md:w-1/3 flex justify-center md:justify-end items-center mt-6 md:mt-0">
            <img src="{{ asset('image/about.png') }}" alt="Samuel Simbolon" 
                 class="w-50 h-50 md:w-70 md:h-64 mx-auto md:mt-10 md:mb-5">
        </div>
    </div>    
</section>

<!-- Program Unit Kegiatan Mahasiswa -->
<section class="bg-white py-16">
    <div class="container mx-auto">
        <h2 class="text-center text-3xl font-bold mb-10">Program Unit Kegiatan Mahasiswa</h2>
        <div class="flex overflow-x-auto space-x-6">
            <!-- Item 1 -->
            <div class="min-w-[200px] flex-shrink-0 text-center bg-white shadow-md rounded-lg">
                <img src="{{ asset('image/basketss.jpeg') }}" alt="UKM Basket" class="w-full h-30 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">UKM Basket</h3>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="min-w-[200px] flex-shrink-0 text-center bg-white shadow-md rounded-lg">
                <img src="{{ asset('image/gitar.png') }}" alt="UKM Gitar Mahasiswa" class="w-full h-30 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">UKM Paduan Gitar Mahasiswa</h3>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="min-w-[200px] flex-shrink-0 text-center bg-white shadow-md rounded-lg">
                <img src="{{ asset('image/drama.png') }}" alt="UKM Del Dance Drama Club" class="w-full h-30 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">UKM Del Dance Drama Club</h3>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="min-w-[200px] flex-shrink-0 text-center bg-white shadow-md rounded-lg">
                <img src="{{ asset('image/suara.jpeg') }}" alt="UKM Paduan Suara Mahasiswa" class="w-full h-29 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">UKM Paduan Suara Mahasiswa</h3>
                </div>
            </div>
            <!-- Item 5 -->
            <div class="min-w-[200px] flex-shrink-0 text-center bg-white shadow-md rounded-lg">
                <img src="{{ asset('image/ukm_gdsc.png') }}" alt="UKM Google Developer Student Club" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">UKM Google Developer Student Club</h3>
                </div>
            </div>
            <!-- Item 6 -->
            <div class="min-w-[200px] flex-shrink-0 text-center bg-white shadow-md rounded-lg">
                <img src="{{ asset('image/ukm_english_club.png') }}" alt="UKM English Club" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">UKM English Club</h3>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
