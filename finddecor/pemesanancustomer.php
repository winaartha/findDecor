<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include "template/headtags.html"; ?>

    <title>Pemesanan Customer</title>
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
                    <div class="menu">
                        <ul class="nav mt-3">
                            <li class="nav-item">
                                <a class="nav-link active text-dark" href="profil.php">Profil Saya</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="pemesanancustomer.php">Pemesanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="historicustomer.php">Histori</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="card mt-5 p-3 mb-5">
                        <div class="container">
                            <p class="font">DAFTAR PEMESANAN SAYA</p>
                            <hr class="mt-n2">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-hover table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Barang</th>
                                                <th>Qty</th>
                                                <th scope="col">Subtotal</th>
                                                <th scope="col">Status Pesanan</th>
                                                <th scope="col">Tanggal Pemesanan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Tenda</td>
                                                <td>3</td>
                                                <td>Rp. 50.000</td>
                                                <td>Menunggu Konfirmasi</td>
                                                <td>20-10-2020</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Sofa</td>
                                                <td>1</td>
                                                <td>Rp. 250.000</td>
                                                <td>Proses</td>
                                                <td>20-10-2020</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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