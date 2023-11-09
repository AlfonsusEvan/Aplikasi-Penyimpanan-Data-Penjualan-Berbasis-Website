<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="images/x-icon" href="images/icons/storage.webp">
    <title>Website-Storage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

        @include('Navbar.navbar')

        @include('Carousel.carousel')

      <hr>
      {{-- Card --}}
      <div class="container mt-3">
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Web-Penyimpanan</h3>
              <hr>
              <p class="card-text ">Web-Peyimpanan adalah sebuah aplikasi berbasis website yang dibuat untuk membantu bisnis Showroom jual beli motor second dalam segi pendataan barang. Dikarenakan bisnis Showroom jual beli motor second masih menggunakan sistem manual seperti menginput data - data motor dagangan dengan bentuk  fisik atau menginput data di komputer, ha itu sangat tidak efektif dan efisien. Maka dari itu dibuat lah aplikasi berbasis website ini untuk mepermudah bisnis showroom jual beli motor second dalam penginputtan data, dikarena aplikasi berbasis website ini dapat di akses melalui perangkat electronic manapun yang terhubung ke internet</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Showroom Jual Beli Motor Second</h3>
              <hr>
              <p class="card-text">Showroom jual beli motor second adalah sebuah bisnis jual beli motor bekas. Bisnis ini sudah didirikan sejak tahun 2019 dan masih berlanjut sampai sekarang ini.Bisnis showroom ini berawal dari pemilik bisnis yang membeli sebuah motor tetangga, selang beberapa minggu motor tersebut di jual dan ternyata menghasilkan keuntungan yang lumayan.Mulai dari itu pemilik bisnis memulai bisnis jual beli motor second dengan satu atau dua motor dan kemudian betambah seiring berjalanan waktu sampai sekarang ini.</p>
              <br>
            </div>
          </div>
        </div>
      </div>
      </div>
      {{-- End Card --}}
      
      <hr>
      <div class="container  mt-3">
        <div class="text-center">
          <h2>Alamat Showroom jual beli motor second</h2>
          <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31725.181992174355!2d106.79729543897497!3d-6.309922434662111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ef1b60a8375f%3A0xc278b362d2075422!2sShowroom%20jual%20beli%20motor%20second!5e0!3m2!1sid!2sid!4v1689349778412!5m2!1sid!2sid" class="img-fluid" width="600" height="250" style="border:5px solid #333" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      
     

      @include('Footer.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>