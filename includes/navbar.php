<nav class="navbar navbar-expand-sm bg-info navbar-dark pt-5 pb-3">
    <span style="margin-right :10rem;"><img style="max-width: 70px;" src="./image/Shinesmile logo.png"
            alt="Shinesmile Logo"></span>
    <ul class="navbar-nav">

        <li class="nav-item active">
            <a class=" nav-link  text-white  " href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class=" nav-link  text-white  " href="./productlisting.php">Products</a>
        </li>
        <li class="nav-item">
            <a class=" nav-link  text-white  " href="./aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
            <a class=" nav-link  text-white  " href="./contactus.php">Contact Us</a>
        </li>

        <?php
                 if(!checkloggedin()){
                 ?>
        <li class="nav-item">
            <a class=" nav-link text-white  " href="login.php">Log in</a>
        </li>
        <li class="nav-item">
            <a class=" nav-link text-white  " href="register.php">Register</a>
        </li>
        </div>
        <?php 
                 }
                 else {?>

        <li class="nav-item">
            <a href="logout.php" class=" nav-link text-white  ">Logout</a>
        </li>
        <?php } ?>

		<li class="nav-item">
			<a class="nav-link text-white" href="./sitemap.php">Sitemap</a>
		</li>

		<li class="nav-item">
			<a class="nav-link text-white" href="./shoppingcart.php">Cart</a>
		</li>
    <?php
                 if(checkloggedin()){?>

    <span class=" nav-link  text-white    text-warning">Hello, <?php  echo $_SESSION[USER_INFO]["firstname"]?></span>
    </div>
    <?php  }
        ?>
    </ul>
</nav>
