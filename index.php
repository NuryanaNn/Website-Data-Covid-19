<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- My Style -->
    <link rel="stylesheet" href="style.css">

    <title>Covid-19</title>
  </head>
  <body>

  <!-- API -->
  <?php
    $url = "https://data.covid19.go.id/public/api/update.json";
    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    $result = json_decode($response, true);
    $jumlah_positif = $result['update']['total']['jumlah_positif'];
    $jumlah_dirawat = $result['update']['total']['jumlah_dirawat'];
    $jumlah_sembuh = $result['update']['total']['jumlah_sembuh'];
    $jumlah_meninggal = $result['update']['total']['jumlah_meninggal'];

    $url = "https://covid19.mathdro.id/api/";
    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    $result = json_decode($response, true);
    $positive = $result['confirmed']['value'];
    $recovered = $result['recovered']['value'];
    $deaths = $result['deaths']['value'];

    
?>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
  <a class="navbar-brand" href="#">Covid_ID</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="global.php">Data Global</a>
      <a class="nav-link" href="provinsi.php">Data Per Provinsi</a>
    </div>
  </div>
  </div>
</nav>

<!--Jumbotron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Stay Safe</h1>
    <p class="lead">Jaga Kesehatan Anda Dan Keluarga Anda <br> Dengan Menerapkan Perilaku 3M</p>
    <a href="https://www.alodokter.com/virus-corona" class="btn btn-primary tombol">Apa Itu Covid-19</a>
  </div>
</div>

<!-- Data Dari Virus Covis 19 di indo -->
<div class="container text-center">
<h2 style="font-weight:bold;">Kasus Terkonfirmasi Di Indonesia</h2>
  <div class="row gambar">
    <div class="col-md-3">
      <img src="img/confirm.png" alt="">
      <p>Jumlah Terkonfirmasi Positif</p>
      <p class="api" style="font-weight:bold;"><?php echo "" .$jumlah_positif;?></p>
    </div>

    <div class="col-md-3">
      <img src="img/rawat.png" alt="">
      <p>Jumlah Dirawat</p>
      <p class="api" style="font-weight:bold;"><?php echo"". $jumlah_dirawat;?></p>
    </div>

    <div class="col-md-3">
      <img src="img/sembuh.png" alt="">
      <p>Jumlah Sembuh</p>
      <p class="api" style="font-weight:bold;"><?php echo "".$jumlah_sembuh;?></p>
    </div>

    <div class="col-md-3 mb-4">
      <img src="img/deaths.png" alt="">
      <p>Jumlah Meninggal</p>
      <p class="api" style="font-weight:bold;"><?php echo "".$jumlah_meninggal;?></p>
    </div>
  </div>
</div>

<!-- Gejala -->
<div class=" gejala text-center">
  <h1 style="color:white; font-weight:bold;">Gejala Covid-19</h1>
    <div class="row">
    <div class="col-md-3">
      <img src="img/hidung.png" class="batuk" alt="">
      <p>PILEK</p>
    </div>

    <div class="col-md-3">
      <img src="img/panas.png" alt="">
      <p>SUHU PANAS</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      <img src="img/batuk.png" class="batuk" alt="">
      <p>BATUK</p>
    </div>

    <div class="col-md-3 mb-4">
      <img src="img/muntah.png" alt="">
      <p>MUNTAH</p>
    </div>
  </div>
<div class="col-md-3 mb-4">
      <img src="img/pusing.png" alt="">
      <p>PUSING</p>
  </div>
</div>

<div class="container text-center mt-4">
  <h1 style="font-weight:bold;">Kasus Terkonfirmasi Global</h1>
  <div class="row gambar">
    <div class="col-md-4">
      <img src="img/confirm.png" alt="">
      <p>Jumlah Terkonfirmasi Positif</p>
      <p class="api" style="font-weight:bold;"><?php echo "" .$positive;?></p>
    </div>

    <div class="col-md-4">
      <img src="img/sembuh.png" alt="">
      <p>Jumlah Sembuh</p>
      <p class="api" style="font-weight:bold;"><?php echo"". $recovered;?></p>
    </div>

    <div class="col-md-4">
      <img src="img/deaths.png" alt="">
      <p>Jumlah Meninggal</p>
      <p class="api" style="font-weight:bold;"><?php echo "".$deaths;?></p>
    </div>  
  </div>
</div>

<div class="good pt-3">
  <h1 style="color:white; font-weight:bold; text-align:center;">Hal-Hal Yang Bisa Dilakukan Untuk Perlindungan Diri</h1>
  <div class="container">
    <div class="col-md-12">
    <div class="col-md-6 goodcard">
    <div class="card mt-4 pt-4 pb-4 pl-4 pr-4">
        <ul>
          <li>Mencuci Tangan Dengan Sabun Dan Air Mengalir Secara Rutin</li>
          <li>Hindari Menyentuh Area Wajah, Apalagi Mulut, Hidung dan Mata</li>
          <li>Gunakan Tisu Atau Lipatan Siku Saat Batuk</li>
          <li>Hindari Tempat Ramai</li>
          <li>Tetap Dirumah Ketika Badan Terasa Sakit, Meski Hanya Demam 
          <li>Hubungi Layanan Kesehatan Jika Mengalami Geala</li>
          <li>Tetap Perbarui Informasi Terkini</li>
        </ul>
    </div>
  </div>
</div>
</div>
</div>
</div>

<div class="container text-center mt-4">
  <h1 style="font-weight:bold;">Top Case Global</h1>
  <div class="row gambar">
    <div class="col-md-4">
      <img src="img/globe.png" alt="">
      <p>Negara Pertama</p>
      <p class="api" style="font-weight:bold;"><?php echo "" .$positive;?></p>
    </div>

    <div class="col-md-4">
      <img src="img/globe.png" alt="">
      <p>Negara Kedua</p>
      <p class="api" style="font-weight:bold;"><?php echo"". $recovered;?></p>
    </div>

    <div class="col-md-4">
      <img src="img/globe.png" alt="">
      <p>Negara Ketiga</p>
      <p class="api" style="font-weight:bold;"><?php echo "".$deaths;?></p>
    </div>  
  </div>
</div>

  <div class="bad pt-4">
    <div class="container">
      <h1 style="text-align:center; color:white; font-weight:bold">Hal Yang Tidak Boleh Dilakukan </h1>

    <div class="col-md-6">
    <div class="card mt-4 pt-4 pb-4 pr-4 pl-4">
      <ul>
        <li>Jangan Makan Di Tempat Umum</li>
        <li>Batasi Jarak Dengan Orang Lanjut Usia</li>
        <li>Sementara Waktu Lebih Baik Dirumah</li>
        <li>Batasi Jumlah Kunjungan Orang Ke Rumah</li>
        <li>Hindari Melakukan Perjalanan Wisata</li>
        <li>Atur Jadwal Kunjungan Anda KE Dokter</li>
        <li>Kunjungi Toko Bukan Pada Jam Sibuk</li>
      </ul>
    </div>
  </div>
  </div>
  </div>

  <div class="feed pt-4">
    <h1 style="color:white; text-align:center; font-weight:bold">DOKUMENTASI API</h1>
    <div class="container">
    <div class="row">
      <div class="col-md-4">
      <ul class="mt-5 ">
            <li><h1 style="font-weight:bold;">RSS FEED</h1></li>
            <li><a href="https://covid19.go.id/">Beranda</li></a>
            <li><a href="https://covid19.go.id/edukasi/pengantar">Edukasi</li></a>
            <li><a href="https://covid19.go.id/tanya-jawab">Tanya Jawab</li></a>
            <li><a href="https://covid19.go.id/agenda">Agenda</li></a>
            <li><a href="https://covid19.go.id/p/hoax-buster">Hoax Buster</li></a>
          </ul>
      </div>

      <div class="col-md-4 mt-5">
        <ul>
          <li><h1 style="font-weight:bold;">SUMBER API</h1></li>
          <li><a href="https://api.kawalcorona.com/">https://api.kawalcorona.com/</li></a>
        </ul>
      </div>

    <div class="col-md-4 mt-5">
    <ul>
      <li><h1 style="font-weight:bold;">Tentang</h1></li>
      <li>Nuryana</li>
      <li>a2.1700082@mhs.stmik-sumedang.ac.id</li>
     
    </ul>
      
    </div>


    </div>
  </div>












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