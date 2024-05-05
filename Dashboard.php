<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
    <script src="./JS/jquery.min.js"></script>
    <script src="./JS/bootstrap.js"></script>
    <script src="./JS/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/bootstrap.css">
    <link rel="stylesheet" href="./CSS/Dashboard.css">
    <title>Dashboard</title>
</head>
<body>

<div class="DashboardContainer">

<div class="Sidebar">

<div class="NameLogo">

<img src="./Image/Dashboard/logo.png" alt="">

<label for="">JSK Store</label>

</div>

<div class="SideBarIcons">

<div class="Menu">

<label for="">Main Menu</label>

<div class="IconName" id="MainDashboardIcon">

<img src="./Image/Dashboard/DashboardIcon.png" alt="">

<label for="">Dashboard</label>

</div>

<div class="IconName">

<img src="./Image/Dashboard/OrderIcon.png" alt="">

<label for="">Order Management</label>

</div>

<div class="IconName">

<img src="./Image/Dashboard/CustomerIcon.png" alt="">

<label for="">Customers</label>

</div>

</div>

<div class="Menu2">

<label for="">Products</label>

<div class="IconName" id="AddProductIcon">

<img src="./Image/Dashboard/AddProduct.png" alt="">

<label for="">Add Products</label>

</div>

<div class="IconName">

<img src="./Image/Dashboard/ProductList.png" alt="">

<label for="">Product List</label>

</div>

</div>

<div class="Menu2">

<label for="">Admin</label>

<div class="IconName">

<img src="./Image/Dashboard/ManageAccount.png" alt="">

<label for="">Manage Admins</label>

</div>

<div class="IconName">

<img src="./Image/Dashboard/Account.png" alt="">

<label for="">Account</label>

</div>

</div>

<div class="IconName">

<img src="./Image/Dashboard/Logout.png" alt="">

<label for="">Log Out</label>

</div>

</div>

</div>



<div class="MainPage">

<header>

<div class="NavigationBar">

<div class="SearchContainer">

<input type="text" class="form-control" id="SearchInput" placeholder="Search...">

<i class="fa-solid fa-magnifying-glass" id="SearchButton"></i>

</div>

<div class="NavigationBarIcons">

<img src="./Image/Dashboard/NotificationIcon.png" alt="">    

<div class="AdminAccount">

<img src="./Image/Reviewer IMG/1641386961385.jpg" alt="">

</div>

</div>

</div>

</header>

<div class="MainDashboard" id="MainDashboard">

<label for="" id="DashboardLabel">Dashboard</label>

<div class="MainContainer">

    <div class="Container1">

        <div class="SubContainer1">

            <div class="SalesContainer">

            

            </div>

            <div class="RevenueContainer">



            </div>

        </div>

        <div class="SubContainer2">

            <div class="CustomerContainer">



            </div>

            <div class="OrdersContainer">



            </div>

            </div>

            <div class="SubContainer3">



            </div>

    </div>

    <div class="Container2">

        <div class="ResentOrderContainer">



        </div>

        <div class="RecentCustomerContainer">



        </div>

    </div>

</div>

<div class="footer">

    <label for="">&#169 2023-JSK Dashboard</label>

    <div class="About">

    <label for="">About</label>    
    
    <label for="">Policy</label>
    
    <label for="">Contact</label>

    </div>

</div>

</div>

<div class="MainAddProduct" id="MainAddProduct">

<label for="" id="AddProductLabel">Add product</label>

<div class="AddProductMainContainer">

<div class="ProductDescription">

    <div class="ProductContainer">

        <label for="">Product Name</label>

        <input type="text" id="ProductName" class="form-control">

    </div>

    <div class="ProductContainer">

        <label for="">Product Description</label>

        <textarea class="form-control" type="text" id="ProductDescription"></textarea>

    </div>

    <div class="ProductContainer">

        <label for="">Category</label>

        <select name="" id="Category" >

            <option value="" selected>Select Category</option>

            <option value="">Shorts</option>

            <option value="">Hats</option>

            <option value="">Pants</option>

            <option value="">Shoes</option>

            <option value="">Dress</option> 

            <option value="">Shirt</option> 

            <option value="">Jacket</option> 

        </select>

    </div>

        <div class="IDStockPrices">

            <div class="IDPrice">

                <div class="ProductContainer">

                <label for="">Product ID</label>

                <input type="text" id="ProductID" class="form-control">

            </div>

            <div class="ProductContainer">

             <label for="">Regular Price</label>

                <input type="text" id="RegularPrice" class="form-control">

            </div>

        </div>

            <div class="StockPrice">

                <div class="ProductContainer">

                    <label for="">Stock</label>

                    <input type="text" id="Stock" class="form-control">

                </div>

            <div class="ProductContainer">

                <label for="">Sale Price</label>

                <input type="text" id="SalesPrice" class="form-control">

            </div>

        </div>

        </div>

</div>

<div class="ProductImage">

    <img src="./Image/Dashboard/AddProduct Image/paimon_icon.png" alt="" id="DisplayImage">

        <div class="ProductContainer">

            <label for="">Product Gallery</label>

            <input type="file"  name="Picture" id="UploadFile" onchange="ImageSet()">

            <label for="UploadFile" id="UploadFunction">
                
                <img src="./Image/Dashboard/AddProduct Image/Imageicon.png" alt=""> 

                <div class="uploadletter">

                <p>Drop your imager here, or browse</p>
            
                <p>Jpeg, png are allowed</p>

                </div>

            
            </label>

        </div>

        <div class="RecentImage"></div>

        <div class="SubmitButton">

            <button id="AddProductSubmitBtn">Submit</button>

            <button id="AddProduvtCancelBtn">Cancel</button>

        </div>

</div>


</div>



</div>



</div>



</div>

</body>

<script type="text/javascript" src="./JS/Dashboard.js"></script>

</html>