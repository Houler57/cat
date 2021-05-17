<?php 

const USERS_PATH = "data/users.json";
const USER_STATS_PATH = 'data/user_stats.json';
const CATEGORIES_PATH = "data/categories.json";
const USER_INFO = 'user';
const DATE_FORMAT = 'd/m/Y';
const USER_DATA_PATH = 'data/userdata.json';

// Always call session_start.
session_start();

// --- Utils ----------------------------------------------------------------------------------
function readJsonFile($path) {
    $json = file_get_contents($path);
    return json_decode($json, true);
}

function updateJsonFile($data, $path) {
    $json = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($path, $json, LOCK_EX);
}

function displayValue($form, $name) {
    if(isset($form[$name])){
     echo 'value="' . htmlspecialchars($form[$name]) . '"';
    }
}



 
# this array holds the error messages for each input 
$errors = array();

# this function does the validation of the registration form and if all inputs are valid registers the user 
function registerUser($form) { 
    global $errors;
    # the form is valid initially if there is an invalid input it will be set to invalid 
    $is_valid = true;
    
    # the following if statements asses the validity of a given input using regex and other logic  
    $key = 'firstname';
    if(!isset($form[$key]) || preg_match('/^\s*$/', $form[$key]) === 1){
        $errors[$key] = 'First name is required.';
        $is_valid = false; 
    }

    $key = 'lastname';
    if(!isset($form[$key]) || preg_match('/^\s*$/', $form[$key]) === 1){
        $errors[$key] = 'Last name is required.';
        $is_valid = false; 
    }

    $key = 'email';
    if(!isset($form[$key]) || filter_var($form[$key], FILTER_VALIDATE_EMAIL) === false){
        $errors[$key] = 'Email is invalid.';
        $is_valid = false;
    }

    else if(checkuser($form[$key])){
        $errors[$key] = 'Email is already registered.';
        $is_valid = false;
    }

    $key = 'phone';
    if(!isset($form[$key]) || preg_match('/^(\+61|04|\+?614)[ ]?4?\d{2}[ ]?\d{3}[ ]?\d{3}$/', $form[$key]) !== 1){
        $errors[$key] = 'Phone number is invalid.';
        $is_valid = false;
    }
    
    $key = 'password';
    if(!isset($form[$key]) || preg_match('/^[A-Z](?=[a-zA-Z0-9]*[?!^][a-zA-Z0-9]*)[a-zA-Z!?^0-9]{4,}\d$/', $form[$key]) !== 1){
        $errors[$key] = 'Password start with a capital alphabet, must have at least 6 characters , must contain one of !, ^, & and  must end with a number.';
        $is_valid = false;
    }

    $key = 'confirmPassword';
    if(isset($form['password']) && (!isset($form[$key]) || $form['password'] !== $form[$key])){
        $errors[$key] = 'Passwords do not match.';
        $is_valid = false;
    }

    # if the submitted form is still a valid one, after it has been validated with the above if statements, the user is then registered into the system 
    if($is_valid) { 
        $user = [
            'firstname' => htmlspecialchars(trim($form['firstname'])),
            'lastname' => htmlspecialchars(trim($form['lastname'])),
            'email' => htmlspecialchars(trim($form['email'])),
            'phone' => htmlspecialchars(trim($form['phone'])),
            'password' => htmlspecialchars(trim($form['password'])),
        ];

        $usersdata = readJsonFile(USERS_PATH);

        # in the above array, which derived from the users.json file, the validated user account data is added, with the email being the key  

        $usersdata[$user['email']] = $user;
        // Update file.
        updateJsonFile($usersdata, USERS_PATH); 
        // Auto-login registered user.
        login(['username'=>$user['email'],'loginpassword'=>$user['password']]);
        //after logging in, it takes u to the home page
        header('Location: index.php');
    }
    return $is_valid;
} 
function displayError ($errormessages){
    global $errors;  
    if(isset($errors[$errormessages])){
      return $errors[$errormessages]; 
    }
}

function checkuser($email) {
    $usersdata = readJsonFile(USERS_PATH);
   return array_key_exists(strtolower($email), $usersdata);
}


function login($form) {
    global $errors;
    $is_valid = true;
    $key = 'username';
    $usersdata = readJsonFile(USERS_PATH);
    if(!isset($form[$key]) || !checkuser($form[$key])){
        $errors['username'] = 'Email not found. Make sure you have typed your email correctly.';
        $is_valid = false;
    }
   
    $key = 'loginpassword';
    if ($is_valid){
        
        
        if(!isset($form[$key]) || $form[$key]!== $usersdata[strtolower($form['username'])]['password']){
            $errors['loginpassword'] =  'Incorrect password. Try again.';
            $is_valid = false;
        }
    }
    if ($is_valid){
    
        $useremail = strtolower($form['username']);
        $_SESSION[USER_INFO]=  $usersdata[$useremail];
    }
    return $is_valid;
}
function logoutUser() {    
    unset($_SESSION[USER_INFO
]);
}
function checkloggedin(){
    return isset($_SESSION[USER_INFO
]);
}

?>