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
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
            <div class="flex items-center space-x-4 mb-4 md:mb-0">
                <img src="{{ asset('image/bem.png') }}" alt="Logo IT Del" class="w-12 h-12 cursor-pointer">
                <div class="flex flex-col text-center md:text-left">
                    <span class="text-2xl font-bold text-gray-800">BEM IT Del</span>
                    <span class="text-0 font-bold text-gray-800">Kabinet Sahala Saunduran</span>
                </div>
            </div>
            <ul class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-8">
                <li><a href="/index" class="text-gray-700 hover:text-blue-500">Home</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500">About us</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500">Department</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500">Voting</a></li>
            </ul>
            <div class="mt-4 md:mt-0">
                <a href="{{ url('/login') }}" class="bg-blue-900 text-white px-4 py-2 ml-0 rounded-md">Login</a>
                <!-- <a href="{{ url('/register') }}" class="bg-blue-900 text-white px-4 py-2 rounded-md">Register</a> -->
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-6 mt-10">
        <div class="container mx-auto text-center md:text-left md:flex justify-between items-center">
            <div class="flex items-center mb-4 md:mb-0">
                <img src="{{ asset('image/logodel.png') }}" alt="Logo IT Del" class="w-20 h-20 mx-4">
                <div class="ml-4">
                    <h3 class="text-lg font-bold">Kontak Kami</h3>
                    <p>Institut Teknologi Del</p>
                    <p>Jl. Sisingamangaraja, Sitoluama, Laguboti, Toba, Sumatera Utara, Indonesia</p>
                    <p>Kode Pos: 22381</p>
                    <p>+62 632 331234</p>
                    <p>hims@del.ac.id</p>
                </div>
            </div>
            <div class="flex space-x-4 justify-center md:justify-start mx-4">
                <a href="mailto:hims@del.ac.id" target="_blank" class="text-white hover:text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 12.713l-11.985-6.713v14h23.971v-14z" />
                        <path d="M12 11.287l11.985-6.713h-23.971z" />
                    </svg>
                </a>
                <a href="https://www.instagram.com/bem.itdel/" target="_blank" class="text-white hover:text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.17.057 1.98.24 2.43.402.53.182.91.398 1.311.799.402.401.618.782.799 1.311.163.451.345 1.261.402 2.431.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.057 1.17-.24 1.98-.402 2.43-.182.53-.398.91-.799 1.311-.401.402-.782.618-1.311.799-.451.163-1.261.345-2.431.402-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.17-.057-1.98-.24-2.43-.402-.53-.182-.91-.398-1.311-.799-.402-.401-.618-.782-.799-1.311-.163-.451-.345-1.261-.402-2.431-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.057-1.17.24-1.98.402-2.43.182-.53.398-.91.799-1.311.401-.402.782-.618 1.311-.799.451-.163 1.261-.345 2.431-.402 1.266-.058 1.646-.07 4.85-.07zm0-2.163c-3.257 0-3.667.012-4.947.071-1.28.059-2.164.248-2.905.518-.801.292-1.482.682-2.153 1.354-.672.672-1.062 1.352-1.354 2.153-.27.741-.459 1.625-.518 2.905-.059 1.28-.071 1.69-.071 4.947s.012 3.667.071 4.947c.059 1.28.248 2.164.518 2.905.292.801.682 1.482 1.354 2.153.672.672 1.352 1.062 2.153 1.354.741.27 1.625.459 2.905.518 1.28.059 1.69.071 4.947.071s3.667-.012 4.947-.071c1.28-.059 2.164-.248 2.905-.518.801-.292 1.482-.682 2.153-1.354.672-.672 1.062-1.352 1.354-2.153.27-.741.459-1.625.518-2.905.059-1.28.071-1.69.071-4.947s-.012-3.667-.071-4.947c-.059-1.28-.248-2.164-.518-2.905-.292-.801-.682-1.482-1.354-2.153-.672-.672-1.352-1.062-2.153-1.354-.741-.27-1.625-.459-2.905-.518-1.28-.059-1.69-.071-4.947-.071z" />
                        <circle cx="12" cy="12" r="3.563" />
                        <circle cx="16.5" cy="7.5" r="1.438" />
                    </svg>
                </a>
                <a href="https://www.youtube.com/results?search_query=bem+del" target="_blank" class="text-white hover:text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19.615 3.184c-1.747-.296-8.625-.296-8.625-.296s-6.878 0-8.625.296c-2.169.369-3.387 2.224-3.614 4.389-.272 2.72-.272 8.397-.272 8.397s0 5.676.272 8.397c.227 2.165 1.445 4.02 3.614 4.389 1.747.296 8.625.296 8.625.296s6.878 0 8.625-.296c2.169-.369 3.387-2.224 3.614-4.389.272-2.72.272-8.397.272-8.397s0-5.676-.272-8.397c-.227-2.165-1.445-4.02-3.614-4.389zm-11.615 11.511v-6.49l6.229 3.243-6.229 3.247z" />
                    </svg>
                </a>
            </div>
        </div>
    </footer>
</body>
</html>
