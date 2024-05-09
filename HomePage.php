<?php 
    session_start();
    if (!isset($_SESSION['user'])) {
        header("Location: ./Login.php");
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
    <link rel="stylesheet" href="./styles/HomePage.css">
    <title>Home Page</title>
</head>

<body>
    <header>

        <div class="NavigationBar">

            <div class="NameLogo">

                <img src="./images/logo.png" alt="">

                <label for="">JSK Store</label>

            </div>

            <div class="SearchContainer">

                <input type="text" placeholder="Search..." class="form-control" id="SearchInput">

                <i class="fa-solid fa-magnifying-glass" id="SearchButton"></i>

            </div>

            <div class="NavigationBarIcons">

                <img src="./Image/AdsImage/notifications.png" alt="">

                <img src="./Image/AdsImage/shopping_cart.png" alt="">

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

                <i class="fas fa-chevron-right" id="UserEditAccount"></i>

            </div>

            <div class="AccountContainer2">

                <div class="MyOrder">

                    <img src="./Image/HomePageAccIcon/MyOrderIcon.png" alt="">

                    <label for="">My Orders</label>

                </div>

                <div class="MyFavorites">

                    <img src="./Image/HomePageAccIcon/FavoriteIcon.png" alt="">

                    <label for="">My Favorites</label>

                </div>

                <div class="Settings">

                    <img src="./Image/HomePageAccIcon/SettingIcon.png" alt="">

                    <label for="">Settings</label>

                </div>

            </div>

            <button onclick= "redirect()" id="LogOutBtn">Log Out </button>

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
                    << /button>
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
            <h1>Categories</h1>

        </div>
        <div class="CategoryRow">


            <div class="CategoryButtonCenter">

                <div class="CategoriesButtons">

                    <div class="CategoryLeftButton">

                    </div>

                    <div class="ExtendedCategories">
                        <div class="CategoryContainer ">
                            <div class="CategoryImage" id="CategoryShirt">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
                                    <g fill="none" fill-rule="evenodd">
                                        <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092" />
                                        <path fill="currentColor" d="M5.707 3.879A3 3 0 0 1 7.828 3c.79 0 1.948-.22 2.302.711a2.001 2.001 0 0 0 3.74 0c.354-.93 1.513-.71 2.302-.71a3 3 0 0 1 2.12.878L22 7.586a2 2 0 0 1 0 2.828l-1.478 1.478c-.52.52-1.246.689-1.9.526l.272 5.432A3 3 0 0 1 15.898 21H8.102a3 3 0 0 1-2.996-3.15l.272-5.432a1.996 1.996 0 0 1-1.9-.526L2 10.414a2 2 0 0 1 0-2.828l3.707-3.707" />
                                    </g>
                                </svg>


                            </div>

                            <div>
                                <h1 class="C my-4">Shirts</h1>

                            </div>

                        </div>

                        <div class="CategoryContainer ">

                            <div class="CategoryImage" id="CategoryPants">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
                                    <g fill="none">
                                        <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092" />
                                        <path fill="currentColor" d="M7.895 2a2 2 0 0 0-1.988 1.78L5.883 4h12.234l-.024-.22A2 2 0 0 0 16.105 2zm10.444 4H5.66L4.13 19.78A2 2 0 0 0 6.116 22h3.08a2 2 0 0 0 1.953-1.566L12 13.61l.85 6.824A2 2 0 0 0 14.802 22h3.08a2 2 0 0 0 1.988-2.22L18.34 6" />
                                    </g>
                                </svg>
                            </div>

                            <div>
                                <h1 class="C my-4">Pants</h1>

                            </div>

                        </div>

                        <div class="CategoryContainer">

                            <div class="CategoryImage" id="CategoryJacket">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
                                    <g fill="none" fill-rule="evenodd">
                                        <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092" />
                                        <path fill="currentColor" d="M13.528 3a3 3 0 0 1 1.342.317l2.03 1.016a5 5 0 0 1 2.553 3.035l2.262 7.539a2 2 0 0 1-1.021 2.364l-1.012.505a1 1 0 0 1-1.192-.227L18 17l-.268 1.752A3.002 3.002 0 0 1 14.826 21H9.174a3.002 3.002 0 0 1-2.906-2.248L6 17l-.49.549a1 1 0 0 1-1.193.227l-1.012-.505a2 2 0 0 1-1.021-2.364l2.262-7.539a5 5 0 0 1 2.553-3.035L9.13 3.317A3 3 0 0 1 10.472 3h3.056m0 2h-3.056a1 1 0 0 0-.34.06l-.107.046l-.96.48L12 10.15l2.935-4.566l-.96-.48a1 1 0 0 0-.331-.098z" />
                                    </g>
                                </svg>

                            </div>

                            <div>
                                <h1 class="C my-4">Jacket</h1>

                            </div>
                        </div>

                        <div class="CategoryContainer">

                            <div class="CategoryImage" id="CategoryDress">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
                                    <g fill="none" fill-rule="evenodd">
                                        <path d="M24 0v24H0V0zM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036c-.01-.003-.019 0-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01l-.184-.092" />
                                        <path fill="currentColor" d="M4 7a5 5 0 0 1 5-5c.482 0 .938.17 1.114.667a2.001 2.001 0 0 0 3.772 0C14.063 2.17 14.519 2 15 2a5 5 0 0 1 5 5v.5A1.5 1.5 0 0 1 18.5 9H16c0 .77-.076 1.554.438 2.197l2.028 2.535A7 7 0 0 1 20 18.105V19a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3v-.895a7 7 0 0 1 1.534-4.373l2.028-2.535C8.076 10.554 8 9.771 8 9H5.5A1.5 1.5 0 0 1 4 7.5z" />
                                    </g>
                                </svg>

                            </div>

                            <div>

                                <h1 class="C my-4">Dress</h1>
                            </div>

                        </div>

                        <div class="CategoryContainer">

                            <div class="CategoryImage" id="CategoryShort">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
                                    <g fill="none">
                                        <path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z" />
                                        <path fill="currentColor" d="M5.847 5a2 2 0 0 0-1.973 1.671l-.057.346C3.877 7.006 3.937 7 4 7h16c.063 0 .124.006.183.017l-.057-.346A2 2 0 0 0 18.153 5H5.847Zm14.645 3.87A.995.995 0 0 1 20 9H4a.995.995 0 0 1-.492-.13l-1.3 7.801A2 2 0 0 0 4.18 19h5.285a2 2 0 0 0 1.664-.89L12 15.802l.871 2.306a2 2 0 0 0 1.664.891h5.285a2 2 0 0 0 1.972-2.329l-1.3-7.8Z" />
                                    </g>
                                </svg>

                            </div>

                            <div>

                                <h1 class="C my-4">Short</h1>
                            </div>

                        </div>

                        <div class="CategoryContainer">

                            <div class="CategoryImage" id="CategoryHat">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
                                    <g fill="none" fill-rule="evenodd">
                                        <path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z" />
                                        <path fill="currentColor" d="M14.085 5H14a8 8 0 0 0-8 7.9l-3.614 2.81a1.01 1.01 0 0 0-.093 1.497a1.52 1.52 0 0 0 1.1.457c.22.001.436-.042.655-.066c.272-.03.717-.052 1.546.316c1.064.473 2.143 1.008 3.128 1.393c1.018.397 2.072.693 3.215.693c2.224 0 4.477-1.112 7.334-3.864a38.47 38.47 0 0 0 1.828-.141A1 1 0 0 0 22 15v-2a8.003 8.003 0 0 0-5-7.418V5.5a1.5 1.5 0 0 0-2.915-.5ZM5.563 15.774L7.5 14.266c3.087 1.155 5.845 1.743 8.73 1.882C14.415 17.573 13.08 18 11.936 18c-.793 0-1.584-.204-2.488-.557c-.936-.365-1.857-.83-3.043-1.357a6.671 6.671 0 0 0-.843-.312Z" />
                                    </g>
                                </svg>

                            </div>

                            <div>

                                <h1 class="C my-4">Hat</h1>
                            </div>

                        </div>


                        <div class="CategoryContainer">

                            <div class="CategoryImage" id="CategoryShoes">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
                                    <g fill="none">
                                        <path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z" />
                                        <path fill="currentColor" d="M18.026 3.902a1 1 0 0 0-.717-.489c-.41 0-.853.324-1.327.673c-.117.086-.236.173-.357.258c-.542.377-1.164.72-1.696.828c-.83.17-1.783-.069-2.547-.41c-.87-.401-1.373.522-1.762 1.236c-.073.133-.142.26-.208.369c-.29.473-.655 1.037-1.07 1.606a1 1 0 0 0-1.04 1.313c-.308.378-.6.74-.877 1.087A1 1 0 0 0 5.29 11.84c-1.072 1.433-1.81 2.598-2.236 3.635c-.36.88-.514 1.703-.447 2.542c.067.827.342 1.597.727 2.376c.522 1.055 1.802 1.344 2.739.803l14.722-8.5a2 2 0 0 0 .732-2.732l-.5-.866l-6.062 3.5a1 1 0 0 1-1-1.732l6.062-3.5l-2-3.464Z" />
                                    </g>
                                </svg>

                            </div>

                            <div>

                                <h1 class="C my-4">Shoes</h1>
                            </div>

                        </div>


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
                <h1>Popular</h1>
            </div>

            <div class="PopularClothes">

                <div class="PopularFlexWidth">

                    <div class="ExtendedPopular">

                        <div class="PopularContainer" id="ProductLongSleeves">

                            <div class="PopularImage">
                                <img src="./Image/LongSleeve/stripes21.jpg" alt="" class="PopularIMG">
                            </div>



                            <div class="PopularInfo">

                                <div class="PopularDetails">
                                    <label for="" class="ClothesName px-3">Long Sleeves</label>

                                    <label for="" class="ClothesPrice px-3">₱799</label>
                                </div>

                                <div class="PopularButton">

                                    <div class="ButtonCenter">

                                        <button class="btn btn-primary"><i class="fa-solid fa-plus"></i></button>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="PopularContainer " id="ProductShoes">

                            <div class="PopularImage">
                                <img src="./Image/SHoes/ballarbare_shoes 1 1.png" alt="" class="PopularIMG">
                            </div>

                            <div class="PopularInfo">

                                <div class="PopularDetails">
                                    <label for="" class="ClothesName px-3">Shoes</label>

                                    <label for="" class="ClothesPrice px-3">₱2,499</label>
                                </div>

                                <div class="PopularButton">

                                    <div class="ButtonCenter">

                                        <button class="btn btn-primary"><i class="fa-solid fa-plus"></i></button>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="PopularContainer" id="ProductJean">

                            <div class="PopularImage">
                                <img src="./Image/AdsImage/a262f50ded2c64964632e6864b199484.png" alt="" class="PopularIMG">
                            </div>

                            <div class="PopularInfo">

                                <div class="PopularDetails">
                                    <label for="" class="ClothesName px-3">Jeans</label>

                                    <label for="" class="ClothesPrice px-3">₱899</label>
                                </div>

                                <div class="PopularButton">

                                    <div class="ButtonCenter">

                                        <button class="btn btn-primary"><i class="fa-solid fa-plus"></i></button>

                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="DiscoverContainer">

        <div class="DiscoverAd">

            <div class="DiscoverLabel my-4 ">
                <label>Discover</label>
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
                    << /button>
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
                <h1>NewArrival</h1>
            </div>

            <div class="NewArrivalClothes">

                <div class="NewArrivalFlexWidth">

                    <div class="ExtendedNewArrivalIMG">

                        <div class="NewArrivalContainer" id="ProductSlacks">

                            <div class="NewArrivalImage">
                                <img src="./Image/AdsImage/86fae2bc3ed73dd981cfc9427d96faed.png" alt="" class="NewArrivalIMG">
                            </div>

                            <div class="NewArrivalInfo">

                                <div class="NewArrivalDetails">
                                    <label for="" class="ClothesName px-3">Slacks</label>

                                    <label for="" class="ClothesPrice px-3">₱1,999</label>
                                </div>

                                <div class="NewArrivalButton">

                                    <div class="ButtonCenter">
                                        <button class="btn btn-primary"><i class="fa-solid fa-plus"></i></button>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="NewArrivalContainer " id="ProductPoloShirt">

                            <div class="NewArrivalImage">
                                <img src="./Image/AdsImage/tur1.png" alt="" class="NewArrivalIMG">
                            </div>

                            <div class="NewArrivalInfo">

                                <div class="NewArrivalDetails">
                                    <label for="" class="ClothesName px-3">Polo Shirt</label>

                                    <label for="" class="ClothesPrice px-3">₱949</label>
                                </div>

                                <div class="NewArrivalButton">

                                    <div class="ButtonCenter">
                                        <button class="btn btn-primary"><i class="fa-solid fa-plus"></i></button>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="NewArrivalContainer" id="ProductDress">

                            <div class="NewArrivalImage">
                                <img src="./Image/AdsImage/0fc32ffd34a4856ef1297c59a54f52cb.jpg" alt="" class="NewArrivalIMG">
                            </div>

                            <div class="NewArrivalInfo">

                                <div class="NewArrivalDetails">
                                    <label for="" class="ClothesName px-3">Dress</label>

                                    <label for="" class="ClothesPrice px-3">₱1,499</label>
                                </div>

                                <div class="NewArrivalButton">

                                    <div class="ButtonCenter">
                                        <button class="btn btn-primary"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="HomePageFooter">

        <div class="Newsletter">

            <label for="">Sign up our Newsletter</label>

            <div class="Subscibe">

                <input type="text" id="SubscribeInput" class="form-control">

                <button id="SubscribeBtn">Subscribe</button>

            </div>

            <div class="PlatformIcons">

                <img src="./Image/FooterIcons/google.png" alt="">

                <img src="./Image/FooterIcons/fb.png" alt="">

                <img src="./Image/FooterIcons/twitter.png" alt="">

                <img src="./Image/FooterIcons/Vector.png" alt="">

            </div>

        </div>

        <div class="ServiceAndDetails">

            <div class="CustomerService">

                <label for="" class="FooterTitles">Customer Service</label>

                <label for="">Delivery & Return</label>

                <label for="">Customer Service</label>

                <label for="">Track Order</label>

            </div>

            <div class="MoreDetails">

                <label for="" class="FooterTitles">More Details</label>

                <label for="">Terms & Condition</label>

                <label for="">Privacy Policy</label>

                <label for="">Products info</label>

            </div>

        </div>

        <div class="Copyright">

            <label for="">&copy; JSK Store. All rights reserved</label>

        </div>

    </div>


</body>
<script src="./bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./script/HomePage.js"></script>

</html>