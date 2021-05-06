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
            <div class="bg-secondary pt-5 pb-5" style=" width: 50%; height: 50%;  ">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="bg-danger active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="image\tier 1.jpg" alt="Los Angeles" width="1100" height="500">
                        </div>
                        <div class="carousel-item">
                            <img src="image\tier 2.jpg" alt="Chicago" width="1100" height="500">
                        </div>
                        <div class="carousel-item">
                            <img src="image\tier 1.jpg" alt="New York" width="1100" height="500">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class=" carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="bg-danger carousel-control-prev-icon"></span>
                    </a>
                    <a class=" carousel-control-next" href="#demo" data-slide="next">
                        <span class="bg-danger carousel-control-next-icon"></span>
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