<?php
		include("./includes/functions.inc.php");
	?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
include("./includes/header.php");
?>

<title>Product Listing</title>
</head>

<body>
    <?php
include("./includes/navbar.php");
?>
    <main>
        <div class="pt-3 my-3">
            <h1 class="mb-5 text-center">Subscribe</h1>
            <h2 class="mb-5 text-center">Choose from our three excellent value subscription plans:</h2>
            <div class="text-center d-flex justify-content-center" style="width:100;">
                <div style="position: relative;" class="col-lg-4 d-flex justify-content-center">
                    <div class="card text-center" style="min-height:45rem; max-width: 30rem;">
                        <img src="./image/tier 1.jpg" alt="Tier 1 Bundle Image" class="img-thumbnail">
                        <h3 class="my-3">Personal Pack</h3>

                        <section class="lead">
                            <p>In this tier the customer will receive</p>
                            <p class="my-0">1 ShineSmile toothbrush</p>
                            <p class="my-0">1 ShineSmile toothpaste 160gr</p>
                            <p class="mt-3 mb-5"> <b>Price:</b> $20 every 3 months</p>
                        </section>
                        <a style="position: absolute; bottom: 0; width:100%;" href="prod_desc_tier1.php"
                            type="button" class="rounded-0 btn btn-primary">Subscribe
                </a>
                    </div>
                </div>

                <div style="position: relative;" class="col-lg-4 d-flex justify-content-center">
                    <div class="card text-center" style="min-height:45rem; max-width: 30rem;">
                        <img src="./image/tier 2.jpg" alt="Tier 2 Bundle Image" class="img-thumbnail">
                        <h3 class="my-3">Couple Pack</h3>

                        <section class="lead">
                            <p> In this tier the customer will receive</p>
                            <p class="my-0"> 2 ShineSmile toothbrush </p>
                            <p class="my-0">1 ShineSmile toothpaste 200gr</p>
                            <p class="my-0"> 1 ShineSmile Mouthwash 500ml.</p>
                            <p class="mt-3 mb-5"> <b>Price:</b> $35 every 3 months</p>
                        </section>
                        <a style="position: absolute; bottom: 0; width:100%;" href="prod_desc_tier2.php"
                            type="button" class="rounded-0 btn btn-primary">Subscribe</a>
                    </div>
                </div>

                <div style="position: relative;" class="col-lg-4 d-flex justify-content-center">
                    <div class="card text-center" style="min-height:45rem; max-width: 30rem;">
                        <img src="./image/tier 3.jpg" alt="Tier 3 Bundle Image" class="img-thumbnail">
                        <h3 class="my-3">Family Pack</h3>

                        <section class="lead">
                            <p>This tier is the most cost-effective choice for large families</p>
                            <p class="my-0">5 ShineSmile toothbrush</p>
                            <P class="my-0">2 ShineSmile toothpaste 200gr</P>
                            <p class="my-0">1 ShineSmile Mouthwash 1000ml.</p>
                            <p class="mt-3 mb-5"> <b>Price:</b> $50 every 3 months</p>
                        </section>
                        <a style="position: absolute; bottom: 0; width:100%;" href="prod_desc_tier3.php"
                            type="button" class="rounded-0 btn btn-primary">Subscribe</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="m-5 p-5">

        </div>
    </main>
</body>

<footer>
    <?php
include("./includes/footer.php");
?>
</footer>

</html>