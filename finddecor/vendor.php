<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include "template/headtags.html"; ?>

    <title>Vendor Saya</title>
</head>

<body>
    <!-- Navbar -->
    <?php include "template/header.php"; ?>
    <!-- NAVBAR END -->

    <!-- CONTENT START -->
    <section class="content mb-5">
        <div class="container">
            <div class="row ">
                <div class="col-lg-2 mt-5">
                    <div class="vendor">
                        <ul class="nav mt-3">
                            <li class="nav-item">
                                <a class="nav-link active text-dark" href="vendor.php">Vendor Saya</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="daftarbarang.php">Daftar Barang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#">Pesanan</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="card mt-5 p-3 mb-5">
                        <div class="container">
                            <p class="font">VENDOR SAYA</p>
                            <hr class="mt-n2">
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-lg-4 mt-4">
                                        <div class="card warna mb-3 p-2">
                                            <img src="assets/img/logovendor/logo1.png" class="rounded-circle mx-auto border border-white" width="90%">
                                            <div class="form-group">
                                                <input type="file" class="form-control-file mt-3 border border-light">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 mt-3">
                                        <div class="form-group">
                                            <label for="vendor">Nama Vendor</label>
                                            <input type="text" class="form-control" id="vendor" name="vendor">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 pr-2">
                                                <div class="form-group">
                                                    <label for="kecamatan">Kecamatan</label>
                                                    <input type="text" class="form-control" id="kecamatan" name="kecamatan">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 pl-2">
                                                <div class="form-group">
                                                    <label for="kabupaten">Kabupaten</label>
                                                    <input type="text" class="form-control" id="kabupaten" name="kabupaten">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsi">Deskripsi</label>
                                            <textarea class="form-control" id="deskripsi" rows="4" name="deskripsi"></textarea>
                                        </div>
                                        <button type="submit" name="simpan" class="btn btn-lg tombol mb-3 float-right">SIMPAN</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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