<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet"href="style.css">

    <title>@yield('title')</title>
  </head>
  <body>
    <!-- Header Pic -->
    <div class="background-header">
      <div class="row justify-self-start ml-2">
        <div class="col-1 header-pic">
          <img src="https://upload.wikimedia.org/wikipedia/id/9/95/Logo_UH.png" alt="Logo Unhas" width="70">
        </div>
        <div class="col-sm-4 header-head">
          <h1>Fakultas Teknik</h1>
          <h2>Universitas Hasanuddin</h2>
        </div>
      </div>
    </div>
    <!-- Akhir Header Pic -->

    <!-- Navbar New -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse py-1 border-top border-primary ml-3" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Beranda<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Profil
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/sejarah">Sejarah</a>
                <a class="dropdown-item" href="/dosen">Staf Pengajar</a>
                <a class="dropdown-item" href="/tendik">Staf Non-Akademik</a>
                <a class="dropdown-item" href="/kampus">Lokasi Kampus</a>
                <a class="dropdown-item" href="/manajemen">Struktur Manajemen</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Akademik
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/sarjana">Program Sarjana</a>
                <a class="dropdown-item" href="/magister">Program Magister</a>
                <a class="dropdown-item" href="#">Program Doktor</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Fasilitas
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Perpustakaan</a>
                <a class="dropdown-item" href="#">Laboratorium Mekanika Tanah</a>
                <a class="dropdown-item" href="#">Laboratorium Hidrolika</a>
                <a class="dropdown-item" href="#">Laboratorium Struktur dan Bahan</a>
                <a class="dropdown-item" href="#">Laboratorium Jalan dan Aspal</a>
                <a class="dropdown-item" href="#">Laboratorium Mekanika Tanah</a>
                <a class="dropdown-item" href="#">Laboratorium Ukur Tanah</a>
              </div>
            </li>
          </ul>
        </div>
    </nav>
    <!-- Akhir Navbar New -->

    <!-- Jumbotron -->
    @yield('jumbotron')
    <!-- Akhir Jumbotron -->

    <!-- Konten Utama dan Sidebar-->
      <div class="row margin-konten">
        <div class="col main-pad">
          @yield('container')
        </div>
        <div class="col-3 border-left">
          <div class="row">
            <div class="col">
              <h3>Peraturan Akademik</h3>
              <ul>
                <li><a href="#">Program Sarjana</a></li>
                <li><a>Program Magister</a></li>
                <li>Program Doktor</li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <h3>Pedoman</h3>
              <ul>
                <li>Panduan Akademik</li>
                <li>Buku Kurikulum 2016</li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <h3>Formulir Korespondensi</h3>
              <ul>
                <li>Program Studi S1</li>
                <li>Program Studi S2</li>
                <li>Program Studi S3</li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <h3>Tautan Eksternal</h3>
              <ul>
                <li>Universitas Hasanuddin</li>
                <li>Fakultas Teknik</li>
                <li>Lembaga Penelitian & Pengabdian Masyarakat</li>
                <li>Organisasi Kemahasiswaan</li>
                <li>Portal Pengukuran Capaian Pembelajaran</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    <!-- Akhir Konten Utama dan Sidebar -->

    <!-- Footer -->
    <div class="row border-top footer">
      <div class="col-4">
        <div class="row marleft">
          <div class="col-lg-8">
            <h2 class="alamat">Alamat</h2>
            <p class="alamat">Civil Engineering Building Fakultas Teknik, Kampus Gowa Jl Poros Malino, km 6 Bontomarannu, Gowa</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 alamat">
        <h2>Akreditasi & Sertifikasi</h2>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/ABET_logo.svg/1024px-ABET_logo.svg.png" alt="Logo ABET" width="75">
        <img src="https://shapesea.com/wp-content/uploads/2015/10/227815_171106842942983_259987_n.jpg" alt="Logo AUN" width="200">
        <img src="https://fkip.untad.ac.id/wp-content/uploads/2018/01/logo-ban-pt.png" alt="Logo BAN-PT" width="100">
      </div>
      <div class="col-lg-4">
        <div class="row">
          <div class="col alamat">
        <h2>Keanggotaan</h2>
        </div>
        </div>
        <div class="row">
          <div class="col padleft">
        <img src="https://smcnas.fstpt.info/themes/reactor/images/logo.png" alt="Logo FSTPT" width="200">
        <img src="https://lh3.googleusercontent.com/proxy/L27ZvLeiMuyqyM0FAOcnxuw00if3lE-92KOecAzjv9EQmFMHCduglwIKoAhQmG4YJyaK5rdmfofP98DE_Z6M1e5kTy7OqN3wb-zA-Dt76LCbMAehi6o9gbp1LQkkYbPHWg"
          alt="Logo UNIID" width="75">
        <img src="https://bmpttssi.net/wp-content/uploads/2020/10/Latest-Logo.png" alt="Logo BMPTTSSI" width="300">
        </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <p class="footer-text">© 2020 Departemen Teknik Sipil</p>
      </div>
    </div>
    <!-- Akhir Footer -->
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>