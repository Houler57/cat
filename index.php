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
    <main style="margin-top: 0;">
        <section>
            <div id="message-container" class="bg-secondary pt-5 pb-5">

                <div class="m-5 " id="homemessage" style=" width: 30%; max-height:100%;">

                    <h1>
                        Get your complete dental care package delivered to your door
                    </h1>


                    <a style="margin-top: 40%;" name="" id="" class="btn btn-danger" href="#"
                        role="button">Subscribe</a>
                </div>

                <div id="demo" class="m-5 pull-right carousel slide" data-ride="carousel"
                    style=" width: 30%; height: 30%;  ">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="bg-secondary active"></li>
                        <li data-target="#demo" data-slide-to="1" class="bg-secondary"></li>
                        <li data-target="#demo" data-slide-to="2" class="bg-secondary"></li>
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
                        <span class=" carousel-control-prev-icon"></span>
                    </a>
                    <a class=" carousel-control-next" href="#demo" data-slide="next">
                        <span class=" carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </section>

        <section id="home-description">

            <div style="width: 40%;" class="p-5">
                <h1 class="mb-5">What Is Shine Smile dental care Subscription Box?</h1>
                <p>With Shine Smile, you get the complete package for your overall dental care needs. You will have the
                    choice of selecting toothbrushes, tooth pastes, dental floss much more products, to your preference

                </p>

                <p> With higher tiers comes personalization, discounts, freebies, priority in service due to a larger
                    expectation of the package size and variety.
                    In lower tiers, samples of higher tier are also offered to further the desirability of a premium.
                    Pricing of bundled items has a degree in which larger bundles appear far much cheaper in the long
                    run over smaller bundles.
                    .</p>

            </div>
	            <div style="width: 40%;" class="p-5">
                <h1 class="mb-5">Why should you avoid plastic toothbrushes?</h1>
                <p>The plastic that comprises your toothbrush has also been found to negatively impact individuals with acute chemical sensitivities. The plastic of the toothbrush would burn your mouth and cause your mouth to swell, due to the trace amounts of chemicals leaching from the toothbrush twice a day.</p>

                <p> A recent study showed that most plastic products, including BPA (Bisphenol A) free products leach estrogenic chemicals when they are stressed.</p>
			    
	    <p>Many products are now labelled as BPA free (majority of plastic toothbrushes are) this has lured us into a false sense of security.  BPA free products often still contain phthalates which come from the family of plasticizers that keep your toothbrush bendy and as a side effect, leach estrogenic chemicals.</p>

            </div>
	<div style="width: 40%;" class="p-5">
                <h1 class="mb-5">How often should you change your toothbrush?</h1>
                <p>Dental professionals recommend changing your toothbrush about every three months, or as soon as the bristles are frayed. This is because toothbrush bristles get frayed and worn which minimises their effectiveness. Clinical research has shown that a new toothbrush can remove more plaque keeping your teeth clean and healthy. </p>
            </div>
        </section>
    </main>
</body>

<footer>
    <?php
include("./includes/footer.php")
?>
</footer>

</html>
