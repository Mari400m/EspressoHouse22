<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title> Espresso House </title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.scss" rel="stylesheet" type="text/css">
    <link href="css/styles.scss" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php include "includes/navigation.php"; ?>

<div class="topnav">
    <a class="active" href="#home">Home</a>
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
</div>

<h2 style="text-align:center">Multiple Slideshows</h2>

<p>Slideshow 1:</p>
<div class="slideshow-container">
    <div class="mySlides1">
        <img src="images/1.png" style="width:100%">
    </div>

    <div class="mySlides1">
        <img src="images/2.png" style="width:100%">
    </div>

    <div class="mySlides1">
        <img src="images/12.png" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
    <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>

<p>Slideshow 2:</p>
<div class="slideshow-container">
    <div class="mySlides2">
        <img src="images/logo.png" style="width:100%">
    </div>

    <div class="mySlides2">
        <img src="images/appstore.png" style="width:100%">
    </div>

    <div class="mySlides2">
        <img src="images/tilbud.png" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
</div>

<script>
    var slideIndex = [1,1];
    var slideId = ["mySlides1", "mySlides2"]
    showSlides(1, 0);
    showSlides(1, 1);

    function plusSlides(n, no) {
        showSlides(slideIndex[no] += n, no);
    }

    function showSlides(n, no) {
        var i;
        var x = document.getElementsByClassName(slideId[no]);
        if (n > x.length) {slideIndex[no] = 1}
        if (n < 1) {slideIndex[no] = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex[no]-1].style.display = "block";
    }
</script>

<?php include "includes/footer.php"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
