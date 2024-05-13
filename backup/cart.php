<?php
   include("./connection.php");

   session_start();
// if (!isset($_SESSION['user'])) {
//     header("Location: ./Login.php");
// }

if(isset($_POST['LogoBtn'])){
    header("Location: ./HomePage.php");
}

$CartID = $_SESSION['CartID'];

// ------------------------- DELETE PRODUCT BACKEND ------------------------------

$MainProductList = null;

$ProductListIcon = null;

$DeleteProductID = "";

$BodyHeight = "";

$BodyHidden = "";

$ModalShow = "";

$ModalShow2 = "";

if(isset($_POST['DeleteProductID'])){
    $DeleteProductID = $_POST['DeleteProductID'];

    $BodyHeight = "100vh";

    $BodyHidden = "hidden";

    $ModalShow = "flex";

}

if(isset($_POST['DeleteAll'])){

    $BodyHeight = "100vh";

    $BodyHidden = "hidden";

    $ModalShow2 = "flex";

}

if (isset($_POST['DeleteProduct'])) {

    $ID = $_POST['DeleteProduct'];


    $SelectProduct = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM cart_tb WHERE Cart_ID = $ID"));



    $Delete = mysqli_query($conn, "DELETE FROM cart_tb WHERE Cart_ID = $ID");

    if ($Delete) {
        echo '<div class="alert alert-success alert-dismissible fade show w-25" id="Alert" role="alert">
        <strong>Successfully Deleted!</strong> 
      </div>
      ';

        echo '<script>$("#Alert").fadeOut(4000);</script>';

    }
}

if (isset($_POST['DeleteAllProduct'])) {


    $Delete = mysqli_query($conn, "DELETE FROM cart_tb ");

    if ($Delete) {
        echo '<div class="alert alert-success alert-dismissible fade show w-25" id="Alert" role="alert">
        <strong>Successfully Deleted All!</strong> 
      </div>
      ';

        echo '<script>$("#Alert").fadeOut(4000);</script>';

    }
}

if(isset($_POST['checkoutButton'])){
    header("Location: ./Checkout.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Cart</title>

    <link rel="icon" href="./images/logo.png">
    <link rel="stylesheet" href="./CSS/cart.css">
</head>

<body style="height:<?php echo $BodyHeight ?> ; overflow:<?php echo $BodyHidden ?>">
<form action="" method="post" enctype="multipart/form-data">
    <header>
        <div class="NavigationBar">
        <button class="LogoBtn" name="LogoBtn">
            <div class="NameLogo">
                <img src="./images/logo.png" alt="">
                <label for="">JSK Store</label>
            </div>
            </button>
            <div class="SearchContainer">
                <input type="text" placeholder="Search..." class="form-control" id="SearchInput">
                <i class="fa-solid fa-magnifying-glass" id="SearchButton"></i>
            </div>
            <div class="NavigationBarIcons">
                <i class="fa-solid fa-bell fa-lg"></i>
                <i class="fa-solid fa-cart-shopping fa-lg"></i>
                <img src="./Image/AdsImage/account_circle.png" alt="" id="UserAccountCircle">
            </div>
        </div>
        <div class="AccountMenu" id="AccountMenuModal">
            <div class="AccountContainer">
                <div class="UserContainer">
                    <img src="./Image/Reviewer IMG/1641386961385.jpg" alt="" id="UserProfile">
                    <div class="UserName">
                        <label for="" id="UserLogInName">Mr. Pro</label>
                        <label for="" id="UserFullname">The Goat</label>
                    </div>
                </div>
                <i class="fa-solid fa-chevron-right" id="UserEditAccount"></i>
            </div>
            <div class="AccountContainer2">
                <div class="MyOrder">
                    <i class="fa-solid fa-clock-rotate-left fa-lg"></i>
                    <label for="" class="fw-semibold">My Orders</label>
                </div>
                <div class="MyFavorites">
                    <i class="fa-solid fa-heart fa-lg"></i>
                    <label for="" class="fw-semibold">My Favorites</label>
                </div>
                <div class="Settings">
                    <i class="fa-solid fa-gear fa-lg"></i>
                    <label for="" class="fw-semibold">Settings</label>
                </div>
            </div>
            <button onclick="redirect()" id="LogOutBtn" class="fw-bold">Log Out</button>
            <script>
                function redirect() {
                    window.location.href = "./includes/log-out.php";
                }
            </script>
        </div>
    </header>

    <div style="display:<?php echo $ModalShow ?> ;" id="DeleteProductConfirmation"> <!-- Delete Confirmation Modal -->
                                 
                                 <div  id="confirm">

                                     <div class="modal-header border-0">
                                         <h4 class="modal-title  w-100 text-center text-black">Confirmation</h4>
                                     </div>

                                     <div class="modal-body w-100 text-center text-black ">
                                         Are You Sure? <br> You want to delete this cart ID <?php echo $DeleteProductID ?> ?
                                     </div>

                                     <div class="modal-footer w-100 justify-content-around border-0">
                                         <button name="DeleteProduct" value="<?php echo $DeleteProductID ?>" class="btn btn-success mx-2">Save</button>
                                         <button class="btn btn-outline-danger" name="ConfirmCancel" >Close</button>
                                     </div>

                                 </div>
                             </div>

                             <div style="display:<?php echo $ModalShow2 ?> ;" id="DeleteAllConfirmation"> <!-- Delete Confirmation Modal -->
                                 
                                 <div  id="confirm2">

                                     <div class="modal-header border-0">
                                         <h4 class="modal-title  w-100 text-center text-black">Confirmation</h4>
                                     </div>

                                     <div class="modal-body w-100 text-center text-black ">
                                         Are You Sure? <br> You want to delete it all?
                                     </div>

                                     <div class="modal-footer w-100 justify-content-around border-0">
                                         <button name="DeleteAllProduct" class="btn btn-success mx-2">Save</button>
                                         <button class="btn btn-outline-danger" name="ConfirmCancel" >Close</button>
                                     </div>

                                 </div>
                             </div>


    <main class="container">
        <div class="row gap-5 d-flex align-items-start">
            <div class="col d-flex flex-column justify-content-between align-items-center w-50" >
                <div class="d-flex flex-row align-items-center justify-content-between gap-5 w-100">
                    <h1 class="fw-bold fs-2">My Cart</h1>
                    <button name="DeleteAll" class="LogoBtn"><i class="fa-solid fa-trash fa-lg"></i></button>
                </div>

                <div id="Cart">
                                    <?php

                   

                            $var = mysqli_query($conn, "SELECT * FROM cart_tb WHERE Customer_ID = $CartID");
                            while ($row = mysqli_fetch_assoc($var)) {
      
                            ?>

                <div class="cart d-flex flex-row m rounded-3 w-100 gap-5">
                    <img src="./Image/Dashboard/AddProduct Image/<?php echo $row["Product_Image"] ?>" width="200" height="200" alt="Placehold" class="header-image">
                    <div class="w-100">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <h2 class="fs-4 fw-semibold"><?php echo $row["Product_Name"] ?></h2>
                            <button name="DeleteProductID" class="LogoBtn" value="<?php echo $row["Cart_ID"] ?>"><i class="fa-solid fa-trash fa-lg"></i></button>
                        </div>
                        <div class="d-flex align-items-center gap-4 mt-3">
                            <h2 class="fw-bold mt-4 fs-3">₱<?php echo $row["Price"] ?></h2>
                            <h2 class="fw-bold mt-4 fs-4">Qty: <span>1</span></h2>
                        </div>
                        <div class="d-flex flex-row mt-5 gap-4">
                            <h3 class="fs-5 fw-semibold">Size: <span class="fw-bold">L</span></h3>
                            <h3 class="fs-5 fw-semibold">Color: <span class="fw-bold">Stripe</span></h3>
                        </div>
                    </div>
                </div>

                                    <?php

                            }


                            $var2 = mysqli_query($conn, "SELECT SUM(Price) as Total FROM cart_tb WHERE Customer_ID = $CartID");
                            while ($row2 = mysqli_fetch_assoc($var2)) {


                            ?>

</div>
            </div>

            
            <div class="col w-50  d-flex justify-content-center">
                
                <div class="orderDetails d-flex flex-column rounded-3 w-75">
                    <div class="userLocation">
                        <h3 class="fw-bold fs-4">Location</h3>
                        <p>Albay, Santo Domingo, San Isidro</p>
                        <hr class="lineBreaker1">
                    </div>
                    <div class="orderSummary mt-2">
                        <h3 class="fw-bold fs-4">Order Summary</h3>
                        <div class="subtotal d-flex flex-row justify-content-between align-items-center mt-4">
                            <h4 class="fs-5 fw-semibold">Subtotal</h4>
                            <label class="fs-5 fw-bold" for="">₱<?php echo $row2["Total"] ?></label>
                        </div>
                        <div class="shippingFee d-flex flex-row justify-content-between align-items-center mt-4">
                            <h4 class="fs-5 fw-semibold">Shipping Fee</h4>
                            <label class="fs-5 fw-bold" for="">₱0</label>
                        </div>
                        <hr class="lineBreaker2">
                        <div class="vat d-flex flex-row justify-content-between align-items-center mt-4">
                            <h4 class="fs-5 fw-semibold">Sub Total: <span style="color: gray;">(Vat Included)</span></h4>
                            <label class="fs-5 fw-bold" for="">₱<?php echo $row2["Total"] ?></label>
                        </div>
                        <button name="checkoutButton" class="btn btn-primary border border-0 rounded-4 w-100 mt-5 p-3" id="checkoutButton" >Proceed to Checkout</button>
                    </div>
                </div>
            </div>


                                                <?php

                            }



                            ?>
        </div>
    </main>
    <footer class="productpageFooter">
        <div class="Newsletter">
            <label for="" class="fw-bold">Sign up our Newsletter</label>
            <div class="Subscibe">
                <input type="text" id="SubscribeInput" class="form-control shadow-none">
                <button id="SubscribeBtn">Subscribe</button>
            </div>
            <div class="PlatformIcons gap-4">
                <i class="fa-brands fa-facebook fa-2xl"></i>
                <i class="fa-brands fa-square-instagram fa-2xl"></i>
                <i class="fa-brands fa-square-x-twitter fa-2xl"></i>
            </div>
        </div>
        <div class="ServiceAndDetails">
            <div class="CustomerService">
                <label for="" class="FooterTitles fw-bold mb-3">Customer Service</label>
                <label for="" class="fw-medium">Delivery & Return</label>
                <label for="" class="fw-medium">Customer Service</label>
                <label for="" class="fw-medium">Track Order</label>
            </div>
            <div class="MoreDetails">
                <label for="" class="FooterTitles fw-bold mb-3">More Details</label>
                <label for="" class="fw-medium">Terms & Condition</label>
                <label for="" class="fw-medium">Privacy Policy</label>
                <label for="" class="fw-medium">Products info</label>
            </div>
        </div>
        <div class="Copyright">
            <label for="" class="fw-bold">&copy; JSK Store. All rights reserved</label>
        </div>
    </footer>

</form>

</body>
<script src="./bootstrap/js/bootstrap.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
<script src="./JS/jquery.min.js"></script>
<script>
    let UserAccountCircle = document.getElementById('UserAccountCircle');
    let AccountMenuModal = document.getElementById('AccountMenuModal');
    let on = 0;

    document.getElementById('UserAccountCircle').addEventListener("click", function() {
        if (on == 0) {

            AccountMenuModal.style.display = 'flex';
            on = 1;

        } else {
            $("#AccountMenuModal").fadeOut("slow");
            on = 1 * 0;
        }
    })
</script>

</html>