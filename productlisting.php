<!DOCTYPE html>
<html lang="en">

<head>
    <?php
include("./includes/header.php");
?>
<?php
		include("./includes/functions.inc.php");
	?>
</head>

<body>
    <?php
include("./includes/navbar.php");
?>
    <main>
    

        <div class="container pt-3 my-3">
            <div class="row">
                <div class="col-sm">
                    <div class="card text-center" style="width: 16rem;">
                        <img src="./image/tier 1.jpg" alt="Tier 1 Bundle Image" class="img-thumbnail">
                        <h3>Tier 1</h3>
                        <p class="text-muted">Our flagship and most suitable tiered bundle</p>
                        <a href="prod_desc_tier1.php" type="button" class="btn btn-primary">Choose Bundle 1</a>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="card text-center" style="width: 16rem;">
                        <img src="./image/tier 2.jpg" alt="Tier 2 Bundle Image" class="img-thumbnail">
                        <h3>Tier 2</h3>
                        <p class="text-muted">Tier 2 is most suitable for a small family</p>
                        <a href="prod_desc_tier2.php" type="button" class="btn btn-primary">Choose Bundle 2</a>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="card text-center" style="width: 16rem;">
                        <img src="./image/tier 3.jpg" alt="Tier 3 Bundle Image" class="img-thumbnail">
                        <h3>Tier 3</h3>
                        <p class="text-muted">This tier is the most cost-effective choice for large families</p>
                        <a href="prod_desc_tier3.php" type="button" class="btn btn-primary">Choose Bundle 3</a>
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