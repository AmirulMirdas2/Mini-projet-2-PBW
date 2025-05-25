💸 CuanFlow
CuanFlow adalah sebuah aplikasi web yang dirancang untuk membantu pengguna mengelola keuangan pribadi mereka dengan cara yang praktis dan efisien. Aplikasi ini menyediakan berbagai fitur mulai dari pencatatan transaksi, visualisasi data keuangan, hingga tips finansial yang bermanfaat.

🚀 Fitur Utama

👤 Halaman Pengguna (User)
1. Dashboard: Menampilkan ringkasan visual keuangan pengguna secara real-time, termasuk:
- Total Pemasukan
- Total Pengeluaran
- Saldo Terkini
2. Kalender Keuangan: Visualisasi transaksi (pemasukan dan pengeluaran) dalam format kalender, memudahkan pengguna untuk melacak aktivitas keuangan berdasarkan tanggal.
3. Catatan Keuangan: Fitur untuk mencatat detail setiap pemasukan dan pengeluaran, meliputi jumlah, kategori, tanggal, dan deskripsi.
4. Ringkasan Keuangan:
- Rekapitulasi Jumlah Pemasukan dalam periode tertentu.
- Rekapitulasi Jumlah Pengeluaran dalam periode tertentu.
- Informasi Saldo Akhir yang jelas.
5. Tips & Trik: Kumpulan artikel, saran, dan strategi mengenai pengelolaan keuangan yang bijak, cara berhemat, investasi dasar, dan topik finansial relevan lainnya untuk meningkatkan literasi keuangan pengguna.

🛠 Halaman Admin
1.Manajemen Pengguna:
- Melihat daftar semua pengguna yang terdaftar.
- Mengelola akun pengguna (misalnya, aktivasi, deaktivasi, edit detail dasar).
- Menghapus akun pengguna jika diperlukan.
2.Dashboard Admin: Menyajikan statistik umum terkait penggunaan aplikasi, seperti jumlah pengguna aktif, total transaksi, dll. (sesuai kebutuhan).

🧰 Teknologi yang Digunakan
Frontend:  HTML, CSS, JavaScript
Backend:  PHP (Laravel)
Database: MySQL

⚙ Cara Menjalankan Aplikasi (Contoh)
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
Aplikasi ini ditujukan untuk individu yang ingin memiliki kontrol lebih baik atas keuangan pribadi mereka, mulai dari pelajar, mahasiswa, hingga profesional.
Dirancang dengan antarmuka pengguna yang intuitif dan diharapkan mobile-friendly.

🤝 Kontribusi
Kami sangat terbuka untuk saran, laporan bug, dan kontribusi untuk pengembangan fitur baru. Jika Anda ingin berkontribusi:
Fork repository ini.
Buat branch baru untuk fitur atau perbaikan Anda (git checkout -b fitur/NamaFiturAnda atau fix/DeskripsiPerbaikan).
Lakukan perubahan dan commit (git commit -am 'Menambahkan fitur X').
Push ke branch Anda (git push origin fitur/NamaFiturAnda).
Buat Pull Request baru.

👥 Tim Pengembang
1. Amirul Mirdas - 23081071010070 (Dashboard dan Admin Page)
2. Bunga Rasikhah haya - 2308107010010 (Ubah Profil dan User Page)
3. Firah Maulida - 2308107010034 (Tips & Trik dan User Page)
4. Razian Sabri - 2308107010050 (Login Page dan Register Page)
