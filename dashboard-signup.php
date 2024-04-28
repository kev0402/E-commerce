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
    <link rel="stylesheet" href="./styles/dashboard.css">
</head>
<?php
    $firstname = $lastname = $email = $pass = $alert = null;

    if (isset($_POST['signupButton'])) {
        $firstname = $_POST['first-name'];
        $lastname = $_POST['last-name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $pwd_hash = password_hash($pass, PASSWORD_DEFAULT);


        if (empty($firstname) || empty($lastname) || empty($email) || empty($pass)) {
            $alert = "All fields cannot be empty!";
        } elseif (!preg_match("/^[a-zA-Z-']*$/",$firstname)) {
            $alert = "First Name must contain letters only!";
        } elseif (!preg_match("/^[a-zA-Z-']*$/",$lastname)) {
            $alert = "Last Name must contain letters only!";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $alert = "Invalid Email format!";
        } elseif (strlen($pass) < 8) {
            $alert = "Password must have at least 8 characters long";
        } else {
            $sql = "INSERT INTO accounts_tb(First_Name, Last_Name, Email, Password)
                    VALUE (?, ?, ?, ?);";
            $stmt = mysqli_stmt_init($conn);
            $preparestmt = mysqli_stmt_prepare($stmt, $sql);

            if ($preparestmt) {
                mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $email, $pwd_hash);
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
                .passwordVisibility {
                    top: 68.7%;
                    left: 36.6%;
                }
            </style>
        <?php
    }
?>
<body>
    <main class="d-flex flex-row w-100">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="d-flex flex-column justify-content-center align-items-center mt-4 w-100">
            <div class="personalFields w-50">
                <div class="d-flex align-items-center">
                    <img src="./images/logo.png" style="width: 5em;" alt="">
                    <h1 class="fw-bold">JSK Store Dashboard</h1>
                </div>
                    <h2 class="fw-bold mt-4">Sign Up</h2>
                    <div class="signupAlert alert alert-danger mt-4"><?php echo $alert ?></div>
                <div class="mt-4">
                    <div class="d-flex justify-content-between mt-3 gap-5">
                        <div>
                            <label for="firstname" class="mb-2 fw-semibold">First Name</label>
                            <input name="first-name" value="<?php echo $firstname ?>" type="text" class="form-control shadow-none p-3 fw-medium" id="firstname">
                        </div>
                        <div>
                            <label for="lastname" class="mb-2 fw-semibold">Last Name</label>
                            <input name="last-name" value="<?php echo $lastname ?>" type="text" class="form-control shadow-none p-3 fw-medium" id="lastname">
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="email" class="mb-2 fw-semibold">Email</label>
                        <input name="email" value="<?php echo $email ?>" type="text" class="form-control shadow-none p-3 fw-medium" id="email">
                    </div>
                    <div class="mt-4">
                        <label for="pass" class="mb-2 fw-semibold">Password</label>
                        <input name="pass" value="" type="password" class="passwordField form-control shadow-none p-3 fw-medium" id="password">
                        <i class="passwordVisibility fa-solid fa-lg fa-eye-slash" id="passwordVisibility"></i> 
                    </div>
                </div>
                <button name="signupButton" class="signupButton btn btn-danger border border-0 rounded-pill w-100 mt-5 p-3" id="signupButton">Signup</button>
                <p class="text-center fw-semibold link-offset-2 link-underline link-underline-opacity-0 mt-5">Already have an account? <a href="#" class="loginLink">Login</a></p>
            </div>
        </form>
        <div>
            <img src="./images/blurry-gradient-haikei.png" alt="" style="height: 100vh; border-top-left-radius: .75rem; border-bottom-left-radius: .75rem;">
        </div>
    </main>
</body>
<script src="./script/dashboard.js"></script>
</html>