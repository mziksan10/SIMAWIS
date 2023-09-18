<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Manajemen Wisuda PPG | Portal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="icon" type="image/x-icon" href="/assets/img/icon.png">
  <link rel="stylesheet" href="/assets/css/myStyle.css">
  <link rel="stylesheet" href="/assets/fontawesome/css/fontawesome.css">
  <link rel="stylesheet" href="/assets/fontawesome/css/brands.css">
  <link rel="stylesheet" href="/assets/fontawesome/css/solid.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      // Add smooth scrolling to all links
      $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function() {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });
  </script>
</head>

<body>
  <section class="header-section">
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a id="logo" class="navbar-brand" href="/">
          <img src="/assets/img/icon-nav.png" alt="Logo" height="50" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#home"><b>Home</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pengumuman"><b>Pengumuman</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kuota"><b>Kuota</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pedoman"><b>Pedoman</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="/login"><b>Login</b></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>
  <section id="home" class="bg-secondary-subtle">
    <div class="d-flex justify-content-center">
      <h1 class="text-greeting text-center mx-auto pt-2"><b>Happy Graduation!</b></h1>
      <div class="blink justify-content-center mt-3" style="position: absolute; background-color: #9900cc; width: 50px; height: 5px; border-radius: 10px;">
      </div>
      <iframe class="mb-5 pt-5" width="960" height="540" src="https://www.youtube.com/embed/d7jdIXLeynw?si=WG6bRTqXAk5o0Sh6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
  </section>
  <section id="pengumuman" class="bg-light">
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
              <p class="card-text">Konten ini masih dalam tahap pengembangan..</p>
              <a href="#" class="btn btn-secondary"><i class="fa-brands fa-readme me-1"></i>Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card shadow-sm" style="width: 100%;">
            <img src="/assets/img/DSC_0772.jpg" class="card-img-top" style="max-width: 100%; max-height: 350px;" alt="...">
            <div class="card-body">
              <h5 class="card-title text-uppercase">Pengukuhan dan Pelantikan Wisuda 2022</h5>
              <p class="card-text">Konten ini masih dalam tahap pengembangan..</p>
              <a href="#" class="btn btn-secondary"><i class="fa-brands fa-readme me-1"></i>Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center mt-3">
        <nav aria-label="Page navigation example">
          <ul class="pagination shadow-sm mb-5">
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
  <section id="kuota" class="bg-secondary-subtle">
    <div class="container justify-content-center">
      <div class="card card-section shadow-sm text-center mx-auto pt-2">
        <h1><b>KUOTA PENDAFTARAN WISUDA</b></h1>
      </div>
      <div class="justify-content-center mt-3">
        <table class="table table-bordered shadow-sm">
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
          <tfoot class="bg-light text-center text-uppercase">
            <tr>
              <th colspan="3" class="text-end">Total</th>
              <th class="text-end">600</th>
              <th class="text-end">150</th>
              <th class="text-end">750</th>
            </tr>
          </tfoot>
        </table>
        <span>
          <p class="text-danger mb-5"><i>*Data pada tabel diatas masih berupa dummy.</i></p>
        </span>
      </div>
    </div>
  </section>
  <section id="pedoman" class="bg-light">
    <div class="container justify-content-center">
      <div class="card card-section shadow-sm text-center mx-auto pt-2">
        <h1><b>PEDOMAN</b></h1>
      </div>
    </div>
  </section>
  <section class="bg-secondary">
    <div class="container justify-content-center">
      <div class="card footer-section shadow-sm text-center mx-auto pt-2 px-3">
        <p>Copyright &copy; SIMAWIS PPG {{ date('Y') }} | Dev. by <a href="https://github.com/mziksan10" style="text-decoration: none;">mziksan10</a>.</p>
      </div>
  </section>

  <script src="/assets/js/myScript.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>