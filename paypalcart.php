<?php
		include("./includes/functions.inc.php");
	?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
include("./includes/header.php");
?>
    <title>Home Page</title>
</head>

<body>
<?php include("./includes/navbar.php");  ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/minicart/3.0.5/minicart.min.js"></script>
<script> paypal.minicart.render(); </script>

<?php include("./includes/footer.php");  ?>
</body>
</html>