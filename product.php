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
    <link rel="stylesheet" href="./styles/product.css">
    <link rel="icon" href="./images/logo.png">
    <title>Product</title>
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
        <div class="productInfo d-flex flex-row gap-5">
            <div class="">
                <img src="https://placehold.co/500x500/EEE/31343C" width="500" height="500" alt="Placehold" class="header-image">
            </div>
            <div class="">
                <div class="productName d-flex flex-row align-items-center justify-content-between">
                    <h1>Product Name</h1>
                    <i class="fa-regular fa-heart fa-xl"></i>
                </div>
                <div class="reviews d-flex flex-row align-items-center  mt-2 gap-3">
                    <div class="stars" id="stars">
                        <i class="fa-regular fa-star fa-lg" style="color: #FFD43B;"></i>
                        <i class="fa-regular fa-star fa-lg" style="color: #FFD43B;"></i>
                        <i class="fa-regular fa-star fa-lg" style="color: #FFD43B;"></i>
                        <i class="fa-regular fa-star fa-lg" style="color: #FFD43B;"></i>
                        <i class="fa-regular fa-star fa-lg" style="color: #FFD43B;"></i>
                    </div>
                    <div>
                        <label for="stars">Reviews</label>
                    </div>
                </div>
                <div class="productPrice mt-4">
                    <h2 class="fw-bold">₱799</h2>
                </div>
                <div class="sizePicker mt-4 d-flex flex-row align-items-center">
                    <h3 class="me-4">Size:</h3>
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
                <div class="quantity d-flex flex-row mt-4 align-items-center gap-3">
                    <div>
                        <h2>Quantity:</h2>
                    </div>
                    <div class="qty-input rounded-4 px-3 py-1">
                        <button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
                        <input class="product-qty" type="number" name="product-qty" min="0" max="10" value="1">
                        <button class="qty-count qty-count--add" data-action="add" type="button">+</button>
                    </div>
                </div>
                <div class="colorPicker mt-4 d-flex flex-row align-items-center">
                    <h3 class="me-4">Color:</h3>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="color1" value="option1">
                        <label class="form-check-label" for="color1">Red</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="color2" value="option2">
                        <label class="form-check-label" for="color2">Yellow</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="color3" value="option3">
                        <label class="form-check-label" for="color3">Blue</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="color4" value="option4">
                        <label class="form-check-label" for="color4">Pink</label>
                    </div>
                </div>
                <div class="d-flex flex-row gap-4">
                    <button name="buyButton" class="btn btn-primary border border-0 rounded-pill w-100 mt-5 p-3" id="buyButton">Buy Now</button>
                    <button name="cartButton" class="btn btn-primary border border-0 rounded-pill w-100 mt-5 p-3" id="cartButton">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="description d-flex justify-content-start w-50">
            <div class="description mt-5">
                <h3 class="fw-bold">Description</h3>
                <p  class="mt-4" style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis, adipisci molestiae! Eos vero quidem reiciendis vitae consequatur soluta aliquam, nesciunt repellendus, qui, corrupti facilis esse iste numquam? Aspernatur sed labore inventore, error accusantium sit, provident placeat voluptates officia repudiandae laudantium consequatur! Corrupti iste harum perspiciatis sint quos quis deleniti. Totam facere id animi quia explicabo! Blanditiis, vero expedita voluptatem minus molestias pariatur nulla voluptatum optio officiis dignissimos maiores quaerat animi ducimus obcaecati laudantium mollitia labore rem. Aliquid consectetur quaerat quasi quae praesentium officia nulla alias officiis numquam. Recusandae sed, adipisci rem excepturi hic fuga deserunt, ipsa ipsam, repudiandae ducimus repellendus.</p>
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
</body>
<script src="./script/product.js"></script>
</html>