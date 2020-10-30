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
                    <a href="#" class="text-dark">Profil Saya</a>
                    <hr class="ml-0" width="70%">
                    <a href="#" class="text-dark">Histori</a>
                    <hr class="ml-0" width="70%">
                    <a href="#" class="text-dark">Pesanan</a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="card kotak mt-5 p-3">
                    <form action="" method="POST">
                        <div class="container">
                            <p class="judul font-weight-bold">Profil saya</p>
                            <hr>
                            <div class="row">
                                <div class="col-lg-2">
                                    <p class="mt-3 font-weight-bold">Username</p>
                                    <p class="mt-3 font-weight-bold">Nama</p>
                                    <p class="mt-3 font-weight-bold">Email</p>
                                    <p class="mt-3 font-weight-bold">Nomor Telepon</p>
                                </div>
                                <div class="col-lg-6 mt-3">
                                    <div class="isi">
                                        <div class="form-group">
                                            <input type="text" class="form-control font-weight-bold" name="username" id="username" value="firdauszulkarnain" autocapitalize="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control font-weight-bold" name="nama" id="nama" autocomplete="off" value="Muhammad Firdaus Zulkarnain">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control font-weight-bold" name="email" id="email" autocomplete="off" value="firdauszulkarnain@gmail.com">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control font-weight-bold" name="notelp" id="notelp" autocomplete="off" value="0819968393849">
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-sm tombol text-uppercase">Simpan</button>
                                </div>
                                <div class="col-lg-4 mx-auto">
                                    <div class="card mb-3 p-2">
                                        <img src="assets/img/profile/Default.jpg" class="rounded-circle mx-auto border border-dark" width="70%">
                                        <div class="form-group">
                                            <input type="file" class="form-control-file mt-3 font-weight-bold">
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-lg btn-block tombol text-uppercase">Ubah Kata Sandi</a>
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
    <div class="fixed-bottom text-center footer1 p-2 border-dark border-top">
        <small class="font-weight-bold text-black">&copy;2020,findDécor</small>
    </div>
    <!-- Footer END -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>