<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Placed Order</title>
    <link rel="icon" href="./images/logo.png">
    <link rel="stylesheet" href="./styles/placedOrder.css">
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
    <main class="container">
        <div class="row gap-5">
            <div class="col w-50">
                <div class="receiver rounded-4">
                    <h1 class="fw-semibold fs-3">Receiver</h1>
                    <div class="d-flex flex-row gap-5 mt-3">
                        <p>Juan Cruz</p>
                        <p>09123456789</p>
                    </div>
                    <div class="location fw-semibold">
                        <p>Purok 1, 123 Albay, Santo Domingo, San Isidro</p>
                    </div>
                </div>
                <div class="deliveryPartner rounded-4 mt-4">
                    <div class="d-flex align-items-center gap-4">
                        <img src="./images/j&t.png" alt="">
                        <h2 class="fw-semibold fs-5">Delivery Partner: J&T Express PH</h2>
                    </div>
                    <div class="trackingNumber d-flex mt-3 gap-3">
                        <h3 class="fw-bold fs-5">Tracking Number:</h3>
                        <a class="trackingNo fw-semibold" href="">12371984947108421</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="orderDetails w-75">
                    <h2 class="fw-bold fs-3">Thanks for Purchasing</h2>
                    <div class="d-flex mt-3">
                        <p>We are preparing your product for delivery</p>
                        <img src="./images/online shopping and delivery package boxes.png" alt="">
                    </div>
                    <hr style="border: 2px solid #adacac;">
                    <div class="d-flex justify-content-between mt-4">
                        <h3 class="fs-5 fw-bold">Paid By:</h3>
                        <p class="fw-semibold">Credit Card/Debit Card</p>
                    </div>
                    <div class="d-flex justify-content-between my-3">
                        <h3 class="fs-5 fw-bold">Order No:</h3>
                        <p class="fw-semibold">14284701472019302</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h3 class="fs-5 fw-bold">Placed On:</h3>
                        <p class="fw-semibold">15 Nov 2023 12:32PM</p>
                    </div>
                    <div class="orderSummary">
                        <h2 class="mt-4 fs-4 fw-bold">Order Summary</h2>
                        <div class="subTotal d-flex justify-content-between mt-4">
                            <h3 class="fs-5 fw-bold">Subtotal (1 items):</h3>
                            <p class="fw-semibold">15 Nov 2023 12:32PM</p>
                        </div>
                        <div class="vouchers d-flex justify-content-between my-3">
                            <h3 class="fs-5 fw-bold">Vouchers</h3>
                            <a class="viewVouchers fw-semibold" href="#">View Vouchers</a>
                        </div>
                        <div class="shippingFee d-flex justify-content-between">
                            <h3 class="fs-5 fw-bold">Shipping Fee:</h3>
                            <p class="fw-bold">₱0</p>
                        </div>
                        <hr class="my-4" style="border: 2px solid #FF9AA4;">
                    </div>
                    <button name="homeButton" class="btn btn-primary border border-0 rounded-4 w-100 mt-3 p-3" id="homeButton">Home</button>
                </div>
            </div>
        </div>
    </main>

    <footer class="placedOrderFooter">
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
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
<script src="./script/jquery.min.js"></script>
<script src="./bootstrap/js/bootstrap.min.js"></script>
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