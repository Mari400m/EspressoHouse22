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
    <a href="#ontakt">Kontakt</a>
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


<div class="card mb-3" style="max-width: 80%;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="images/barrista.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
