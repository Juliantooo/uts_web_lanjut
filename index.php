
<?php 
    include('config.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- external Css -->
    <link href="assets/css/baseStyle.css?" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/9e924fc2c1.js" crossorigin="anonymous"></script>
    <title>Cuciin</title>
  </head>
  <body>
  <header>
      <nav
        class="navbar navbar-expand-lg navbar-light bg-white py-3 px-5 fixed-top"
        style="background: rgb(218,249,255);
background: linear-gradient(317deg, rgba(218,249,255,0.06828397863051472) 33%, rgba(34,34,34,0.8918133903952206) 100%);"
        >
        <a class="navbar-brand ml-5" href="#" style="color: #36efff;">
          <h1><strong>Cuci</strong><sup>in</sup></h1>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto mr-5">
            <a class="nav-item nav-link mx-4 page-scroll" href="#caraKerja">Cara Kerja</a>
            <a class="nav-item nav-link mx-4 page-scroll" href="#tentang">Tentang kami</a>
            <a class="nav-item nav-link mx-4 page-scroll" href="#daftar">Daftar</a>
            <a class="nav-item nav-link mx-4" style="color:#bababa" href="login.php">Login admin</a>
          </div>
        </div>
      </nav>
    </header>
    <!-- main content -->
    <main>
      <!-- Jumbotron -->
      <div class="warp parallax-window fullscreen" data-parallax="scroll" speed="0.5" data-image-src="assets/images/hero-img.jpg">
        <!-- <img src="assets/images/hero-img.jpg" alt="" class="w-100" /> -->
        <div class="hero-text  w-50">
          <p class="h1 hidden_top hero_intro">
            Gak perlu lagi nyuci kalo pake Cuci<sup>in</sup>! <br>
            Cuci<sup>in</sup>, laundry harga ramah, kualitas wah! <br>
            <a class="btn btn-outline-primary border border-light rounded-pill py-2 px-3" href="login.php" role="button" style="color:#fff">Daftar Sekarang</a>
          </p>
        </div>
      </div>
      <!-- second jumbotron -->
      <!-- Jumbotron -->
      <div class="fullscreen d-flex" id="caraKerja" style="background: rgb(220,255,244);
background: linear-gradient(151deg, rgba(220,255,244,0.617303586473652) 33%, rgba(57,207,236,1) 100%);">
        <div class="container align-self-center">
          <h4 class="display-4 text-center title_cara_kerja hidden_top_el my-5 py-5">
            <strong>Bagaimana Cuci<sup>in</sup> kerja</strong>
          </h4>
          <div class="d-flex flex-row justify-content-center my-5 pt-5">
            <div class="flex-fill text-center card_cara_kerja hidden_card">
              <img src="assets/images/order-laundry.png" class="w-50 mb-3" alt="">
              <h4 class="mb-3">Kamu order</h4>
              <p>Kamu bisa order di web ataupun <br> bisa datang ke tempat kami langsung</p>
            </div>
            <div class="flex-fill text-center card_cara_kerja hidden_card">
              <img src="assets/images/pick-up.png" class="w-50 mb-4" alt="">
              <h4 class="mb-3">Kami ambil</h4>
              <p>Jika kamu order dari web, kami akan ambil dengan segera</p>
            </div>
            <div class="flex-fill text-center card_cara_kerja hidden_card">
              <img src="assets/images/cleaning.png" class="w-50 mb-3"  alt="">
              <h4 class="mb-3">Kami cuci dan rapikan</h4>
              <p>Kami akan cuci dan pastikan pakaianmu rapi seperti baru</p>
            </div>
            <div class="flex-fill text-center card_cara_kerja hidden_card">
              <img src="assets/images/delivery-order.png" class="w-50 mb-3"  alt="">
              <h4 class="mb-3">Kami antar</h4>
              <p>Kami akan antar langsung ke rumahmu atau kamu bisa ambil sendiri</p>
            </div>
          </div>
        </div>
      </div>
      <!-- third jumbotron -->
      <div class="fullscreen d-flex parallax-window w-100" id="kualitas" data-parallax="scroll" speed="0.5" data-image-src="assets/images/ramah-hero.jpg" style="color:white">
        <div class="align-self-center mx-auto">
          <h4 class="display-4 text-center hidden_top_el title_kualitas" >
            <strong>Harga ramah, kualitas Wah!</strong>
          </h4>
          <div class="d-flex flex-row justify-content-center my-5">
            <div class="flex-fill text-center card_paket hidden_card">
              <img src="assets/images/fast.png" class="w-50" alt="">
              <h4>Reguler Rp.10000/kg 2 hari</h4>
              <p>Dengan waktu 2 hari, pakaian kamu akan terlihat sangat rapi!</p>
            </div>
            <div class="flex-fill text-center card_paket hidden_card">
              <img src="assets/images/fast.png" class="w-50" alt="">
              <h4>Fast Rp.15000/kg 1 hari</h4>
              <p>Kecepatan adalah yang utama, tapi tentuk kualitas harus sempurna</p>
            </div>
            <div class="flex-fill text-center card_paket hidden_card">
              <img src="assets/images/fast.png" class="w-50" alt="">
              <h4>Express Rp.20000/kg 5 jam</h4>
              <p>Semua ada di paket ini, express adalah segalanya, <br> sangat cepat dan kualitas tiada tara</p>
            </div>
          </div>
        </div>
      </div>
      <div class="fullscreen d-flex" id="daftar" style="background: rgb(116,250,255);
background: linear-gradient(305deg, rgba(116,250,255,1) 0%, rgba(183,250,229,0.4688442027201506) 97%);">
        <div class="container align-self-center">
          <h4 class="display-4 text-center mb-5">
            <strong>Daftar untuk mulai Cuci<sup>in</sup></strong>
          </h4>
          <div class="d-flex flex-row justify-content-center my-5">
            <div class="flex-fill bd-highlight justify-content-center">
              <div class="form-modal">
                  
                  <div class="form-toggle">
                      <button id="login-toggle" onclick="toggleLogin()">log in</button>
                      <button id="signup-toggle" onclick="toggleSignup()">sign up</button>
                  </div>

                  <div id="login-form">
                      <form action="user_login.php" method="POST">
                          <input name="email" type="text" placeholder="Enter email or username"/>
                          <input name="password" type="password" placeholder="Enter password"/>
                          <input type="submit" value="Login" class="btn login">
                          <p><a href="javascript:void(0)">Forgotten account</a></p>
                      </form>
                  </div>

                  <div id="signup-form">
                      <form action="user_daftar.php" method="POST">
                          <input name="name" type="text" placeholder="Nama Lengkap"/>
                          <input name="email" type="email" placeholder="Email"/>
                          <input name="username" type="username" placeholder=" username"/>
                          <input name="password" type="password" placeholder="password"/>
                          <input name="alamat" type="text" placeholder="Alamat"/>
                          <input type="submit" value="Daftar" class="btn signup">
                          <p>Clicking <strong>create account</strong> means that you are agree to our <a href="javascript:void(0)">terms of services</a>.</p>
                      </form>
                  </div>

              </div>


            </div>
            <div class="flex-fill bd-highlight">
              <div class="daftar_intro mt-2 mx-5">
                <p style="font-size:110%">
                  Dengan mendaftar dan mebuat akun Cuci<sup>in</sup>,<br> Kamu bisa mula menggunakan jasa laundry dari Cuci<sup>in</sup>! <br>
                  Laundry tanpa perlu repot-repot nganter atau <br> ngambil dengan pelayanan berkualitas dan super cepat. <br> Serta dengan berbagai
                 pilihan paket kecepatan anda tidak perlu taku lagi laundry lama
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="parallax-window fullscreen d-flex" data-parallax="scroll" id="tentang" speed="0.5" data-image-src="assets/images/laundry-ilu.png" style="color:#fff" id="tentang">
          <div class="warp align-self-center mx-auto">
            <h4 class="display-4 text-center hidden_top_el title_tentang">
              <strong>Tentang Cuci<sup>in</sup></strong>
            </h4>
            <div class="d-flex flex-row justify-content-center my-5">
              <div class="flex-fill bd-highlight text-center">
                <div class="card_tentang hidden_card">
                  <p>Cuci<sup>in</sup> adalah usaha untuk membantu anak kos dalam hal pakaian. <br>
                    Yaitu membantu mencuci,merapikan pakaian kotor mereka agar nyaman dipakai saat <br>
                    bekerja ataupun kuliah. Dengan begitu diharapkan mereka merasa lebih percaya diri dan <br>
                    Semangat dalam menjalani aktivitas sehari-hari mereka.
                  </p>
                </div>
              </div>
            </div>
          </div>
      </div>
    </main>

    <!-- footer -->
    <footer>
      <div class="footer pt-4 pb-2 "  style="background: rgb(116,250,255);
background: linear-gradient(305deg, rgba(116,250,255,1) 0%, rgba(183,250,229,0.4688442027201506) 97%);">
      <p class="text-center ">Copyright &copy 2020 Cuci<sup>in</sup></p>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/parallax.js-1.5.0/parallax.min.js"></script>
    <script src="assets/js/jquery-swing.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
      
      function toggleSignup(){
   document.getElementById("login-toggle").style.backgroundColor="#fff";
    document.getElementById("login-toggle").style.color="#8c9292";
    document.getElementById("signup-toggle").style.backgroundColor="#8c9292";
    document.getElementById("signup-toggle").style.color="#fff";
    document.getElementById("login-form").style.display="none";
    document.getElementById("signup-form").style.display="block";
}

function toggleLogin(){
    document.getElementById("login-toggle").style.backgroundColor="#8c9292";
    document.getElementById("login-toggle").style.color="#fff";
    document.getElementById("signup-toggle").style.backgroundColor="#fff";
    document.getElementById("signup-toggle").style.color="#8c9292";
    document.getElementById("signup-form").style.display="none";
    document.getElementById("login-form").style.display="block";
}

    </script>
  </body>
</html>