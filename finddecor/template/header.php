<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top border-dark border-bottom">
    <a class="navbar-brand ml-5" href="index.php">findDécor</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <form action="" class="mt-3 p-1">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Cari Dekorasi" name="cari">
                </form>
            </form>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav ml-auto">
                    <?php $in = 1;
                    if ($in == 1) : ?>
                        <a class="navbar-brand" href="pemesanancustomer.php"><i class="fas fa-shopping-cart shop ml-2 mr-2"></i></a>
                        <p class="batas mr-4 mt-1">|</p>
                        <a class="nav-item btn masuk mt-3 mr-1 font-weight-bold" href="login.php">MASUK</a>
                        <a class="nav-item btn tombol mt-3 font-weight-bold border border-dark" href="daftar.php">DAFTAR</a>
                    <?php else : ?>
                        <a class="navbar-brand" href="pemesanancustomer.php"><i class="fas fa-shopping-cart shop ml-2 mr-2"></i></a>
                        <p class="batas mr-1 mt-1">|</p>
                        <a class="nav-item mt-4 mr-1 font-weight-bold text-dark" href="login.php"><i class="fas fa-store-alt mr-1"></i>Vendor</a>
                    <?php endif ?>
                </ul>
            </div>

        </div>
    </div>
</nav>
<!-- NAVBAR END -->