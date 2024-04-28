<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="icon" href="./images/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/dashboard_login.css">
</head>
<body>
<main class="d-flex flex-row w-100">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="d-flex flex-column justify-content-center align-items-center mt-4 w-100">
            <div class="personalFields w-50">
                <div class="d-flex align-items-center">
                    <img src="./images/logo.png" style="width: 5em;" alt="">
                    <h1 class="fw-bold">JSK Store Dashboard</h1>
                </div>
                    <h2 class="fw-bold mt-4">Log In</h2>
                    <div class="loginAlert alert alert-danger mt-4"></div>
                    <div class="mt-5">
                        <label for="email" class="mb-2 fw-semibold">Email</label>
                        <input name="email" value="" type="text" class="form-control shadow-none p-3 fw-medium" id="email">
                    </div>
                    <div class="mt-4">
                        <label for="pass" class="mb-2 fw-semibold">Password</label>
                        <input name="pass" value="" type="password" class="passwordField form-control shadow-none p-3 fw-medium" id="password">
                        <i class="passwordVisibility fa-solid fa-lg fa-eye-slash" id="passwordVisibility"></i> 
                    </div>
                <button name="loginButton" class="loginButton btn btn-danger border border-0 rounded-pill w-100 mt-5 p-3" id="loginButton">Login</button>
                <p class="text-center fw-semibold link-offset-2 link-underline link-underline-opacity-0 mt-5">Don't have an account? <a href="./dashboard-signup.php" class="signupLink">Sign Up</a></p>
            </div>
        </form>
        <div>
            <img src="./images/blurry-gradient-haikei.png" alt="" style="height: 100vh; border-top-left-radius: .75rem; border-bottom-left-radius: .75rem;">
        </div>
    </main>
    <script src="./script/dashboard.js"></script>
</body>
</html>