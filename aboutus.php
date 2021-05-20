<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="aboutus.css">

    <?php
include("./includes/header.php");
?>
<?php
		include("./includes/functions.inc.php");
	?>
</head>

<body>
    <?php  include("./includes/navbar.php");?>
    <main>
        <div class="shine">
            <h1>About Shine Smile</h1>
            <h5>We Provide Our Customers With The Best Dental Hygiene Products </h5>
        </div>
        <table>
            <tr>
                <th><img src="image/Toothbrush with logo with ingraving.png"></th>
                <th><img src="image/Toothbrush with logo.png"></th>
            </tr>
            <tr>
                <th>What We Do</th>
                <th>Why Shine Smile</th>
            </tr>
            <tr>
                <td>
                    <br />We Provide a tiered bundle of services made up of dental hygiene products
                    <br />which are cheaper than buying the products individually in commercial stores
                    <br />While at the same time, YOU are saving the environment!
                    <br />
                </td>
                <td>
                    <br />Our competitors do not offer tiered pricing of bundled products
                    <br />they only sell bamboo toothbrushes from the same manufacturer
                    <br />With Shine Smile, we also allow the customer to donate.
                    <br />
                </td>
            </tr>
        </table>
        </div>
    </main>
</body>

<footer>
    <?php
include("./includes/footer.php");
?>
</footer>

</html>