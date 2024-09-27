@extends('layouts.app')

@section('content')
    <div class="bg-cover bg-center h-screen relative" style="background-image: url('{{ asset('image/del.jpg') }}')">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto h-full flex flex-col justify-end items-start relative z-10 text-white text-left p-10">
            <h1 class="text-4xl md:text-5xl font-bold">BEM INSTITUT TEKNOLOGI DEL</h1>
            <h2 class="text-2xl md:text-3xl mt-2">KABINET SAHALA SAUDURAN 2023/2024</h2>
            <a href="#" class="mt-4 px-6 py-3 bg-blue-500 hover:bg-blue-700 text-white rounded">What we do</a>
        </div>
    </div>

    <section class="container mx-auto py-20">
        <div class="text-left mb-10 mx-5 md:mx-10">
            <h2 class="text-2xl md:text-4xl font-bold mt-">Know about us</h2>
            <h2 class="text-2xl md:text-3xl font-bold">We empower your voice on campus</h2>
            <p class="text-gray-600 mt-4">Kami hadir sebagai wadah bagi mahasiswa ITDel untuk berkolaborasi, berinovasi, dan menyuarakan aspirasi.</p>
        </div>
        <div class="flex flex-col md:flex-row justify-end items-center md:items-start">
            <div class="w-full md:w-1/2 mb-6 md:mb-0">
                <img src="{{ asset('students-running.jpg') }}" alt="Students running" class="rounded-lg shadow-lg">
            </div>
            <div class="w-full md:w-1/2 px-5 md:px-10 text-center md:text-left">
                <p class="text-lg text-gray-700">
                    Kami berperan dalam menyelenggarakan berbagai program serta kegiatan yang mendukung pengembangan akademik dan karakter mahasiswa.
                </p>
                <a href="#" class="mt-6 inline-block bg-yellow-500 text-white px-6 py-3 rounded-md hover:bg-yellow-600">Learn more</a>
            </div>
        </div>
    </section>

    <!-- Bagian Visi dan Misi -->
    <section class="bg-yellow-100 py-20">
        <div class="container mx-auto text-left px-5 md:px-0">
            <h2 class="text-xl md:text-2xl font-bold mb-10">VISI & MISI</h2>

            <div class="flex flex-col md:flex-row justify-between items-start">
                <!-- Visi -->
                <div class="w-full md:w-2/3 p-5">
                    <h3 class="text-2xl font-semibold mb-4">VISI</h3>
                    <p class="text-gray-800 font-semibold">
                        Mewujudkan Badan Eksekutif Mahasiswa IT Del yang lebih baik melalui partisipasi aktif mahasiswa dalam berbagai aspek kehidupan kampus dan masyarakat serta mendengar segala bentuk aspirasi Mahasiswa.
                    </p>
                </div>
                <!-- Foto Ketua di sebelah kanan -->
                <div class="w-full md:w-1/3 flex justify-center md:justify-end items-center mt-6 md:mt-0">
                    <div class="text-center">
                        <img src="{{ asset('image/newsamuel.png') }}" alt="Samuel Simbolon" class="w-32 h-32 md:w-48 md:h-48 shadow-lg">
                        <p class="mt-2">Samuel, Ketua BEM 2023/2024</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-start mt-10">
                <!-- Foto Wakil Ketua di sebelah kiri -->
                <div class="w-full md:w-1/3 flex justify-center md:justify-start items-center mb-6 md:mb-0">
                    <div class="text-center">
                        <img src="{{ asset('image/newrony.png') }}" alt="Bayu Peter Bukit" class="w-32 h-32 md:w-48 md:h-48 shadow-lg">
                        <p class="mt-2">Ioka Bujang, Wakil Ketua BEM 2023/2024</p>
                    </div>
                </div>
                <!-- Misi -->
                <div class="w-full md:w-2/3 pr-5 md:pr-10">
                    <h3 class="text-2xl font-semibold mb-4">MISI</h3>
                    <ul class="text-gray-700 list-disc list-inside">
                        <li>Mewakili suara mahasiswa dan memperjuangkan kepentingan mahasiswa di tingkat kampus dan nasional.</li>
                        <li>Menyelenggarakan berbagai kegiatan yang bermanfaat dan menarik untuk kemajuan akademik, sosial, dan keagamaan mahasiswa.</li>
                        <li>Membangun jaringan kerjasama dengan lembaga di dalam dan luar kampus untuk meningkatkan kualitas dan kuantitas kegiatan BEM.</li>
                        <li>Meningkatkan partisipasi mahasiswa dalam kegiatan organisasi, baik sebagai peserta maupun pengurus.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Departemen -->
    <section class="container mx-auto py-20 px-5 md:px-0">
        <h2 class="text-3xl font-bold text-center mb-10">DEPARTEMEN</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Contoh departemen -->
            <div class="bg-blue-100 p-6 rounded-lg shadow-lg text-center transform transition duration-300 hover:scale-105 cursor-pointer">
                <img src="{{ asset('image/diptek.jpg') }}" alt="Departemen 1" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Departemen Ilmu Pengetahuan dan Teknologi</h3>
                <p class="text-gray-600">Mengelola bidang ilmu pengetahuan dan teknologi, membantu meningkatkan minat akademik mahasiswa ITDel.</p>
            </div>

            <div class="bg-blue-100 p-6 rounded-lg shadow-lg text-center transform transition duration-300 hover:scale-105 cursor-pointer">
                <img src="{{ asset('image/depagsos.png') }}" alt="Departemen 2" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Departemen Agama dan Sosial</h3>
                <p class="text-gray-600">Berperan dalam kegiatan keagamaan dan sosial, berkolaborasi dalam keanekaragaman di kampus.</p>
            </div>

            <div class="bg-blue-100 p-6 rounded-lg shadow-lg text-center transform transition duration-300 hover:scale-105 cursor-pointer">
                <img src="{{ asset('image/Depsenbud.png') }}" alt="Departemen 3" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Departemen Seni dan Budaya</h3>
                <p class="text-gray-600">Menumbuhkan dan memelihara kebudayaan dan seni di kalangan mahasiswa ITDel.</p>
            </div>

            <!-- Departemen lainnya -->
            <!-- Tambahan departemen -->
            <div class="bg-blue-100 p-6 rounded-lg shadow-lg text-center transform transition duration-300 hover:scale-105 cursor-pointer">
                <img src="{{ asset('image/DEPKEBDIS.png') }}" alt="Departemen Ketertiban dan Kedisplinan" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Departemen Ketertiban dan Kedisiplinan</h3>
                <p class="text-gray-600">Mengawasi ketertiban dan kedisiplinan mahasiswa/mahasiswi sesuai peraturan di IT Del.</p>
            </div>

            <div class="bg-blue-100 p-6 rounded-lg shadow-lg text-center transform transition duration-300 hover:scale-105 cursor-pointer">
                <img src="{{ asset('image/Depkominfo.png') }}" alt="Departemen Komunikasi dan Informasi" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Departemen Komunikasi dan Informasi</h3>
                <p class="text-gray-600">Mengelola arus informasi dan komunikasi di lingkungan kampus.</p>
            </div>

            <div class="bg-blue-100 p-6 rounded-lg shadow-lg text-center transform transition duration-300 hover:scale-105 cursor-pointer">
                <img src="{{ asset('image/DEPOL.png') }}" alt="Departemen Olahraga" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Departemen Olahraga</h3>
                <p class="text-gray-600">Mendukung minat mahasiswa di bidang olahraga.</p>
            </div>
        </div>
    </section>
@endsection
