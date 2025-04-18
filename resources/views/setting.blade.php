<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil</title>
    <link rel="stylesheet" href="css/EditProfile/editprofile.css">
</head>

<body>
    <div class="container">
        <h1>Edit Profil</h1>

        <form id="profileForm">
            <div class="profile-header">
                <div class="profile-picture">
                    <img src="assets/Mirul.png" alt="Foto Profil">
                </div>
                <div class="profile-info">
                    <h2 id="profileName">Amirul Mirdas</h2>
                    <p id="profileEmail">miruldass@gmail.com</p>
                </div>
                <div class="profile-picture-upload">
                    <button type="button" class="btn-upload">Ubah Foto</button>
                    <input type="file" id="profilePicture" accept="image/*" style="display:none;">
                </div>
            </div>

            <div class="form-section">
                <h3 class="form-section-title">Informasi Pribadi</h3>
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstName">Nama Depan</label>
                        <input type="text" id="firstName" name="firstName" placeholder="Nama Depan" value="Amirul"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="lastName">Nama Belakang</label>
                        <input type="text" id="lastName" name="lastName" placeholder="Nama Belakang" value="Mirdas"
                            required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="displayName">Nama Tampilan</label>
                    <input type="text" id="displayName" name="displayName" placeholder="Nama yang akan ditampilkan"
                        value="mirul">
                </div>

                <div class="form-group">
                    <label for="about">Jenis Kelamin</label>
                    <input type="text" id="gender" name="gender" placeholder="Laki-laki/perempuan">
                </div>
            </div>

            <div class="form-section">
                <h3 class="form-section-title">Informasi Kontak</h3>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email Anda"
                        value="miruldass@gmail.com" required>
                </div>

                <div class="form-group">
                    <label for="phone">Nomor Telepon</label>
                    <input type="tel" id="phone" name="phone" placeholder="Nomor telepon Anda"
                        value="+62 812 3456 7890">
                </div>

                <div class="form-group">
                    <label for="location">Lokasi</label>
                    <input type="text" id="location" name="location" placeholder="Kota dan Negara"
                        value="Jakarta, Indonesia">
                </div>
            </div>

            <div class="form-section">
                <h3 class="form-section-title">Ubah Kata Sandi</h3>
                <div class="form-group">
                    <label for="currentPassword">Kata Sandi Saat Ini</label>
                    <input type="password" id="currentPassword" name="currentPassword"
                        placeholder="Masukkan kata sandi saat ini">
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="newPassword">Kata Sandi Baru</label>
                        <input type="password" id="newPassword" name="newPassword"
                            placeholder="Masukkan kata sandi baru">
                    </div>

                    <div class="form-group">
                        <label for="confirmPassword">Konfirmasi Kata Sandi</label>
                        <input type="password" id="confirmPassword" name="confirmPassword"
                            placeholder="Konfirmasi kata sandi baru">
                    </div>
                </div>
            </div>

            <div class="action-buttons">

                <button type="button" class="btn btn-cancel"><a href="/" class="bp">Batalkan</a></button>
                <button type="submit" class="btn"><a href="/" class="bp">Perubahan</a></button>

            </div>
        </form>
    </div>
    <script src="js/EditProfile/editprofile.js"></script>
</body>

</html>
