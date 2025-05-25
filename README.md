💸 CuanFlow - Aplikasi Manajemen Keuangan Pribadi

CuanFlow adalah aplikasi web yang dirancang untuk memberdayakan pengguna dalam mengelola keuangan pribadi secara praktis dan efisien. Dengan antarmuka yang intuitif, CuanFlow menyediakan beragam fitur mulai dari pencatatan transaksi harian, visualisasi data keuangan melalui kalender, hingga akses ke tips dan trik finansial yang relevan.

🚀 Fitur Utama

👤 Halaman Pengguna (User)

1. Dashboard Pengguna: Menyajikan ringkasan visual kondisi keuangan pengguna secara real-time, meliputi:
- Total Pemasukan
- Total Pengeluaran
- Saldo Terkini
  
2. Kalender Keuangan: Memvisualisasikan riwayat transaksi (pemasukan dan pengeluaran) dalam format kalender interaktif, memudahkan pelacakan aktivitas keuangan berdasarkan tanggal.

3. Catatan Keuangan: Fasilitas untuk mencatat detail setiap transaksi pemasukan dan pengeluaran, termasuk jumlah, kategori, tanggal, dan deskripsi. (Fitur CRUD untuk transaksi)

4. Ringkasan Keuangan: Menyediakan rekapitulasi jumlah pemasukan dan pengeluaran dalam periode tertentu, serta informasi saldo akhir yang jelas. (Seringkali terintegrasi dalam Dashboard)

5. Tips & Trik Finansial: Kumpulan artikel, saran praktis, dan strategi mengenai pengelolaan keuangan yang bijak, cara berhemat, dasar-dasar investasi, dan topik finansial relevan lainnya untuk meningkatkan literasi keuangan.

6. Pengaturan Profil: Memungkinkan pengguna untuk mengubah dan memperbarui informasi profil mereka.

🔐 Autentikasi

1. Login Pengguna: Proses masuk aman ke dalam sistem untuk pengguna terdaftar.

2. Registrasi Pengguna: Fasilitas bagi pengguna baru untuk membuat akun.

🛠️ Halaman Admin

1. Dashboard Admin: Menyajikan statistik dan ringkasan umum terkait aktivitas penggunaan aplikasi, seperti jumlah pengguna, total transaksi, dan metrik relevan lainnya.
- Melihat daftar lengkap semua pengguna yang terdaftar.
- Menambah akun pengguna baru.
- Mengelola akun pengguna yang sudah ada (misalnya, edit detail dasar).
- Menghapus akun pengguna jika diperlukan.

📁 Struktur Kode & Petunjuk Navigasi

1. Routes (routes/web.php):
- File ini adalah "peta jalan" aplikasi Anda. Semua URL (alamat web) yang bisa diakses pengguna didefinisikan di sini, beserta Controller atau fungsi yang akan menangani permintaan ke URL tersebut.
- Periksalah file ini untuk melihat bagaimana URL seperti /dashboard-user, /sesi (login), atau /list-user (admin) dipetakan ke logika aplikasi.

2. Controllers (app/Http/Controllers/):

- Ini adalah "manajer" yang menerima permintaan dari Routes, memproses logika bisnis (seringkali dengan bantuan Model), dan kemudian menentukan respons apa yang akan dikirim kembali (biasanya berupa View).
- Controller utama yang digunakan dalam proyek ini antara lain:
  - SessionController.php: Mengelola proses login dan registrasi.
  - UserController.php: Mengelola aksi terkait pengguna, seperti update profil dan penambahan user baru oleh admin.
  - AdminController.php: Mengelola aksi spesifik untuk admin, seperti menampilkan daftar pengguna dan menghapus pengguna.
  - Untuk fitur seperti Dashboard Pengguna, Kalender, atau Tips & Trik, logika bisa jadi terdapat dalam route closure di routes/web.php atau dalam Controller khusus jika logikanya kompleks.

4. Views (resources/views/):
   - Ini adalah "wajah" aplikasi Anda; file-file template HTML (menggunakan Blade templating engine) yang dilihat oleh pengguna di browser mereka.
   - Struktur folder di dalamnya biasanya mencerminkan bagian-bagian aplikasi:
       - user/: Tampilan untuk halaman pengguna (misalnya dashboard-user.blade.php, kalender.blade.php, tips&trik.blade.php, setting.blade.php).
       - admin/: Tampilan untuk halaman admin (misalnya dashboard-admin.blade.php, list-user.blade.php, add-user.blade.php).
       - sesi/: Tampilan untuk halaman login dan registrasi (misalnya login.blade.php, register.blade.php).
       - layouts/ (Umum): Berisi template dasar atau komponen UI yang digunakan berulang kali.

5. Models (app/Models/):
- Ini adalah "perwakilan" tabel-tabel di database Anda. Models (menggunakan Eloquent ORM Laravel) bertugas untuk berinteraksi dengan database – mengambil data, menyimpan data baru, memperbarui, dan menghapus.
- Model utama yang mungkin ada:
    - User.php: Merepresentasikan data pengguna.
    - Transaction.php (Perkiraan): Merepresentasikan data transaksi keuangan (pemasukan/pengeluaran).
    - Tip.php (Perkiraan): Merepresentasikan data artikel tips & trik (jika kontennya dinamis dari database).
- Pastikan untuk memeriksa nama file Model yang sebenarnya di direktori app/Models/ proyek Anda.

6. Middleware (app/Http/Middleware/):
- Ini adalah "penjaga gerbang" yang bisa memeriksa permintaan HTTP sebelum mencapai Controller.
- RoleMiddleware.php digunakan dalam proyek ini untuk memastikan hanya pengguna dengan peran yang sesuai (user atau admin) yang dapat mengakses halaman tertentu.

7. Migrations (database/migrations/):
- File-file ini mendefinisikan struktur (skema) tabel-tabel di database Anda. Menjalankan php artisan migrate akan membuat tabel-tabel ini.

8. Assets (Frontend - public/ & resources/):
- File CSS (public/css/), JavaScript (public/js/), dan gambar (public/assets/ atau sejenisnya) yang digunakan untuk tampilan.
- Jika menggunakan Laravel Mix atau Vite, source file CSS dan JS mungkin ada di resources/css/ dan resources/js/ sebelum dikompilasi ke folder public/.

🧰 Teknologi yang Digunakan
- Frontend: HTML, CSS, JavaScript 
- Backend: PHP 8.x (dengan Framework Laravel 9.x/10.x - sesuaikan versinya)
- Database: MySQL

Package Manager: Composer (untuk PHP), NPM (untuk JavaScript)

⚙ Cara Menjalankan Aplikasi
1. Clone repositori
- git clone https://github.com/AmirulMirdas2/Mini-projet-2-PBW.git
- cd Mini-projet-2-PBW

2. Install dependency
- composer install
- npm install && npm run dev

3. Salin file .env dan buat kunci aplikasi
- cp .env.example .env
- php artisan key:generate

4. Atur database di .env lalu migrate
- php artisan migrate

5. Jalankan aplikasi
- php artisan serve

📌 Catatan Tambahan
- Aplikasi ini ditujukan untuk individu yang ingin memiliki kontrol lebih baik atas keuangan pribadi mereka, mulai dari pelajar, mahasiswa, hingga profesional.
- Dirancang dengan antarmuka pengguna yang intuitif dan diharapkan mobile-friendly.

🤝 Kontribusi

Kami sangat terbuka untuk saran, laporan bug, dan kontribusi untuk pengembangan fitur baru. Jika Anda ingin berkontribusi:
1. Fork repository ini.
2. Buat branch baru untuk fitur atau perbaikan Anda (git checkout -b fitur/NamaFiturAnda atau fix/DeskripsiPerbaikan).
3. Lakukan perubahan dan commit (git commit -am 'Menambahkan fitur X').
4. Push ke branch Anda (git push origin fitur/NamaFiturAnda).
5. Buat Pull Request baru.

👥 Tim Pengembang
1. Amirul Mirdas - 23081071010070 (Dashboard dan Admin Page)
2. Bunga Rasikhah haya - 2308107010010 (Ubah Profil dan User Page)
3. Firah Maulida - 2308107010034 (Tips & Trik dan User Page)
4. Razian Sabri - 2308107010050 (Login Page dan Register Page)
