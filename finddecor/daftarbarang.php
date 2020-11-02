<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include "template/headtags.html"; ?>

    <title>DAFTAR BARANG</title>
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
                                <a class="nav-link text-dark" href="pesananvendor.php">Pesanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="invoicevendor.php">Invoice</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="card mt-5 p-3 mb-5">
                        <div class="container">
                            <p class="font">DAFTAR BARANG VENDOR</p>
                            <hr class="mt-n2">
                            <div class="vendor">
                                <div class="row">
                                    <div class="col-lg-4 mb-4">
                                        <div class="card mx-auto mb-3 ">
                                            <img src="assets/img/barang/barang1.jpg" class="card-img-top border-dark border-bottom" alt="...">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h5 class="card-title font-weight-bold mt-2">Set Kursi</h5>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <button type="button" class="btn btn-block tombol">DETAIL</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <div class="card mx-auto mb-3 ">
                                            <img src="assets/img/barang/barang1.jpg" class="card-img-top border-dark border-bottom" alt="...">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h5 class="card-title font-weight-bold mt-2">Set Kursi</h5>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <button type="button" class="btn btn-block tombol">DETAIL</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <div class="card mx-auto mb-3 ">
                                            <img src="assets/img/barang/barang1.jpg" class="card-img-top border-dark border-bottom" alt="...">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h5 class="card-title font-weight-bold mt-2">Set Kursi</h5>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <button type="button" class="btn btn-block tombol">DETAIL</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="tambahbarang.php" class="btn btn-lg btn-block tombol mb-3 p-3">TAMBAH BARANG</a>
                                </div>

                            </div>
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