<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tabel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6 text-center">Simple Table Example</h1>

        <div class="max-w-md mx-auto bg-white p-6 shadow-md rounded-lg">
            <!-- <div class="flex justify-between items-center mb-4">
                <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-lg shadow-md transition-all duration-200">
                    Tambah Data
                </button>
            </div> -->

            <form action="/updatedata/{{$data->id}}" method="POST" enctype="multipart/form-data"  class="space-y-4">
                @csrf
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2" for="nama">
                        Nama Lengkap
                    </label>
                    <input value="{{$data->nama}}" class="shadow appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" name="nama" id="nama" type="text" placeholder="Masukkan Nama Lengkap">
                </div>

                <div>
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                    <select name="departemen" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>{{$data->departemen}}</option>
                        <option >BPH INTI</option>
                        <option >DIPTEK</option>
                        <option >DEPOL</option>
                        <option >DEPAGSOS</option>
                        <option >DEPSENBUD</option>
                        <option >DHPM</option>
                        <option >DPDK</option>
                        <option >DEPKEBDIS</option>
                        <option >SARPRAS</option>
                    </select>
                    <!-- <input class="shadow appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" name="departemen" id="departemen" type="text"> -->
                    <!-- <label class="block text-gray-700 text-sm font-semibold mb-2" for="jabatan">
                        Departemen 
                    </label>
                    <input class="shadow appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" name="jabatan" id="jabatan" type="text" placeholder="Masukkan jabatan"> -->
                </div>

                <div>
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                    <select name="jabatan" id="jabatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>{{$data->jabatan}}</option>
                        <option >Ketua</option>
                        <option >Wakil Ketua</option>
                        <option >Sekretaris</option>
                        <option >Bendahara</option>
                        <option >Anggota</option>
                    </select>
                    <!-- <input class="shadow appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" name="jabatan" id="jabatan" type="text" placeholder="Masukkan Nama Lengkap"> -->
                    <!-- <label class="block text-gray-700 text-sm font-semibold mb-2" for="jabatan">
                        Jabatan 
                    </label>
                    <input class="shadow appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" name="jabatan" id="jabatan" type="text" placeholder="Masukkan jabatan"> -->
                </div>
                
                <!-- <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2" for="password">
                        Foto 
                    </label>
                    <input class="shadow appearance-none border border-red-500 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-red-400 focus:border-transparent" id="password" type="password" placeholder="******************">
                    <p class="text-red-500 text-xs italic mt-2">Please choose a stronger password.</p>
                </div> -->

                <!-- component -->
                <div class="flex items-center justify-center p-12">
                <!-- Author: FormBold Team -->
                <!-- Learn More: https://formbold.com -->
                <div class="mx-auto w-full max-w-[550px] bg-white">
                    <form
                    class="py-6 px-9"
                    action="https://formbold.com/s/FORM_ID"
                    method="POST"
                    >

                    <div class="mb-6 pt-4">
                        <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                        Upload Foto
                        </label>

                        <div class="mb-8">
                        <input type="file" name="foto" id="file" class="sr-only" />
                        <label
                            for="file"
                            class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center"
                        >
                            <div>
                            <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                                Drop files here
                            </span>
                            <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                Or
                            </span>
                            <span
                                class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]"
                            >
                                Browse
                            </span>
                            </div>
                        </label>
                        </div>

                    

                        <!-- <div class="rounded-md bg-[#F5F7FB] py-4 px-8"> -->
                        <div class="flex items-center justify-between">
                        
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                        class="hover:shadow-form w-full rounded-md bg-green-500 py-3 px-8 text-center text-base font-semibold text-white outline-none"
                        >
                        Update Data
                        </button>
                    </div>
                    </form>
                </div>
                </div>

            </form>
        </div>
    </div>

</body>
</html>