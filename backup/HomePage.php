<?php
    include("./connection.php");
session_start();
// if (!isset($_SESSION['user'])) {
//     header("Location: ./Login.php");
// }

if(isset($_POST['LogoBtn'])){
    header("Location: ./HomePage.php");
}


if(isset($_POST['PopularProduct'])){

    $PopularID = $_POST['PopularProduct'];

    $_SESSION['ID'] = $PopularID;

    header("Location: ./product.php");
    
}

if(isset($_POST['NewArrivalBtn'])){

    $NewArrivalID = $_POST['NewArrivalBtn'];

    $_SESSION['ID'] = $NewArrivalID;

    header("Location: ./product.php");
    
}

if(isset($_POST['Shirt'])){

    $Categ = "Shirt";

    $_SESSION['Category'] = $Categ;

    header("Location: ./Category.php");
    
}

if(isset($_POST['Pants'])){

    $Categ = "Pants";

    $_SESSION['Category'] = $Categ;

    header("Location: ./Category.php");
    
}

if(isset($_POST['Jacket'])){

    $Categ = "Jacket";

    $_SESSION['Category'] = $Categ;

    header("Location: ./Category.php");
    
}

if(isset($_POST['Dress'])){

    $Categ = "Dress";

    $_SESSION['Category'] = $Categ;

    header("Location: ./Category.php");
    
}

if(isset($_POST['Shorts'])){

    $Categ = "Shorts";

    $_SESSION['Category'] = $Categ;

    header("Location: ./Category.php");
    
}

if(isset($_POST['Hats'])){

    $Categ = "Hats";

    $_SESSION['Category'] = $Categ;

    header("Location: ./Category.php");
    
}

if(isset($_POST['Shoes'])){

    $Categ = "Shoes";

    $_SESSION['Category'] = $Categ;

    header("Location: ./Category.php");
    
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
    <link rel="stylesheet" href="./CSS/HomePage.css">
    <title>Home Page</title>
    <link rel="icon" href="./images/logo.png">
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
    <div class="HomePagePromo">
        <div class="Trending container-fluid">
            <div class="TrendingImageList">
                <div class="item">
                    <img src="./Image/AdsImage/Summersale.jpg" alt="">
                </div>
                <div class="item">
                    <img src="./Image/AdsImage/GenshinInpired.jpg" alt="">
                </div>
                <div class="item">
                    <img src="./Image/AdsImage/animeinspired.jpg" alt="">
                </div>
            </div>
            <div class="buttons">
                <button id="prev">
                </button>
                <button id="next">></button>
            </div>
            <ul class="dots">
                <li class="auto"></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
    <div class="Categories container-fluid">
        <div class="CategoriesName my-3 ">
            <h1 class="fw-bold mb-4">Categories</h1>
        </div>
        <div class="CategoryRow">
            <div class="CategoryButtonCenter">
                <div class="CategoriesButtons">
                    <div class="CategoryLeftButton">
                    </div>
                    <div class="ExtendedCategories">
                        <button class="TransparentBtn" name="Shirt" >
                        <div class="CategoryContainer ">
                            <div class="CategoryImage" id="CategoryShirt">
                                <img src="./images/shirts.png" class="img-fluid rounded-circle" style="height: 10em; width: 10em; object-fit: cover;" alt="">
                            </div>
                            <div>
                                <h1 class="C my-4">Shirts</h1>
                            </div>
                        </div>
                        </button>
                        <button class="TransparentBtn" name="Pants" >
                        <div class="CategoryContainer ">
                            <div class="CategoryImage" id="CategoryPants">
                                <img src="./images/pants.png" class="img-fluid rounded-circle" style="height: 10em; width: 10em; object-fit: cover;" alt="">
                            </div>
                            <div>
                                <h1 class="C my-4">Pants</h1>
                            </div>
                        </div>
                        </button>
                        <button class="TransparentBtn" name="Jacket" >
                        <div class="CategoryContainer">
                            <div class="CategoryImage" id="CategoryJacket">
                                <img src="./images/jackets.png" class="img-fluid rounded-circle" alt="">
                            </div>
                            <div>
                                <h1 class="C my-4">Jackets</h1>
                            </div>
                        </div>
                        </button>
                        <button class="TransparentBtn" name="Dress" >
                        <div class="CategoryContainer">
                            <div class="CategoryImage" id="CategoryDress">
                                <img src="./images/dress.png" class="img-fluid rounded-circle" alt="">
                            </div>
                            <div>
                                <h1 class="C my-4">Dress</h1>
                            </div>
                        </div>
                        </button>
                        <button class="TransparentBtn" name="Shorts" >
                        <div class="CategoryContainer">
                            <div class="CategoryImage" id="CategoryShort">
                                <img src="./images/shorts.png" class="img-fluid rounded-circle" alt="">
                            </div>
                            <div>
                                <h1 class="C my-4">Shorts</h1>
                            </div>
                        </div>
                        </button>
                        <button class="TransparentBtn" name="Hats" >
                        <div class="CategoryContainer">
                            <div class="CategoryImage" id="CategoryHat">
                                <img src="./images/hats.png" class="img-fluid rounded-circle" alt="">
                            </div>
                            <div>
                                <h1 class="C my-4">Hats</h1>
                            </div>
                        </div>
                        </button>
                        <button class="TransparentBtn" name="Shoes" >
                        <div class="CategoryContainer">
                            <div class="CategoryImage" id="CategoryShoes">
                                <img src="./images/shoes.png" class="img-fluid rounded-circle" alt="">
                            </div>
                            <div>
                                <h1 class="C my-4">Shoes</h1>
                            </div>
                        </div>
                        </button>
                        <div class="CategoryRightButton ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="PopularNow container-fluid">
        <div class="PopularRow">
            <div class="PopularName my-5">
                <h1 class="fw-bold">Popular</h1>
            </div>
            <div class="PopularClothes">
                <div class="PopularFlexWidth">
                    <div class="ExtendedPopular">

                      <?php

                            $count = 0;

                            $var = mysqli_query($conn, "SELECT * FROM products;");
                            while ($row = mysqli_fetch_assoc($var)) {
                                $count += 1;
                                if($count == 4){
                                    break;
                            }
                            ?>

                        
                        <div class="PopularContainer">
                            <div class="PopularImage">
                                <button class="PopularBtn" name="PopularProduct" value="<?php echo $row["Product_ID"] ?>">
                            <img src="./Image/Dashboard/AddProduct Image/<?php echo $row["Product_Image"] ?>" alt="" class="PopularIMG">
                            </button>
                            </div>
                            <div class="PopularInfo">
                                <div class="PopularDetails">
                                    <label for="" class="ClothesName px-3"><?php echo $row["Product_Name"] ?></label>
                                    <label for="" class="ClothesPrice px-3">₱<?php echo $row["Regular_Price"] ?></label>
                                </div>
                                <div class="PopularButton">
                                    <div class="ButtonCenter">
                                        <button class="btn btn-primary"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
              
                                                       <?php

                            }



                            ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="DiscoverContainer">
        <div class="DiscoverAd">
            <div class="DiscoverLabel my-4 ">
                <label class="fw-bold">Discover</label>
            </div>
        </div>
        <div class="Discover container-fluid">
            <div class="DiscoverImageList">
                <div class="item">
                    <img src="./Image/AdsImage/Cozy.jpg" alt="">
                </div>
                <div class="item">
                    <img src="./Image/AdsImage/Feminine.jpg" alt="">
                </div>
                <div class="item">
                    <img src="./Image/AdsImage/Shade.jpg" alt="">
                </div>
                <div class="item">
                    <img src="./Image/AdsImage/Classic.jpg" alt="">
                </div>
                <div class="item">
                    <img src="./Image/AdsImage/Elegance.jpg" alt="">
                </div>
            </div>
            <div class="buttons">
                <button id="DiscoverPrev">
                </button>
                <button id="DiscoverNext">></button>
            </div>
            <ul class="dots">
                <li class="auto"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>

    <div class="NewArrival container-fluid">
        <div class="NewArrivalRow my-5">
            <div class="NewArrivalName my-3">
                <h1 class="fw-bold mb-4">New Arrival</h1>
            </div>
            <div class="NewArrivalClothes">
                <div class="NewArrivalFlexWidth">
                    <div class="ExtendedNewArrivalIMG">

                         <?php

                            $count2 = 0;

                            $var2 = mysqli_query($conn, "SELECT * FROM products ORDER BY Product_ID DESC");
                            while ($row2 = mysqli_fetch_assoc($var2)) {
                                $count2 += 1;
                                if($count2 == 4){
                                    break;
                            }
                            ?>

                        <div class="NewArrivalContainer" id="ProductSlacks">
                            <div class="NewArrivalImage">
                                <button class="NewArrivalBtn" name="NewArrivalBtn" value="<?php echo $row2["Product_ID"] ?>">
                            <img src="./Image/Dashboard/AddProduct Image/<?php echo $row2["Product_Image"] ?>" alt="" class="NewArrivalIMG">
                            </button>
                            </div>
                            <div class="NewArrivalInfo">
                                <div class="NewArrivalDetails">
                                    <label for="" class="ClothesName px-3"><?php echo $row2["Product_Name"] ?></label>

                                    <label for="" class="ClothesPrice px-3">₱<?php echo $row2["Regular_Price"] ?></label>
                                </div>
                                <div class="NewArrivalButton">
                                    <div class="ButtonCenter">
                                        <button class="btn btn-primary"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                                                                               <?php

                            }



                            ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
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
</form>
</body>

<script src="./bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./script/HomePage.js"></script>

</html>