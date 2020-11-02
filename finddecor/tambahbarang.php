<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include "template/headtags.html"; ?>

    <title>TAMBAH BARANG</title>
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
                            <?php include "template/sidebarvendor.php" ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="card mt-5 p-3 mb-5">
                        <div class="container">
                            <p class="font">TAMBAH BARANG VENDOR</p>
                            <hr class="mt-n2">
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-lg-8 mt-3">
                                        <div class="form-group">
                                            <label for="namabrg">Nama Barang</label>
                                            <input type="text" class="form-control" id="namabrg" name="namabrg">
                                        </div>
                                        <div class="form-group">
                                            <label for="harga">Harga / Hari</label>
                                            <input type="text" class="form-control" id="harga" name="harga">
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsibrg">Deskripsi</label>
                                            <textarea class="form-control" id="deskripsibrg" rows="4" name="deskripsi"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mt-5">
                                        <div class="card warna mb-3 p-2">
                                            <img src="assets/img/barang/barang1.jpg" class="mx-auto border border-white" width="100%">
                                            <div class="form-group">
                                                <input type="file" class="form-control-file mt-3 border border-light">
                                            </div>
                                        </div>
                                        <button type="submit" name="setbarang" class="btn btn-lg btn-block tombol mb-3 ">SIMPAN</button>
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