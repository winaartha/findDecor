<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include "template/headtags.html"; ?>

    <title>My Profil</title>
</head>

<body>
    <!-- Navbar -->
    <?php include "template/header.php"; ?>
    <!-- NAVBAR END -->

    <!-- CONTENT START -->
    <div class="container">
        <div class="row">
            <div class="col-lg-2 mt-5">
                <div class="menu">
                    <a href="#">Profil Saya</a>
                    <hr>
                    <a href="#">Histori</a>
                    <hr>
                    <a href="#">Pesanan</a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="kotak">
                    <form action="" method="POST">
                        <div class="container">
                            <p>Profil saya</p>
                            <hr>
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="isi">
                                        <p>Username</p>
                                        <p>Nama</p>
                                        <p>Email</p>
                                        <p>Nomor Telepon</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="isi">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="username" id="username" value="firdauszulkarnain" autocapitalize="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nama" id="nama" autocomplete="off" value="Muhammad Firdaus Zulkarnain">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" id="email" autocomplete="off" value="firdauszulkarnain@gmail.com">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="notelp" id="notelp" autocomplete="off" value="0819968393849">
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-sm tombol">Simpan</button>
                                </div>
                                <div class="col-lg-4">
                                    <div class="kotakfoto">
                                        <img src="assets/img/profile/Default.jpg" alt="" class="rounded-circle" width="70%">
                                        <div class="form-group">
                                            <input type="file" class="form-control-file mt-3 file">
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-lg btn-block tombol">Ubah Kata Sandi</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT END -->

    <!-- FOOTER -->
    <div class="fixed-bottom text-center footer1">
        <small>&copy;2020,findDécor</small>
    </div>


</body>

</html>