<?php
session_start();
require_once('./includes/database-con.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating an Account</title>
    <link rel="icon" href="./images/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/dashboard_forms.css">
</head>
<?php
$email = $pass = $confirmPass = $alert = null;

if (isset($_POST['signupButton'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $confirmPass = $_POST['confirmPassword'];
    $pwd_hash = password_hash($pass, PASSWORD_DEFAULT);

    if (empty($email)) {
        $alert = "Email cannot be empty!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $alert = "Invalid Email format!";
    }

    if (empty($pass)) {
        $alert = "Password cannot be empty!";
    } elseif (strlen($pass) < 8) {
        $alert = "Password must have at least 8 characters long";
    }

    if (empty($confirmPass)) {
        $alert = "Confirm Password cannot be empty!";
    } elseif ($pass != $confirmPass) {
        $alert = "Passwords does not match!";
    }

    if (empty($email) && empty($pass) && empty($confirmPass)) {
        $alert = "All fields cannot be empty!";
    } else {
        $sql = "INSERT INTO administrators_tb(Email, Password)
                    VALUE (?, ?);";
        $stmt = mysqli_stmt_init($conn);
        $preparestmt = mysqli_stmt_prepare($stmt, $sql);

        if ($preparestmt) {
            mysqli_stmt_bind_param($stmt, "ss", $email, $pwd_hash);
            mysqli_stmt_execute($stmt);
        } else {
            die();
        }
    }
}

if ($alert != null) {
?>
    <style>
        .signupAlert {
            display: block;
        }

        #signupPasswordVisibility {
            top: 56%;
            left: 36.6%;
        }

        #signupConfirmPassVisibility {
            top: 68.6%;
            left: 36.6%;
        }
    </style>
<?php
}
?>

<body>
    <main class="d-flex flex-row w-100">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="d-flex flex-column justify-content-center align-items-center mt-4 w-100">
            <div class="personalFields w-50">
                <div class="d-flex align-items-center">
                    <img src="./images/logo.png" style="width: 5em;" alt="">
                    <h1 class="fw-bold">JSK Store Dashboard</h1>
                </div>
                <h2 class="fw-bold mt-4">Sign Up</h2>
                <div class="signupAlert alert alert-danger mt-4"><?php echo $alert ?></div>
                <div class="mt-4">
                    <div class="mt-4">
                        <label for="email" class="mb-2 fw-semibold">Email</label>
                        <input name="email" value="<?php echo $email ?>" type="text" class="emailField form-control shadow-none p-3 fw-medium" id="signupEmailField">
                    </div>
                    <div class="mt-4">
                        <label for="pass" class="mb-2 fw-semibold">Password</label>
                        <input name="pass" value="" type="password" class="passwordField form-control shadow-none p-3 fw-medium" id="signupPasswordField">
                        <i class="signupPasswordVisibility fa-solid fa-lg fa-eye-slash" id="signupPasswordVisibility"></i>
                    </div>
                    <div class="mt-4">
                        <label for="confirmPassword" class="mb-2 fw-semibold">Confirm Password</label>
                        <input name="confirmPassword" type="password" class="confirmPassField form-control shadow-none p-3 fw-medium" id="signupConfirmPassField">
                        <i class="signupConfirmPassVisibility fa-solid fa-lg fa-eye-slash" id="signupConfirmPassVisibility"></i>
                    </div>
                </div>
                <button name="signupButton" class="signupButton btn btn-danger border border-0 rounded-pill w-100 mt-5 p-3" id="signupButton">Signup</button>
                <p class="text-center fw-semibold link-offset-2 link-underline link-underline-opacity-0 mt-5">Already have an account? <a href="./dashboard-login.php" class="loginLink">Login</a></p>
            </div>
        </form>
        <div>
            <img src="./images/blurry-gradient-haikei.png" alt="" style="height: 100vh; border-top-left-radius: .75rem; border-bottom-left-radius: .75rem;">
        </div>
    </main>
</body>
<script src="./script/dashboard_forms.js"></script>
<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>

</html>