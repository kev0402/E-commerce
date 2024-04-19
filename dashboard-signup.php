<?php
    session_start();
    require_once('./includes/database-con.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Sign-Up</title>
    <link rel="icon" href="./images/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/dashboard.css">
</head>
<body>
    <main class="d-flex flex-row w-100">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="d-flex flex-column justify-content-center align-items-center mt-4 w-100">
            <div class="personalFields w-50">
                    <h1 class="fw-bold">JSK Store Dashboard</h1>
                    <h2 class="mt-4">Sign Up</h2>
                    <div class="error alert alert-danger"></div>
                <div class="mt-5">
                    <div class="d-flex mt-3 gap-5">
                        <div>
                            <label for="firstname" class="mb-2 fw-semibold">First Name</label>
                            <input name="full-name" value="" type="text" class="form-control shadow-none p-3 fw-medium" id="firstname">
                        </div>
                        <div>
                            <label for="lastname" class="mb-2 fw-semibold">Last Name</label>
                            <input name="full-name" value="" type="text" class="form-control shadow-none p-3 fw-medium" id="lastname">
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="email" class="mb-2 fw-semibold">Email</label>
                        <input name="email" value="" type="text" class="form-control shadow-none p-3 fw-medium" id="email">
                    </div>
                    <div class="mt-4">
                        <label for="pass" class="mb-2 fw-semibold">Password</label>
                        <input name="pass" value="" type="password" class="form-control shadow-none p-3 fw-medium" id="password">
                    </div>
                </div>
                <button name="continueButton" class="btn btn-primary border border-0 rounded-pill w-100 mt-5 p-3" id="continueButton">Continue</button>
                <p class="text-center fw-semibold link-offset-2 link-underline link-underline-opacity-0 mt-5">Already have an account? <a href="#" class="signup">Login</a></p>
            </div>
        </form>
        <div>
            <img src="./images/shoe.jpg" alt="" style="height: 100vh; border-top-left-radius: .75rem; border-bottom-left-radius: .75rem;">
        </div>
</body>
</html>