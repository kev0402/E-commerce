<?php 
    session_start();
    require_once('./includes/database-con.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account</title>
    <link rel="icon" href="./images/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>

<?php
  $fullname = $email = $user_name = $pass = $confirmPass = $error = $passError = null; 

  if (isset($_POST['continueButton'])) {
    $fullname = $_POST['full-name'];
    $email = $_POST['email'];
    $user_name = $_POST['user-name'];
    
      if (empty($fullname)) {
        $error = "Full Name cannot be empty!";
      } elseif (!preg_match("/^[a-zA-Z-']*$/",$fullname)) {
        $error = "Full Name must only contain letters!";
      }

      if (empty($email)) {
        $error = "Email cannot be empty!";
      } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format!";
      }

      if (empty($user_name)) {
        $error = "Username cannot be empty!";
      } elseif (strlen($user_name) < 8) {
        $error = "Username must have 8 characters or more";
      } elseif (strlen($user_name) > 20) {
        $error = "Username must not exceed 20 characters";
      }

      if (empty(trim($user_name)) && empty($fullname) && empty(trim($email))) {
        $error = "All fields cannot be empty!";
      }
      if ($error == null) {
        ?>
        <style>
            .personalFields {
              display: none;
            }
            .passwordFields {
              display: block;
            }
        </style>
      <?php
      }
    }

    if (isset($_POST['signupButton'])) {
      $pass = $_POST['pass_word'];
      $confirmPass = $_POST['confirmPassword'];
      $passHash = password_hash($pass, PASSWORD_DEFAULT);

      if ($pass !== $confirmPass) {
        $passError = "Passwords does not match!";
      }
      if (empty($pass)) {
        $passError = "Password cannot be empty!";
      }
      if (empty($confirmPass)) {
        $passError = "Confirm Password cannot be empty!";
      }
      if (empty($pass) || empty($confirmPass)) {
        $passError = "All fields cannot be empty!";
      }
      // else {
      //   $sql = "INSERT INTO account_tb(Full_Name, Email, Username, Password)
      //           VALUES (?, ?, ?, ?);";
      //   $stmt = mysqli_stmt_init($conn);
      //   $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
      //   header("Location: ./index.php");
      // }
    }

  if ($error != null) {
    ?> <style>.firstAlert{display: block;}</style> <?php    
  }
  if ($passError != null) {
    ?> 
      <style>
          .passAlert {
            display: block;
          }
          .passwordIcon {
            top: 21.5%;
          }
          .confirmpasswordIcon {
            top: 33.9%;
          }
      </style>
    <?php
  }

?>
<body>
  <main class="d-flex flex-row h-auto">
    <div>
      <img src="./images/shoe.jpg" alt="" style="height: 100vh; border-top-right-radius: .75rem; border-bottom-right-radius: .75rem;">
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="d-flex flex-column justify-content-center align-items-center mt-4 w-100">
      <div class="personalFields w-50">
        <h1 class="fw-bold">Create an Account</h1>
        <p class="fw-medium">Please fill out all required details</p>
        <div class="firstAlert alert alert-danger"><?php echo $error ?></div>
        <div>
          <div class="mt-3">
            <label for="fullname" class="mb-2 fw-semibold">Fullname</label>
            <input name="full-name" value="<?php echo $fullname ?>" type="text" class="form-control shadow-none p-3 fw-medium" id="fullname">
          </div>
          <div class="mt-4">
            <label for="email" class="mb-2 fw-semibold">Email</label>
            <input name="email" value="<?php echo $email ?>" type="text" class="form-control shadow-none p-3 fw-medium" id="email">
          </div>
          <div class="mt-4">
            <label for="username" class="mb-2 fw-semibold">Username</label>
            <input name="user-name" value="<?php echo $user_name ?>" type="text" class="form-control shadow-none p-3 fw-medium" id="username">
          </div>
        </div>
        <div>
          <button name="continueButton" class="btn btn-primary border border-0 rounded-pill w-100 mt-5 p-3" id="continueButton">Continue</button>
          <div>
            <p class="line mt-5 fw-semibold"><span>or Signup with</span></p> 
          </div>
            <div class="d-flex justify-content-around mt-4 gap-4">
              <button class="google btn d-flex align-items-center justify-content-center px-4 py-3 gap-3 rounded-3 fw-semibold" id="google">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
                <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                </svg>Google</button>
              <button class="fb btn d-flex align-items-center justify-content-center gap-3 rounded-3 fw-semibold" id="fb">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
                <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path><path fill="#fff" d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z"></path>
                </svg>Facebook</button>
            </div>
            <div class=" mt-5">
              <p class="text-center fw-semibold link-offset-2 link-underline link-underline-opacity-0"><a href="#" class="signup">Signup using Phone Number</a></p>
              <p class="text-center fw-semibold">Already have an account <a href="#" class="login"> Log In</a></p>
            </div>
        </div>
        </div>
        <div class="passwordFields w-50">
          <h1 class="fw-bold">Enter your Password</h1>
          <p class="fw-medium">Please input your password</p>
          <div>
            <div class="mt-4">
              <label for="pass" class="mb-2 fw-semibold">Password</label>
              <input name="pass_word" type="password" class="form-control shadow-none p-3 fw-medium" id="pass">
              <i class="passwordIcon fa-solid fa-lg fa-eye-slash" id="passVisibility"></i>   
            </div>
            <div class="mt-4">
              <label for="confirmPassword" class="mb-2 fw-semibold">Confirm Password</label>
              <input name="confirmPassword" type="password" class="form-control shadow-none p-3 fw-medium" id="confirmPass">
              <i class="confirmpasswordIcon fa-solid fa-lg fa-eye-slash" id="confirmpassVisibility"></i>  
            </div>
          </div>
          <div class="passAlert alert alert-danger mt-4"><?php echo $passError ?></div>
          <div class="fw-medium">
            <p class="linebreaker"></p>
            <p>Password must be a minimum of 8 characters with:</p>
            <ul>
              <li>at least one uppercase letter</li>
              <li>at least one lowercase letter</li>
              <li>at least one number</li>
              <li>at least one symbol</li>
            </ul>
          </div>
          <button name="signupButton" type="submit" class="btn btn-primary border border-0 rounded-pill w-100 mt-4 p-3" id="signupButton">Signup</button>
          <p class="loggingIn text-center fw-semibold">Already have an account <a href="#" class="login"> Log In</a></p>
        </div>
      </div>
      </form>
  </main>
</body>
  <script src="./bootstrap/js/bootstrap.min.js"></script>
  <script src="./script/signup.js"></script>
</html> 