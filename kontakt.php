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

<container class="">
    <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Kontakt</h5>
                    <p class="card-text ps-3">
                        Tøv ikke med at kontakte os, hvis du har
                    </p>
                    <p class="card-text ps-3">
                        spørgsmål om vores forretning, produkter,
                    </p>
                    <p class="card-text ps-3">
                        åbninger, rekrutteringer, eller hvis du har ris
                    </p>
                    <p class="card-text ps-3">
                        eller ros, du vil dele. Svarene på de mest
                    </p>
                    <p class="card-text ps-3">
                        almindelige spørgsmål finder du i vores FAQ
                    </p>
                    <p class="card-text ps-3">
                        – hvis ikke er du velkommen til at kontakte
                    </p>
                    <p class="card-text ps-3">
                        os på info_dk@espressohouse.com
                    </p>
                    <h5 class="card-title pt-5">Administration</h5>
                    <p class="card-text ps-3">
                        Vimmelskaftet 43, 4. sal
                    </p>
                    <p class="card-text ps-3">
                        DK-1161 København K
                    </p>
                    <p class="card-text ps-3">
                        Tel 33 93 98 28
                    </p>
                    <p class="card-text ps-3">
                        CVR 10 01 16 63
                    </p>
                    <p class="card-text ps-3 pt-3">
                        info_dk@espressohouse.com (for ris/ros
                    </p>
                    <p class="card-text ps-3">
                        og generel info/kontakt til Espresso House
                    </p>
                    <p class="card-text ps-3">
                        Danmark)
                    </p>
                    <p class="card-text ps-3">
                        dksupplierinvoice@espressohouse.se (for al
                    </p>
                    <p class="card-text ps-3">
                        fakturering til Espresso House Danmark)
                    </p>
                    <p class="card-text p-3">
                        Kontrol rapport
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <img src="images/logo.png" class="img-fluid rounded-start" alt="logo">
            </div>
        </div>
    </div>
</container>


<?php include "includes/footer.php"; ?>
</body>
</html>
