<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title> Espresso House </title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">


    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

<?php include "includes/navigation.php"; ?>

<div class="topnav">
    <a class="active" href="#menu">Menu</a>
    <a href="#Butikker">Butikker</a>
    <a href="#kontakt">Kontakt</a>
    <a href="#omos">Om os</a>
</div>

<div class="row">
    <div class="col-6">
        <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="images/1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="500">
                    <img src="images/logo.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/2.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="col-6">
        <div id="carousel2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="images/logo.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="500">
                    <img src="images/2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/1.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<br><br>

<hr>

<div class="container p-3">
    <div class="row">
        <div class="col">
            <img src="images/kort.png" style="max-width: 25%" class="image1 rounded float-start" alt="kort"
        </div>
        <div class="col">
            <img src="images/gavekort.png" style="max-width: 25%" class="rounded float-end" alt="gavekort"
        </div>
        <div class="col">
            <img src="images/kaffe2.png" style="max-width: 25%;" class="rounded mx-auto d-block" alt="kaffe1"
        </div>
    </div>
</div>

<br><br>
<hr class="">Bæredygtighed<hr>
<div class="card mb-3" style="max-width: 100%;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="images/barrista.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">TOMORROW FRIENDLY</h5>
                <p class="card-text">
                    At Espresso House we take sustainability seriously and like many, we want to contribute to a
                    sustainable future.
                    To be tomorrow friendly is a significant drive force within our organization and we are constantly
                    improving our operations in order to secure a legacy we can be proud of.
                    We are not there yet, but we are on the right path and with Tomorrow Friendly we hope to showcase
                    just that.
                </p>
                <p class="card-text"><small class="text-muted">Read more at www.tomorrowfriendly.com</small></p>
            </div>
        </div>
    </div>
</div>


<div class="container px-4 py-5" id="hanging-icons">
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col d-flex align-items-start">
            <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                <img id="cake" src="cold.png" srcset="cold.png 1x, cake@2x.png 2x">
            </div>
            <div>
                <h2>Kolde drikke</h2>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                <a href="#" class="btn btn-primary">
                    Læs mere her
                </a>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                <img id="cake" src="coffee.png" srcset="coffee.png 1x, coffee@2x.png 2x">
            </div>
            <div>
                <h2>Varme drikke</h2> <i class="fa-duotone fa-cup-togo"></i>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                <a href="#" class="btn btn-primary">
                    Læs mere her
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container px-4 py-5" id="hanging-icons">
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col-6 d-flex align-items-start">
            <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                <img id="cake" src="food.png" srcset="food.png 1x, food@2x.png 2x">
            </div>
            <div>
                <h2>Mad</h2>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                <a href="#" class="btn btn-primary">
                    Læs mere her
                </a>
            </div>
        </div>
        <div class="col-6 d-flex align-items-start">
            <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                <img id="cake" src="cake.png" srcset="cake.png 1x, cake@2x.png 2x">
            </div>
            <div>
                <h2>Bagværk</h2>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                <a href="#" class="btn btn-primary">
                    Læs mere her
                </a>
            </div>
        </div>
    </div>
</div>

<br>

<?php include "includes/footer.php"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
