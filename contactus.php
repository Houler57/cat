<?php
		include("./includes/functions.inc.php");
	?> 
<!DOCTYPE html>
<html lang="en">
<head>
<?php
include("./includes/header.php");
?>
<title>Contact Us</title>
</head>

<body>
<?php
include("./includes/navbar.php");
?>
<main>

<div id="jumbo-header" class="jumbotron jumbotron-fluid mb-5">
        <div class="container-fluid">
            <div class="text-center contactinfo">
                <h1>Let's connect</h1>
                Address <br>
                <div> 101 Aye Street VIC 3000</div><br>
                Email <br>
                <div> customer-support@shinesmilebusiness.com.au</div><br>
                Phone <br>
                <div> 0123 456 789</div><br>
            </div>
        </div>
    </div>

    <div  class="container mt-5">
        <form action="" name="contact" id="contact">
        <div class="form-group">
                    <label for="">First name</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Last name</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                  <label for="">Address</label>
                  <input type="text" class="form-control" name="address" id="address" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                  <label for="">Your Inquiry</label>
                  <textarea class="form-control" name="yourinquiry" id="yourinquiry" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder=""> 
                </div>
                <div class="form-group mb-5">
                  <label for="">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary mb-5">Submit</button>
        </form>
    </div>

</main>
</body>

<footer>
<?php
include("./includes/footer.php")
?>
</footer>
</html>