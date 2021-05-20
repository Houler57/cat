<?php
		include("./includes/functions.inc.php");
	?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
include("./includes/header.php");
?>
    <title>Pay with PayPal</title>
</head>

<body>
<?php include("./includes/navbar.php");  ?>

<script src="./js/exts/minicart-3.0.6/minicart.min.js"></script>
<script> paypal.minicart.render(); </script>

<?php include("./includes/footer.php");  ?>
</body>
</html>