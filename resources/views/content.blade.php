<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Konten</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col items-center p-10">
    
    <!-- Title -->
    <h1 class="text-3xl font-bold mb-6">Upload Konten Departemen</h1>

    <!-- Upload Form -->
    <form action="/upload-content" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
        <!-- Select UKM or Departemen -->
        <div class="mb-4">
            <label for="category" class="block text-gray-700 font-bold mb-2">Pilih UKM / Departemen:</label>
            <select name="category" id="category" class="w-full p-2 border border-gray-300 rounded">
                <option value="dept-humas">DIPTEK</option>
                <option value="dept-it">DPDK</option>
                <option value="dept-finance">DHPM</option>
            </select>
        </div>

        <!-- Title Field -->
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Judul Konten:</label>
            <input type="text" id="title" name="title" required class="w-full p-2 border border-gray-300 rounded" placeholder="Masukkan judul konten...">
        </div>

        <!-- Description Field -->
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Deskripsi Konten:</label>
            <textarea id="description" name="description" required class="w-full p-2 border border-gray-300 rounded" rows="5" placeholder="Masukkan deskripsi konten..."></textarea>
        </div>

        <!-- File Upload -->
        <div class="mb-4">
            <label for="file" class="block text-gray-700 font-bold mb-2">Unggah Gambar / File:</label>
            <input type="file" id="file" name="file" class="w-full p-2 border border-gray-300 rounded" accept="image/*, .pdf, .docx">
        </div>

        <!-- Submit Button -->
        <div class="mt-6">
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded">
                Upload Konten
            </button>
        </div>
    </form>

</body>
</html>
