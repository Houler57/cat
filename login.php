<?php include("./includes/functions.inc.php");?>
<?php 
if(isset($_POST['login'])) {

    $is_valid = login($_POST);
    if($is_valid === true) {
        header('Location: index.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("./includes/header.php");?>
    <title>Log In</title>
</head>

<body>
    <?php include("./includes/navbar.php");?>
    <div class="container mt-5">
        <form method="POST">
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="username" aria-describedby="helpId"
                    <?php displayValue($_POST, 'username'); ?> placeholder="">
                <span id="helpId" class="form-text error"><?php echo displayError('username');?></span>
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="loginpassword" placeholder="">
                <span id="helpId" class="form-text error"><?php echo displayError('loginpassword');?></span>
            </div>
            <button type="submit" name="login" value="login" class="btn btn-primary">Login</button>
        </form>
    </div>
    <?php include("./includes/footer.php");?>
</body>

</html>