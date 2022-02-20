<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = $email = "";
$username_err = $password_err = $confirm_password_err = $email_err ="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT UserID FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "Этот email занят.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Что то пошло не так, повторите немного попозже.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT UserID FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Username is taken.";
                } elseif(strlen(trim($_POST["username"])) < 4){
                    $username_err = "Username must have atleast 4 characters.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "try again";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Enter password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Min 6 symbols.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "No match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_email, $param_password);
            
            // Set parameters
            $param_email = $email;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: logas.php");
            } else{
                echo "Error!";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="login/assets/css/styles.css">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel = "icon" href = "cake.png" type = "image/x-icon">
        <title>Login form responsive</title>  
    </head>
    <body>
        <div class="l-form">
            <div class="shape1"></div>
            <div class="shape2"></div>
            <div class="form">
                <img src="login/assets/img/authentication.svg" alt="" class="form__img">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <form action="" class="form__content">
                    <h1 class="form__title">Welcome</h1>

                    <div class="form__div form__div-one">
                        <div class="form__icon">
                            <i class='bx bx-user-circle'></i>
                        </div>
                        <div class="form__div-input">
                            <label for="" class="form__label"></label>
                    <div class="form__input <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>"><input class="form__input" value="<?php echo $email; ?>" type="email" name="email" placeholder="Email" required=""><span class="help-block"><?php echo $email_err; ?></span></div>
                    </div>
                    </div>

                    <div class="form__div form__div-one">
                        <div class="form__icon">
                            <i class='bx bx-user-circle'></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label"></label>
                            <div class="form__input <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>"><input class="form__input" value="<?php echo $username; ?>" type="text" name="username" placeholder="Username" required=""><span class="help-block"><?php echo $username_err; ?></span></div>
                        </div>
                    </div>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-lock' ></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label"></label>
                            <div class="form__input <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>"><input class="form__input" value="<?php echo $password; ?>" type="password" name="password" placeholder="Password" required=""><span class="help-block"><?php echo $password_err; ?></span></div>
                        </div>
                    </div>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-lock' ></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label"></label>
                            <div class="form__input <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>"><input class="form__input" value="<?php echo $confirm_password; ?>" type="password" name="confirm_password" placeholder="Confirm passsword" required=""><span class="help-block"><?php echo $confirm_password_err; ?></span></div>
                        </div>
                    </div>


                    <a href="logas.php" class="form__forgot">Not new here?</a>

                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Register</button></div>

                    <div class="form__social">
                        <span class="form__social-text">Social media</span>

                        <a href="https://twitter.com/?lang=ru" class="form__social-icon"><i class='bx bxl-facebook' ></i></a>
                        <a href="https://twitter.com/?lang=ru" class="form__social-icon"><i class='bx bxl-google' ></i></a>
                        <a href="https://twitter.com/?lang=ru" class="form__social-icon"><i class='bx bxl-instagram' ></i></a>
                    </div>
                </form>
            </div>

        </div>
        
        <script src="login/assets/js/main.js"></script>
        <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
    </body>
</html>