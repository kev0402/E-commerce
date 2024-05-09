<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="./styles/forms.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <title>Forgot Password</title>
</head>
<body>
<main class="d-flex flex-row h-auto">
        <div id="carousel" class="carousel slide w-50" data-bs-ride="carousel">
            <img src="./images/blurry-gradient-haikei.png" alt="" style="height: 100vh; border-top-left-radius: .75rem; border-bottom-left-radius: .75rem;">
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="d-flex flex-column justify-content-center align-items-center mt-4 w-100">
            <div class="w-50">
                <h1 class="fw-bold mb-3">Forgot Password</h1>
                <p class="fw-medium mb-4">Please enter the email address you’d like your password reset information sent to </p>
                <div class="firstAlert alert alert-danger"><?php echo $alert ?></div>
                <div>
                    <div>
                        <label for="email" class="mb-3 fw-semibold">Email</label>
                        <input name="email" value="" type="text" class="form-control shadow-none p-3 fw-medium" id="email">
                    </div>
                </div>
                <div>
                    <button name="loginButton" class="btn btn-primary border border-0 rounded-pill w-100 mt-5 p-3" id="loginButton">Continue</button>
                </div>
            </div>
        </form>
    </main>
</body>
<script src="./bootstrap/js/bootstrap.min.js"></script>
<script src="./script/signup.js"></script>
</html>