<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <?php include "template/headtags.html"; ?>

   <title>Profil Saya</title>
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
                     <?php include "template/sidebarcustomer.php" ?>
                  </ul>
               </div>
            </div>
            <div class="col-lg-10">
               <div class="card mt-5 p-3 mb-5">
                  <div class="container">
                     <p class="font">PROFIL SAYA</p>
                     <hr class="mt-n2">
                     <form action="" method="POST">
                        <div class="row">
                           <div class="col-lg-8 mt-3">
                              <div class="form-group row">
                                 <label for="text" class="col-sm-3 col-form-label ">Username</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" name="username" id="username" value="firdauszulkarnain" autocapitalize="off">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="text" class="col-sm-3 col-form-label ">Nama</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control " name="nama" id="nama" value="Muhammad Firdaus Zulkarnain" autocapitalize="off">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="text" class="col-sm-3 col-form-label ">E-mail</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control " name="email" id="email" value="firdauszulkarnain@gmail.com" autocapitalize="off">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="text" class="col-sm-3 col-form-label ">No. Telp</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control " name="notelp" id="notelp" value="08133392893" autocapitalize="off">
                                 </div>
                              </div>
                              <a href="ubahsandicustomer.php" class="btn btn-sm tombol  mb-3 p-2">UBAH KATA SANDI</a>
                           </div>
                           <div class="col-lg-4">
                              <div class="card warna mb-3 p-2">
                                 <img src="assets/img/profile/Default.jpg" class="rounded-circle mx-auto border border-white" width="70%">
                                 <div class="form-group">
                                    <input type="file" class="form-control-file mt-3 border border-light">
                                 </div>
                              </div>
                              <button type="submit" name="setprofil" class="btn btn-lg btn-block tombol mb-3">SIMPAN</button>
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