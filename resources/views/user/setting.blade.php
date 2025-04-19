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
        <div class="header-nav">
            <a href="/dashboard-user"><b>Back</b></a>
        </div>
        <h1>Edit Profil</h1>

        <form id="profileForm" action="{{ route('update-profile') }}" method="POST">
            @csrf
            <div class="profile-header">
                <div class="profile-picture">
                    <img src="assets/Mirul.png" alt="Foto Profil">
                </div>
                <div class="profile-info">
                    <div class="name">
                        <p>{{ Auth::user()->name }}</p>
                    </div>
                    <div class="email">
                        <p>{{ Auth::user()->email }}</p>
                    </div>
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
                        <label for="firstName">Nama</label>
                        <input type="text" id="firstName" name="name" placeholder="Nama Depan">
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="newPassword">Kata Sandi Baru</label>
                            <input type="password" id="newPassword" name="password"
                                placeholder="Masukkan kata sandi baru">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Konfirmasi Kata Sandi Baru</label>
                        <input type="password" id="confirmPassword" name="password_confirmation"
                            placeholder="Konfirmasi kata sandi baru">
                    </div>
                </div>

                <div class="action-buttons">
                    <button type="button" class="btn btn-cancel"><a href="/dashboard-user"
                            class="bp">Batalkan</a></button>
                    <button type="submit" class="btn">Simpan Perubahan</button>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            konfirmasi kata sandi tidak cocok
                        </ul>
                    </div>
                @endif
            </div>
        </form>
    </div>
    <script src="js/EditProfile/editprofile.js"></script>
</body>

</html>
