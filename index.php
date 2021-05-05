<!DOCTYPE html>
<html lang="en">
<head>
<?php
include("./includes/header.php");
?>
<title>Home Page</title>
</head>

<body>
<?php
include("./includes/navbar.php");
?>
<main>

<section>
<div  class="bg-secondary pt-5 pb-5 w-50">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  class="d-block w-50" src="image\Toothbrush with logo with ingraving.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img  class="d-block w-50" src="image\tier 1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-50" src="image\tier 1.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</section>

<section>


</section>
</main>
</body>

<footer>
<?php
include("./includes/footer.php")
?>
</footer>
</html>