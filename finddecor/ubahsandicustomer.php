<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include "template/headtags.html"; ?>

    <title>Ganti Password Customer</title>
</head>

<body>
    <!-- Navbar -->
    <?php include "template/header.php"; ?>
    <!-- NAVBAR END -->

    <!-- CONTENT START -->
    <section class="content mb-5">
        <div class="container">
            <div class="row ">
                <div class="col-lg-2 mt-5 ml-5">
                    <div class="menu">
                        <ul class="nav mt-3">
                            <?php include "template/sidebarcustomer.php" ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mt-5 p-3 mb-5">
                        <div class="container">
                            <p class="font">UBAH KATA SANDI</p>
                            <hr class="mt-n2">
                            <form action="" method="POST">
                                <div class="form-group row">
                                    <label for="password_lama" class="col-sm-4 col-form-label ">Password Lama</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" name="password_lama" id="password_lama" value="123456" autocapitalize="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password_baru" class="col-sm-4 col-form-label ">Password baru</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" name="password_baru" id="password_baru" value="123456" autocapitalize="off">
                                    </div>
                                </div>
                                <div class="form-group row mt-5">
                                    <label for="konfir_password" class="col-sm-4 col-form-label ">Konfirmasi Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" name="konfir_password" id="konfir_password" value="123456" autocapitalize="off">
                                    </div>
                                </div>
                                <a href="profilcustomer.php" class="btn btn-lg tombol mb-3 mt-3">KEMBALI</a>
                                <button type="submit" class="btn btn-lg tombol mb-3 mt-3 float-right" name="setsandi">SIMPAN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- CONTENT END -->

        <!-- FOOTER -->
        <div class="fixed-bottom text-center footer1 p-2 border-dark border-top bg-white">
            <small class="text-black">&copy;2020,findDécor</small>
        </div>

    </section>
    <!-- Footer END -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>