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

<div class="row bg-kortbaggrund">
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
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
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
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<br>

<hr>

<div class="container-fluid bg-kortbaggrund p-3">
    <div class="row">
        <div class="col">
            <img src="images/kort.png" style="max-width: 50%" class="image1 rounded float-start" alt="kort">
        </div>
        <div class="col">
            <img src="images/gavekort.png" style="max-width: 50%" class="rounded float-end" alt="gavekort">
        </div>
        <div class="col">
            <img src="images/kaffe2.png" style="max-width: 50%;" class="rounded mx-auto d-block" alt="kaffe1">
        </div>
    </div>
</div>

<hr>
<div class="card mb-3 bg-Grey" style="max-width: 100%;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="images/barrista.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">TOMORROW FRIENDLY</h5>
                <p class="card-text">
                    At Espresso House we take sustainability seriously and like many,
                </p>
                <p>
                    we want to contribute to a sustainable future.
                </p>
                <p>
                    To be tomorrow friendly is a significant drive force within our organization and we are constantly
                </p>
                <p>
                    improving our operations in order to secure a legacy we can be proud of.
                </p>
                <p>
                    We are not there yet, but we are on the right path and with Tomorrow Friendly we hope to showcase
                </p>
                <p>
                    just that.
                </p>
                <p class="card-text"><small class="text-muted">Read more at www.tomorrowfriendly.com</small></p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-Grøn">
    <div class="container px-4 py-5" id="hanging-icons">
        <div class="row g-4">
            <div class="col-6 d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3 rounded-circle">
                    <img id="cake" src="images/cold.png" srcset="images/cold.png 1x, images/cold@2x.png 2x"
                         class="rounded-circle">
                </div>
                <div>
                    <h2>Kolde drikke</h2>
                    <br>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence and probably just keep going until we run out of words.</p>
                    <br>
                    <a href="#" class="btn btn-primary">
                        Læs mere her
                    </a>
                </div>
            </div>
            <div class="col-6 d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3 rounded-circle">
                    <img id="cake" src="images/coffee.png" srcset="images/coffee.png 1x, images/coffee@2x.png 2x"
                         class="rounded-circle">
                </div>
                <div>
                    <h2>Varme drikke</h2>
                    <br>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence and probably just keep going until we run out of words.</p>
                    <br>
                    <a href="#" class="btn btn-primary">
                        Læs mere her
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-4 py-5" id="hanging-icons">
        <div class="row g-4">
            <div class="col-6 d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3 rounded-circle">
                    <img id="cake" src="images/food.png" srcset="images/food.png 1x, images/food@2x.png 2x"
                         class="rounded-circle">
                </div>
                <div>
                    <h2>Mad</h2>
                    <br>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence and probably just keep going until we run out of words.</p>
                    <br>
                    <a href="#" class="btn btn-primary">
                        Læs mere her
                    </a>
                </div>
            </div>
            <div class="col-6 d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3 rounded-circle">
                    <img id="cake" src="images/cake.png" srcset="images/cake.png 1x, images/cake@2x.png 2x" class="rounded-circle">
                </div>
                <div>
                    <h2>Bagværk</h2>
                    <br>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence and probably just keep going until we run out of words.</p>
                    <br>
                    <a href="#" class="btn btn-primary">
                        Læs mere her
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<?php include "includes/footer.php"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
