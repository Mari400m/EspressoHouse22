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
<br>

<div class="container bg-Creamhvid">
    <div class="clearfix">
        <img src="images/logo.png" class="col-lg-3 float-md-end mb-3 ms-md-3" alt="...">

        <h5 class="card-title">Kontakt</h5>
        <p class="card-text">
            Tøv ikke med at kontakte os,
        </p>

        <p>
            hvis du har spørgsmål om vores forretning, produkter, åbninger,
        </p>

        <p>
            rekrutteringer,
        </p>

        <p>
            eller hvis du har ris eller ros, du vil dele.
        </p>

        <p class="card-text">
            Svarene på de mest almindelige spørgsmål finder du i vores FAQ
        </p>

        <p class="card-text">
            Hvis ikke er du velkommen til at kontakte os på <a href="Info_dk@espressohouse.com">Info_dk@espressohouse.com</a>
        </p>

        <br>

        <h5 class="card-title">Administration</h5>

        <p class="card-text">
            Vimmelskaftet 43, 4. sal DK-1161 København K
        </p>

        <p class="card-text">
            Tel 33 93 98 28
        </p>

        <p class="card-text">
            CVR 10 01 16 63
        </p>

        <br>

        <p class="card-text">
            For ris/ros og generel info/kontakt til Espresso House Danmark <a href="Info_dk@espressohouse.com">Info_dk@espressohouse.com</a>
        </p>

        <p class="card-text">
            For al fakturering til Espresso House Danmark <a href="Dksupplierinvoice@espressohouse.se">Dksupplierinvoice@espressohouse.se</a>
        </p>

        <p class="card-text pb-5">
            Kontrolrapport <a href="kontrolrapport">Kontrolrapport</a>
        </p>

    </div>
</div>

<br>

<?php include "includes/footer.php"; ?>
</body>
</html>
