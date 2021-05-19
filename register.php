<?php include("./includes/functions.inc.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
include("./includes/header.php");
?>
    <title>Register</title>
</head>
 


<?php
    if(isset($_POST['register'])) {
        $is_valid = registerUser($_POST); 
    }  
?>

    <body>
     <?php include("./includes/navbar.php");  ?>
        <main class="container py-5">
            <div id="rego-form" class="container">
                <h2 class="pb-4">REGISTER</h2>
                <form id="rego-form" method="post">
                    <div class="form-group">
                        <label>First name</label>
                        <input type="text" class="form-control" name="firstname" id="firstname"
                            aria-describedby="helpId" <?php displayValue($_POST, 'firstname'); ?> placeholder="">
                        <span id="helpId" class="form-text error"><?php echo displayError('firstname');?></span>
                    </div>
                    <div class="form-group">
                        <label>Last name</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" aria-describedby="helpId"
                            <?php displayValue($_POST, 'lastname'); ?> placeholder="">
                        <span id="helpId" class="form-text error"><?php echo displayError('lastname');?></span>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId"
                            <?php displayValue($_POST, 'email'); ?> placeholder="">
                        <span id="helpId" class="form-text error"><?php echo displayError('email');?></span>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" name="phone" id="phone" aria-describedby="helpId"
                            <?php displayValue($_POST, 'phone'); ?> placeholder="">
                        <span id="helpId" class="form-text error"><?php echo displayError('phone');?></span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="">
                        <span id="helpId" class="form-text error"><?php echo displayError('password');?></span>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="confirmPassword" id="confirmPassword"
                            placeholder="">
                        <span id="helpId" class="form-text error"><?php echo displayError('confirmPassword');?></span>
                    </div>
                    <button type="submit" name="register" value="register" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </main>
        <footer>
            <?php include("./includes/footer.php");  ?>
        </footer>
    </body>

</html>