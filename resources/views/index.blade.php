<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Manajemen Wisuda PPG | Portal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="icon" type="image/x-icon" href="/assets/img/icon.png">
  <link rel="stylesheet" href="/assets/css/myStyle.css">
</head>

<body>
  <section class="header-section">
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a id="logo" class="navbar-brand" href="#">
          <img src="/assets/img/icon-nav.png" alt="Logo" height="50" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pengumuman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kuota</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Persyaratan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="#"><b>Login</b></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>
  <section id="pengumuman" class="bg-secondary-subtle">
    <div class="container justify-content-center">
      <div class="card card-section shadow-sm text-center mx-auto pt-2">
        <h1><b>PENGUMUMAN TERKINI</b></h1>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="card shadow-sm" style="width: 100%;">
            <img src="/assets/img/DSC_0772.jpg" class="card-img-top" style="max-width: 100%; max-height: 350px;" alt="...">
            <div class="card-body">
              <h5 class="card-title text-uppercase">Pengukuhan dan Pelantikan Wisuda 2023</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-secondary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card shadow-sm" style="width: 100%;">
            <img src="/assets/img/DSC_0772.jpg" class="card-img-top" style="max-width: 100%; max-height: 350px;" alt="...">
            <div class="card-body">
              <h5 class="card-title text-uppercase">Pengukuhan dan Pelantikan Wisuda 2022</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-secondary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center mt-3 pb-5">
        <nav aria-label="Page navigation example">
          <ul class="pagination shadow-sm">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </section>
  <section id="kuota" class="bg-light">
    <div class="container justify-content-center">
      <div class="card card-section shadow-sm text-center mx-auto pt-2">
        <h1><b>KUOTA PENDAFTARAN WISUDA</b></h1>
      </div>
      <table class="table table-bordered">
        <thead class="bg-secondary text-center text-uppercase">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Program Studi</th>
            <th scope="col">Jenjang</th>
            <th scope="col">Kuota</th>
            <th scope="col">Tersedia</th>
            <th scope="col">Terisi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th class="text-end" scope="row">1</th>
            <td>Manajemen Sistem Informasi</td>
            <td class="text-center">DIV</td>
            <td class="text-end">300</td>
            <td class="text-end">50</td>
            <td class="text-end">250</td>
          </tr>
          <tr>
            <th class="text-end" scope="row">2</th>
            <td>Komputerisasi Akuntansi</td>
            <td class="text-center">DIV</td>
            <td class="text-end">300</td>
            <td class="text-end">50</td>
            <td class="text-end">250</td>
          </tr>
          <tr>
            <th class="text-end" scope="row">3</th>
            <td>Farmasi</td>
            <td class="text-center">DIII</td>
            <td class="text-end">300</td>
            <td class="text-end">50</td>
            <td class="text-end">250</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <script src="/assets/js/myScript.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>