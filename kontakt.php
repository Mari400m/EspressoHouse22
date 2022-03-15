<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Kontakt</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<?php include "includes/navigation.php"; ?>
<div class="topnav">
    <a class="active" href="#menu">Menu</a>
    <a href="#Butikker">Butikker</a>
    <a href="#kontakt">Kontakt</a>
    <a href="#omos">Om os</a>
</div>

<div class="card mb-3 bg-kortbaggrund" style="max-width: 100%;">
    <div class="row g-0">
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Kontakt</h5>
                <p class="card-text">
                    At Espresso House we take sustainability seriously and like many, we want to contribute to a
                    sustainable future.
                    To be tomorrow friendly is a significant drive force within our organization and we are constantly
                    improving our operations in order to secure a legacy we can be proud of.
                    We are not there yet, but we are on the right path and with Tomorrow Friendly we hope to showcase
                    just that.
                </p>
                <h5 class="card-title">Administration</h5>
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
        <div class="col-md-4">
            <img src="images/logo.png" class="img-fluid rounded-start" alt="logo">
        </div>
    </div>
</div>



<?php include "includes/footer.php"; ?>
</body>
</html>
