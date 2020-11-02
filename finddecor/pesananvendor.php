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
                            <p class="font">DAFTAR PESANAN VENDOR</p>
                            <hr class="mt-n2">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-hover table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th>Pembeli</th>
                                                <th scope="col">Barang</th>
                                                <th>Qty</th>
                                                <th scope="col">Subtotal</th>
                                                <th scope="col">Status</th>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <form action="" method="">
                                                    <td>1</td>
                                                    <td>Firdaus</td>
                                                    <td>Tenda</td>
                                                    <td>3</td>
                                                    <td>Rp. 150.000</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="status" name="status">
                                                                <option disabled selected>Set Status</option>
                                                                <option value="Proses">Konfirmasi</option>
                                                                <option value="Proses">Proses</option>
                                                                <option value="Kirim">Kirim</option>
                                                                <option value="Selesai">Selesai</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <!-- DETAIL PESANAN -->
                                                        <a href="" class="btn btn-warning btn-sm">
                                                            <i class="fas fa-fw fa-info-circle"></i>
                                                        </a>
                                                        <!-- SET STATUS -->
                                                        <button type="submit" class="btn btn-success btn-sm">
                                                            SET
                                                        </button>
                                                    </td>
                                                </form>
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