<?php
    include("./connection.php");
session_start();
// if (!isset($_SESSION['user'])) {
//     header("Location: ./Login.php");
// }

$ID =   $_SESSION['ID'];

if(isset($_POST['LogoBtn'])){
    header("Location: ./HomePage.php");
}

$ProductName = $Price = $ProductImage = "";






if(isset($_POST['cartButton'])){

    $var1 = mysqli_query($conn, "SELECT * FROM products WHERE Product_ID = $ID");
while ($row1 = mysqli_fetch_assoc($var1)) {

    $ProductName =  $row1["Product_Name"];

$Price = $row1["Regular_Price"];

$ProductImage = $row1["Product_Image"] ;



    $sq2l = "INSERT INTO cart_tb (Customer_ID, Cart_ID, Product_Name, Price, Product_Image)
    VALUES ('1', ' ','$ProductName', '$Price', '$ProductImage')";

if (mysqli_query($conn, $sq2l)) {
    $CartID = 1;

    $_SESSION['CartID'] = $CartID;

    header("Location: ./cart.php");
} else {
    echo "Error: " . $sq2l . "<br>" . mysqli_error($conn);
}

}



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
    <script src="./script/jquery.min.js"></script>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/product.css">
    <link rel="icon" href="./images/logo.png">
    <title>Product</title>
</head>

<body>
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
    <main class="d-flex flex-column justify-content-center align-items-center">

        <div class="productInfo d-flex flex-row mb-5 gap-5">

        <?php

$var = mysqli_query($conn, "SELECT * FROM products WHERE Product_ID = $ID");
while ($row = mysqli_fetch_assoc($var)) {


    $ProductName =  $row["Product_Name"];

    $Price = $row["Regular_Price"];

    $ProductImage = $row["Product_Image"] ;

?>

            <div class="">
                <img src="./Image/Dashboard/AddProduct Image/<?php echo $row["Product_Image"] ?>" width="500" height="500" alt="Placehold" class="header-image">
            </div>
            <div class="">
                <div class="productName d-flex flex-row align-items-center justify-content-between">
                    <h1 class="fw-bold fs-2"><?php echo $row["Product_Name"] ?></h1>
                    <i class="fav fa-solid fa-heart fa-xl" style="color: #989ea9;"></i>
                </div>
                <div class="reviews d-flex flex-row align-items-center  mt-2 gap-3">
                    <div class="stars" id="stars">
                        <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
                    </div>
                    <div>
                        <label class="fw-semibold" for="stars">3 Reviews</label>
                    </div>
                </div>
                <div class="productPrice mt-4">
                    <h2 class="fw-bold">₱<?php echo $row["Regular_Price"] ?></h2>
                </div>
                <div class="sizePicker mt-4 d-flex flex-row align-items-center">
                    <label for="sizes" class="fw-semibold me-4 fs-3">Size:</label>
                    <div class="sizes">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Small</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Medium</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                            <label class="form-check-label" for="inlineRadio3">Large</label>
                        </div>
                    </div>
                </div>
                <div class="quantity d-flex flex-row mt-4 align-items-center gap-3">
                    <div>
                        <h2 class="fw-semibold fs-4">Quantity:</h2>
                    </div>
                    <div class="qty-input rounded-4 px-3">
                        <button class="qty-count qty-count--minus" id="minus" data-action="minus" type="button">-</button>
                        <span class="product-qty d-flex align-items-center justify-content-center" id="quantity" name="product-qty">1</span>
                        <button class="qty-count qty-count--add" id="add" data-action="add" type="button">+</button>
                    </div>
                </div>
                <div class="colorPicker mt-4 d-flex flex-row align-items-center">
                    <label for="colors" class="fw-semibold fs-5">Color:</label>
                    <div class="colors">
                        <div class="form-check form-check-inline">
                            <input type="radio" class="btn-check" name="options-base" id="color1" autocomplete="off" checked>
                            <label class="btn" for="color1" id="firstColor">Red</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="btn-check" name="options-base" id="color2" autocomplete="off">
                            <label class="btn" for="color2" id="secondColor">Yellow</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="btn-check" name="options-base" id="color3" autocomplete="off">
                            <label class="btn" for="color3" id="thirdColor">Blue</label>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row gap-4">
                    <button name="buyButton" class="btn btn-primary border border-0 rounded-pill w-100 mt-5 p-3" id="buyButton">Buy Now</button>
                    <button name="cartButton" class="btn btn-primary border border-0 rounded-pill w-100 mt-5 p-3" id="cartButton">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="description w-50">
            <div class="desc my-5">
                <h3 class="fw-bold">Description</h3>
                <p class="mt-4" style="text-align: justify;"><?php echo $row["Product_Description"] ?></p>
            </div>
        </div>

        
        <?php

}



?>
        <div class="mt-5 w-50">
            <div>
                <h3 class="fw-bold">Reviews</h3>
            </div>
            <div class="reviews mt-5">
                <div class="userReview d-flex gap-5 my-3">
                    <div class="w-25">
                        <img src="https://picsum.photos/id/237/120/120" class="profilePicture rounded-circle">
                    </div>
                    <div class="name&Review mb-4">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <h4 class="fs-4 fw-semibold">Justin Balla</h4>
                            <div class="review" id="review">
                                <i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i>
                            </div>
                        </div>
                        <div>
                            <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolores est voluptatibus dicta, esse odit culpa quis dolorum distinctio, rem aut alias, accusamus sint. Eius rem dolores sint, optio maiores hic tempore, officiis necessitatibus dignissimos aperiam atque aspernatur cum esse eligendi. Rerum praesentium quam suscipit est laboriosam maxime doloremque amet.</p>
                        </div>
                    </div>
                </div>
                <div class="userReview d-flex gap-5 my-3">
                    <div class="w-25">
                        <img src="https://picsum.photos/id/30/120/120" class="profilePicture rounded-circle">
                    </div>
                    <div class="name&Review mb-4">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <h4 class="fs-4 fw-semibold">Dwayne dc</h4>
                            <div class="review" id="review">
                                <i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i>
                            </div>
                        </div>
                        <div>
                            <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolores est voluptatibus dicta, esse odit culpa quis dolorum distinctio, rem aut alias, accusamus sint. Eius rem dolores sint, optio maiores hic tempore, officiis necessitatibus dignissimos aperiam atque aspernatur cum esse eligendi. Rerum praesentium quam suscipit est laboriosam maxime doloremque amet.</p>
                        </div>
                    </div>
                </div>
                <div class="userReview d-flex gap-5 my-3">
                    <div class="w-25">
                        <img src="https://picsum.photos/id/69/120/120" class="profilePicture rounded-circle">
                    </div>
                    <div class="name&Review mb-4">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <h4 class="fs-4 fw-semibold">Judds Jude</h4>
                            <div class="review" id="review">
                                <i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i>
                                <i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i>
                            </div>
                        </div>
                        <div>
                            <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolores est voluptatibus dicta, esse odit culpa quis dolorum distinctio, rem aut alias, accusamus sint. Eius rem dolores sint, optio maiores hic tempore, officiis necessitatibus dignissimos aperiam atque aspernatur cum esse eligendi. Rerum praesentium quam suscipit est laboriosam maxime doloremque amet.</p>
                        </div>
                    </div>
                </div>
            </div>
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
<script src="./JS/product.js"></script>

</html>