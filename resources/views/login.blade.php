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

<body class="body-bg-login">
    <div class="container">
        <section class="login-section">
            <div class="d-flex justify-content-center">
                <div class="card shadow-sm">
                    <div class="row">
                        <div class="col">
                            <div class="container mt-2">
                                <img src="/assets/img/user.png" alt="" class="img-login">
                                <img src="/assets/img/DSC_0772.jpg" alt="" class="img-fluid" style="width: 320px; border-radius: 3%">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="container">
                                <form class="my-3">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Nomor Pokok Mahasiswa..">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" placeholder="Password..">
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="width: 100%;">Masuk</button>
                                </form>
                                <span style="text-align: center;">
                                    <small>
                                        <p class="fw-light">Login menggunakan akun <a href="" style="text-decoration: none;">Portal Mahasiswa</a>!</p>
                                        <hr>
                                        <p><a href="/" style="text-decoration: none;"><i class="fa-solid fa-circle-left me-1"></i>Kembali</a></p>
                                    </small>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="/assets/js/myScript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>