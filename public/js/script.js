document.querySelector('.button').addEventListener('click', function () {
    this.classList.add('loading'); // Tambahkan kelas loading

    // Menambahkan jeda sebelum melanjutkan aksi berikutnya
    setTimeout(() => {
        this.classList.remove('loading'); // Hapus kelas loading setelah selesai
        // Aksi berikutnya, seperti pindah halaman atau menampilkan konten baru
        window.location.href = 'your_next_page.html';
    }, 1500); // Waktu jeda dalam milidetik (1.5 detik)
});
