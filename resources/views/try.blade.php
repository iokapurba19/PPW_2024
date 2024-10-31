@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<!-- Navbar -->
<nav class="bg-gray-900 text-white w-full fixed top-0 left-0 z-50 shadow-md fade-in">
</nav>

<!-- Section dengan background dan animasi -->
<section class="w-full bg-blue-100 py-20 fade-in">
    <div class="container mx-auto flex flex-col md:flex-row items-start md:space-x-10">
        <!-- Bagian Teks dengan animasi -->
        <div class="w-full md:w-2/3 text-left mb-10 fade-in">
            <h2 class="text-32xl font-bold py-15 px-5">Sejarah</h2>
            <p class="text-black-600 mt-5 px-5">
                Institut Teknologi Del (IT Del) didirikan pada tahun 2001 di Laguboti, Sumatera Utara, dengan tujuan menjadi pusat pendidikan unggul di bidang teknologi dan rekayasa. IT Del bertujuan untuk mencetak lulusan yang tidak hanya kompeten di bidang akademis, tetapi juga memiliki integritas tinggi dan semangat pelayanan kepada masyarakat. Dengan visi "Menjadi Perguruan Tinggi Berkualitas Dunia yang Berlandaskan Nilai Kearifan Lokal", IT Del terus berkembang menjadi salah satu institusi pendidikan terkemuka di Indonesia.
                <br><br>
                Badan Eksekutif Mahasiswa (BEM) IT Del adalah organisasi mahasiswa yang mewakili seluruh mahasiswa di Institut Teknologi Del (IT Del). Kami berdedikasi untuk menjadi ruang aspirasi, inovasi, dan pengembangan diri bagi mahasiswa, serta berperan dalam membangun lingkungan kampus yang inklusif, dinamis, dan berorientasi pada perubahan positif.
            </p>
        </div>

        <!-- Bagian Gambar dengan animasi -->
        <div class="w-full md:w-1/3 flex justify-center md:justify-end items-center mt-6 md:mt-0 fade-in">
            <img src="{{ asset('image/about.png') }}" alt="Samuel Simbolon" 
                 class="w-50 h-50 md:w-70 md:h-64 mx-auto md:mt-10 md:mb-5 no-border fade-in">
        </div>
    </div>    
</section>

<!-- Program Unit Kegiatan Mahasiswa dengan animasi -->
<h2 class="text-center text-3xl font-bold mt-10 fade-in">Program Unit Kegiatan Mahasiswa</h2>

<!-- Main Content dengan animasi -->
<div class="container mx-auto p-6 pt-24 fade-in">
  <!-- Kontainer fleksibel yang dapat digeser ke samping -->
  <div class="flex space-x-6 overflow-x-auto scrollbar-hide">
    <!-- Basket -->
<div class="min-w-[200px] text-center group">
  <img src="{{ asset('image/basket.png') }}" alt="Basket" class="w-full h-auto object-cover mb-3">
  <h3 class="text-lg font-semibold">Basket</h3>
</div>

<!-- GDSC -->
<div class="min-w-[200px] text-center group">
  <img src="{{ asset('image/gdsc.png') }}" alt="GDSC" class="w-full h-auto object-cover mb-3">
  <h3 class="text-lg font-semibold">GDSC</h3>
</div>

<!-- Gitar -->
<div class="min-w-[200px] text-center group">
  <img src="{{ asset('image/gitar.png') }}" alt="Gitar" class="w-full h-auto object-cover mb-3">
  <h3 class="text-lg font-semibold">Gitar</h3>
</div>

<!-- PSM -->
<div class="min-w-[200px] text-center group">
  <img src="{{ asset('image/padus.png') }}" alt="PSM" class="w-full h-auto object-cover mb-3">
  <h3 class="text-lg font-semibold">PSM</h3>
</div>

<!-- English -->
<div class="min-w-[200px] text-center group">
  <img src="{{ asset('image/english.png') }}" alt="English" class="w-full h-auto object-cover cursor-pointer mb-3">
  <h3 class="text-lg font-semibold">English</h3>
</div>


    <!-- Item tambahan UKM lainnya -->
    {{-- <div class="min-w-[200px] text-center">
      <img src="{{ asset('image/english.png') }}" alt="PSM" class="w-full h-auto object-cover mb-3">
      <h3 class="text-lg font-semibold">English</h3>
    </div> --}}
    <!-- Tambahan item UKM jika diperlukan -->
    {{-- <div class="min-w-[200px] text-center">
      <img src="{{ asset('image/padus.png') }}" alt="PSM" class="w-full h-auto object-cover mb-3">
      <h3 class="text-lg font-semibold">PSM</h3>
    </div>
  </div> --}}
</div>

<!-- Custom CSS untuk fade-in -->
<style>
  .fade-in {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 1s ease-out, transform 1s ease-out;
  }
  
  .fade-in.appear {
    opacity: 1;
    transform: translateY(0);
  }

  /* Custom CSS untuk menyembunyikan scrollbar */
  .scrollbar-hide::-webkit-scrollbar {
    display: none;
  }
  .scrollbar-hide {
    -ms-overflow-style: none;  /* IE dan Edge */
    scrollbar-width: none;  /* Firefox */
  }
</style>

<!-- JavaScript untuk menambahkan kelas fade-in setelah halaman dimuat -->
<script>
    window.addEventListener('load', function() {
        document.querySelectorAll('.fade-in').forEach(function(element) {
            element.classList.add('appear');
        });
    });
</script>

@endsection
