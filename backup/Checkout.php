<?php
    include("./connection.php");
session_start();
// if (!isset($_SESSION['user'])) {
//     header("Location: ./Login.php");
// }
$CartID = $_SESSION['CartID'];

if(isset($_POST['LogoBtn'])){
    header("Location: ./HomePage.php");
}

if(isset($_POST['HomeBtn'])){
    header("Location: ./HomePage.php");
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
    <script src="./JS/jquery.min.js"></script>
    <script src="./JS/bootstrap.js"></script>
    <script src="./JS/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/bootstrap.css">
    <link rel="stylesheet" href="./CSS/checkout.css">
    <title>Checkout</title>
    <link rel="icon" href="./images/logo.png">
</head>

<body>

<form action="" method="post" enctype="multipart/form-data">
<div class="MainBody">
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

   
    <div class="UserCheckoutInfo">

                <label for="">Checkout</label>

                <div class="UserInfoContainer">

                <button class="editbtn"><img src="./Image/checkout/edit.png" alt=""></button>

                    <div class="userInfo">

                            <div class="NameNumber">

                                <label for="">Juan</label>

                                <label for="">09124671246</label>

                            </div>

                            <label for="" class="address">Purok 1, 123 Albay, Santo Domingo, San Isidro</label>

                            <button class="HomeBtn" name="HomeBtn">Home</button>

                    </div>


                </div>

    </div>

    <div class="Packages">

    <div class="packagelabel">

    <label for="">Packages</label>

    </div>



        <div class="PackagesCheckoutInfo">

                                                    <?php

                   

                            $var = mysqli_query($conn, "SELECT * FROM cart_tb WHERE Customer_ID = $CartID");
                            while ($row = mysqli_fetch_assoc($var)) {
      
                            ?>


                <div class="PackageContainer">

                    <div class="Product">

                        <img src="./Image/Dashboard/AddProduct Image/<?php echo $row["Product_Image"] ?>" alt="">

                        <div class="ProductInfo">

                        <div class="ProductName">

                        <label for=""><?php echo $row["Product_Name"] ?></label>

                        </div>

                        
                        <div class="ProductPrice">

                        <label for="">₱<?php echo $row["Price"] ?></label>

                        </div>

                            <div class="SizeColQty">

                                <label for="">Size: L</label>

                                <label for="">Color: Black</label>

                                <label for="">Qty: 1</label>

                            </div>

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
    


    <div class="PaymentContainer">

            <div class="PaymentInfo">

                <div class="PaymentMethod">

                    <label for="">PaymentMethod</label>

                    <img src="./Image/checkout/arrow_forward_ios.png" alt="">

                </div>

                <div class="CashOrCard">

                    <div class="CardPayment">

                        <div class="CardInfo">

                            <img src="./Image/checkout/Mastercard.png" alt="">

                            <label for="">Credit/Debit Card</label>

                        </div>

                            <div class="cardnumber">

                                    <label for="">**** **** **** 1234</label>

                            </div>

                    </div>

                        <div class="CashPayment">

                        <div class="CashInfo">

                            <img src="./Image/checkout/payments.png" alt="">

                            <label for="">Cash on Delivery</label>

                        </div>

                            <div class="cashdesc">

                                    <label for="">Pay when you receive</label>

                            </div>

                    </div>


                </div>


                <div class="OrderSummary">

                    <label for="">Order Summary</label>
                    
                    <div class="OrderSummaryInfo">

                        <label for="">Subtotal(1 Items)</label>

                        <label for="">₱<?php echo $row2["Total"] ?></label>

                    </div>                   
                    
                    <div class="OrderSummaryInfo">

                        <label for="">Vouchers</label>

                        <label for=""><u>View Vouchers</u></label>

                    </div>                   
                    
                    <div class="OrderSummaryInfo">

                        <label for="">Shipping Fee</label>

                        <label for="">₱0</label>

                    </div>
                    

                </div>

                <div class="Totalpayment">

                    <label for="">Total (VAT Included):</label>

                    <label for="">₱<?php echo $row2["Total"] ?></label>

                </div>

                <button class="Placeorderbtn">Place Order</button>
                

            </div>

    </div>

    <?php

}



?>

    </form>


    <div class="HomePageFooter">
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
    </div>
    </div>
</body>

<script src="./bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./script/HomePage.js"></script>

</html>