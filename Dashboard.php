<?php 
    session_start();
    require_once("./includes/database-con.php");
    if (!isset($_SESSION['user'])) {
        header("Location: ./dashboard-login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
    <script src="./script/jquery.min.js"></script>
    <script src="./bootstrap/js/bootstrap.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./styles/MainDashboard.css">
    <title>Dashboard</title>
</head>

<body>

    <?php
    $ProductName = $ProductDescription = $Category = $RegularPrice = $Stock = "";

    $SavedImage = "paimon_icon.png";

    $MainDashboard = null;

    $MainAddProduct = null;

    $MainDashboardIcon = null;

    $AddProductIcon = null;

    $Selected = "selected";

    $Shorts = $Hats  = $Pants  = $Shoes = $Dress  = $Shirt = $Jacket = null;

    // ------------------------- ADD PRODUCT BACKEND ------------------------------

    if (isset($_POST['AddProductSubmit'])) {

        include("./connection.php");

        $ProductName = $_POST['ProductName'];

        $ProductDescription = $_POST['ProductDescription'];

        $Category = $_POST['Category'];

        $RegularPrice = $_POST['RegularPrice'];

        $Stock = $_POST['Stock'];

        $ImageName = $_FILES['Picture']['name'];

        $Foldertemp = $_FILES['Picture']['tmp_name'];

        $Folder = 'Image/Dashboard/AddProduct Image/'.$ImageName;

        $FileName = uniqid() . "_" .$ImageName;

        $temp = $_FILES['Picture']['tmp_name'];

        $folder = 'Image/Dashboard/AddProduct Image/'.$FileName;

        $SavedImage = $ImageName;


        if (empty($ProductName)) {

            echo '<div class="alert alert-danger alert-dismissible fade show w-25" id="Alert" role="alert">
            <strong>Pls Input the name of the product</strong> 
          </div>
          ';

            echo '<script>$("#Alert").fadeOut(4000);</script>';

            $MainDashboard = "none";

            $MainAddProduct = "flex";

            $MainDashboardIcon = "none";

            move_uploaded_file($Foldertemp, $Folder);

            if($ImageName == ""){

                $SavedImage = "paimon_icon.png";
            }


            $AddProductIcon = "FFCFD4";
        } else if (empty($ProductDescription)) {

            echo '<div class="alert alert-danger alert-dismissible fade show w-25" id="Alert" role="alert">
            <strong>Pls Input the descripton of the product</strong> 
          </div>
          ';

            echo '<script>$("#Alert").fadeOut(4000);</script>';

            move_uploaded_file($Foldertemp, $Folder);

            if($ImageName == ""){

                $SavedImage = "paimon_icon.png";
            }

            $MainDashboard = "none";

            $MainAddProduct = "flex";

            $MainDashboardIcon = "none";

            $AddProductIcon = "FFCFD4";
        } else if (empty($Category)) {

            echo '<div class="alert alert-danger alert-dismissible fade show w-25" id="Alert" role="alert">
            <strong>Pls Input the category of the product</strong> 
          </div>
          ';

            echo '<script>$("#Alert").fadeOut(4000);</script>';

            move_uploaded_file($Foldertemp, $Folder);

            if($ImageName == ""){

                $SavedImage = "paimon_icon.png";
            }

            $MainDashboard = "none";

            $MainAddProduct = "flex";

            $MainDashboardIcon = "none";

            $AddProductIcon = "FFCFD4";
        } else if (empty($RegularPrice)) {

            echo '<div class="alert alert-danger alert-dismissible fade show w-25" id="Alert" role="alert">
            <strong>Pls Input the regular price of the product</strong> 
          </div>
          ';

            echo '<script>$("#Alert").fadeOut(4000);</script>';

            move_uploaded_file($Foldertemp, $Folder);

            if($ImageName == ""){

                $SavedImage = "paimon_icon.png";
            }

            $MainDashboard = "none";

            $MainAddProduct = "flex";

            $MainDashboardIcon = "none";

            $AddProductIcon = "FFCFD4";
        } else if (empty($Stock)) {

            echo '<div class="alert alert-danger alert-dismissible fade show w-25" id="Alert" role="alert">
            <strong>Pls Input the stock number of the product</strong> 
          </div>
          ';

            echo '<script>$("#Alert").fadeOut(4000);</script>';

            move_uploaded_file($Foldertemp, $Folder);

            if($ImageName == ""){

                $SavedImage = "paimon_icon.png";
            }

            $MainDashboard = "none";

            $MainAddProduct = "flex";

            $MainDashboardIcon = "none";

            $AddProductIcon = "FFCFD4";
        } else {
            //insert the input value/data to database table
            $sql = "INSERT INTO products (Product_ID, Product_Name, Product_Description, Category, Stock, Regular_Price, Product_Image)
            VALUES ('', '$ProductName','$ProductDescription', '$Category', '$Stock', '$RegularPrice','$FileName ')";

            if (mysqli_query($conn, $sql)) {
                move_uploaded_file($temp, $folder);

                $MainDashboard = "none";

                $MainAddProduct = "flex";

                $MainDashboardIcon = "none";

                $AddProductIcon = "FFCFD4";

                $SavedImage = "paimon_icon.png";

                $Validate =  $ProductID = $ProductName = $ProductDescription = $Category = $RegularPrice = $Stock = null;

                echo '<div class="alert alert-success alert-dismissible fade show w-25" id="Alert" role="alert">
                <strong>Successfully Added!</strong> 
              </div>
              ';

                echo '<script>$("#Alert").fadeOut(4000);</script>';
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

        $Shorts = $Hats  = $Pants  = $Shoes = $Dress  = $Shirt = $Jacket = null;

        if ($Category == "Shorts") {
            $Selected = null;

            $Shorts = "selected";
        } else if ($Category == "Hats") {
            $Selected = null;

            $Hats = "selected";
        } else if ($Category == "Pants") {
            $Selected = null;

            $Pants = "selected";
        } else if ($Category == "Shoes") {
            $Selected = null;

            $Shoes = "selected";
        } else if ($Category == "Dress") {
            $Selected = null;

            $Dress = "selected";
        } else if ($Category == "Shirt") {
            $Selected = null;

            $Shirt = "selected";
        } else if ($Category == "Jacket") {
            $Selected = null;

            $Jacket = "selected";
        }
    }


        // ------------------------- DELETE PRODUCT BACKEND ------------------------------

    $MainProductList = null;

    $ProductListIcon = null;

    if (isset($_POST['DeleteProduct'])) {

        $ID = $_POST['DeleteProduct'];


        $SelectProduct = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM products WHERE Product_ID = $ID  "));

        $File = $SelectProduct['Product_Image'];

        $Path = 'Image/Dashboard/AddProduct Image/' .$File;

        

        $Delete = mysqli_query($conn, "DELETE FROM products WHERE Product_ID = $ID  ");

        if ($Delete) {
            echo '<div class="alert alert-success alert-dismissible fade show w-25" id="Alert" role="alert">
            <strong>Successfully Deleted!</strong> 
          </div>
          ';

            echo '<script>$("#Alert").fadeOut(4000);</script>';

            $MainDashboard = "none";

            $MainProductList = "flex";

            $MainDashboardIcon = "none";

            $ProductListIcon = "FFCFD4";
        }
    }

        // ------------------------- EDIT BUTTON PRODUCT BACKEND ------------------------------

    $EditProductID = $EditProductName = $EditProductDescription = $EditCategory = $EditRegularPrice = $EditStock = $EditProductImage  = "";

    $MainEditProduct = null;

    $EditID2 = null;

    $EditSavedImaged = null;


    if (isset($_POST['EditProduct'])) {

        $EditID = $_POST['EditProduct'];

        $EditID2 = $EditID;

        $MainDashboard = "none";

        $MainProductList = "none";

        $MainEditProduct = "flex";

        $ProductListIcon = "FFCFD4";


        $EditProduct = mysqli_query($conn, "SELECT * FROM products WHERE Product_ID = $EditID ");
        while ($Editrow = mysqli_fetch_assoc($EditProduct)) {

            $EditProductID = $Editrow["Product_ID"];            
            
            $EditProductName = $Editrow["Product_Name"];
            
            $EditProductDescription = $Editrow["Product_Description"];
            
            $EditCategory = $Editrow["Category"];
            
            $EditStock = $Editrow["Stock"];
            
            $EditRegularPrice = $Editrow["Regular_Price"];
            
            $EditProductImage = $Editrow["Product_Image"];

            $EditSavedImaged = $EditProductImage;

        }

        $EditSelected = "selected";

        $EditShorts = $EditHats  = $EditPants  = $EditShoes = $EditDress  = $EditShirt = $EditJacket = null;

        if ($EditCategory == "Shorts") {
            $EditSelected = null;

            $EditShorts = "selected";
        } else if ($EditCategory == "Hats") {
            $EditSelected = null;

            $EditHats = "selected";
        } else if ($EditCategory == "Pants") {
            $EditSelected = null;

            $EditPants = "selected";
        } else if ($Category == "Shoes") {
            $EditSelected = null;

            $EditShoes = "selected";
        } else if ($EditCategory == "Dress") {
            $EditSelected = null;

            $EditDress = "selected";
        } else if ($EditCategory == "Shirt") {
            $EditSelected = null;

            $EditShirt = "selected";
        } else if ($EditCategory == "Jacket") {
            $EditSelected = null;

            $EditJacket = "selected";
        }

    }


    $EditSavedImaged2 = $EditSavedImaged;

    $EditedProductID = "";

        // ------------------------- EDIT PRODUCT BACKEND ------------------------------


    if (isset($_POST['EditProductSubmit'])) {

        $EditedProductID = $_POST['EditProductSubmit'];

        $EditProduct = mysqli_query($conn, "SELECT * FROM products WHERE Product_ID = $EditedProductID ");
        while ($Editrow = mysqli_fetch_assoc($EditProduct)) {

            $EditProductID = $Editrow["Product_ID"];     
            
            $EditProductImage = $Editrow["Product_Image"];

            $EditSavedImaged2 = $EditProductImage;

            $EditID2 = $EditProductID;

        }

        $MainDashboard = "none";

        $MainProductList = "flex";

        $MainEditProduct = "none";

        $MainDashboardIcon = "none";

        $ProductListIcon = "FFCFD4";

        $EditProductSubmit = $_POST['EditProductSubmit'];

        $EditProductName = $_POST['EditProductName'];

        $EditProductDescription = $_POST['EditProductDescription'];

        $EditCategory = $_POST['EditCategory'];

        $EditRegularPrice = $_POST['EditRegularPrice'];

        $EditStock = $_POST['EditStock'];

        $EditImageName = $_FILES['EPicture']['name'];

        $FolderEdittemp = $_FILES['EPicture']['tmp_name'];

        $FolderEditfolder = 'Image/Dashboard/AddProduct Image/' .$EditImageName;

        if($EditImageName != ""){
            $EditFileName = uniqid() . "_" .$EditImageName;
        }else{
            $EditFileName = $EditProductImage;
        }



        $Edittemp = $_FILES['EPicture']['tmp_name'];

        $Editfolder = 'Image/Dashboard/AddProduct Image/' .$EditFileName;

        

        if($EditImageName != ""){
            $EditSavedImaged = $EditImageName ;
        }else{
            $EditSavedImaged = $EditSavedImaged2 ;
        }

        if (empty($EditProductName)) {

            echo '<div class="alert alert-danger alert-dismissible fade show w-25" id="Alert" role="alert">
            <strong>Pls Input the name of the product</strong> 
          </div>
          ';

            echo '<script>$("#Alert").fadeOut(4000);</script>';

            move_uploaded_file($FolderEdittemp, $FolderEditfolder);

            if($EditImageName == ""){
                $EditSavedImaged = $EditSavedImaged2;
            }

            $MainDashboard = "none";

            $MainAddProduct = "none";

            $MainDashboardIcon = "none";

            $MainEditProduct = "flex";

            $ProductListIcon = "FFCFD4";
        } else if (empty($EditProductDescription)) {

            echo '<div class="alert alert-danger alert-dismissible fade show w-25" id="Alert" role="alert">
            <strong>Pls Input the descripton of the product</strong> 
          </div>
          ';

            echo '<script>$("#Alert").fadeOut(4000);</script>';

            echo $EditProductImage;

            $MainDashboard = "none";

            $MainAddProduct = "none";

            $MainDashboardIcon = "none";

            $MainEditProduct = "flex";

            $ProductListIcon = "FFCFD4";
        } else if (empty($EditCategory)) {

            echo '<div class="alert alert-danger alert-dismissible fade show w-25" id="Alert" role="alert">
            <strong>Pls Input the category of the product</strong> 
          </div>
          ';

            echo '<script>$("#Alert").fadeOut(4000);</script>';

            $MainDashboard = "none";

            $MainAddProduct = "none";

            $MainDashboardIcon = "none";

            $MainEditProduct = "flex";

            $ProductListIcon = "FFCFD4";
        } else if (empty($EditRegularPrice)) {

            echo '<div class="alert alert-danger alert-dismissible fade show w-25" id="Alert" role="alert">
            <strong>Pls Input the regular price of the product</strong> 
          </div>
          ';

            echo '<script>$("#Alert").fadeOut(4000);</script>';

            $MainDashboard = "none";

            $MainAddProduct = "none";

            $MainDashboardIcon = "none";

            $MainEditProduct = "flex";

            $ProductListIcon = "FFCFD4";
        } else if (empty($EditStock)) {

            echo '<div class="alert alert-danger alert-dismissible fade show w-25" id="Alert" role="alert">
            <strong>Pls Input the stock number of the product</strong> 
          </div>
          ';

            echo '<script>$("#Alert").fadeOut(4000);</script>';

            $MainDashboard = "none";

            $MainAddProduct = "none";

            $MainDashboardIcon = "none";

            $MainEditProduct = "flex";

            $ProductListIcon = "FFCFD4";
        } else {
            //insert the input value/data to database table
            $Updated = "UPDATE products SET Product_Name = '$EditProductName', Product_Description = '$EditProductDescription', Category = '$EditCategory', Stock = '$EditStock' , Regular_Price = '$EditRegularPrice', Product_Image = '$EditFileName' WHERE Product_ID= '$EditProductSubmit' ";
            

            if (mysqli_query($conn, $Updated)) {
                move_uploaded_file($Edittemp, $Editfolder);

                $MainDashboard = "none";

                $MainAddProduct = "none";

                $MainDashboardIcon = "none";

                $MainProductList = "flex";

                $ProductListIcon = "FFCFD4";

                $EditProductID = $EditProductName = $EditProductDescription = $EditCategory = $EditRegularPrice = $EditStock = null;

                echo '<div class="alert alert-success alert-dismissible fade show w-25" id="Alert" role="alert">
                <strong>Successfully Edited!</strong> 
              </div>
              ';

                echo '<script>$("#Alert").fadeOut(4000);</script>';
            } else {
                echo "Error: " . $Updated . "<br>" . mysqli_error($conn);
            }
        }

        $EditSelected = "selected";

        $EditShorts = $EditHats  = $EditPants  = $EditShoes = $EditDress  = $EditShirt = $EditJacket = null;

        if ($EditCategory == "Shorts") {
            $EditSelected = null;

            $EditShorts = "selected";
        } else if ($EditCategory == "Hats") {
            $EditSelected = null;

            $EditHats = "selected";
        } else if ($EditCategory == "Pants") {
            $EditSelected = null;

            $EditPants = "selected";
        } else if ($Category == "Shoes") {
            $EditSelected = null;

            $EditShoes = "selected";
        } else if ($EditCategory == "Dress") {
            $EditSelected = null;

            $EditDress = "selected";
        } else if ($EditCategory == "Shirt") {
            $EditSelected = null;

            $EditShirt = "selected";
        } else if ($EditCategory == "Jacket") {
            $EditSelected = null;

            $EditJacket = "selected";
        }

    }


    ?>


    <div class="DashboardContainer">

        <div class="Sidebar">

            <div class="NameLogo">

                <img src="./Image/Dashboard/logo.png" alt="">

                <label for="">JSK Store</label>

            </div>

            <div class="SideBarIcons">

                <div class="Menu">

                    <label for="">Main Menu</label>

                    <div style="background:<?php echo $MainDashboardIcon ?> ;" class="IconName" id="MainDashboardIcon">

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

                    <div style="background:#<?php echo $AddProductIcon ?> ;" class="IconName" id="AddProductIcon">

                        <img src="./Image/Dashboard/AddProduct.png" alt="">

                        <label for="">Add Products</label>

                    </div>

                    <div style="background:<?php echo $ProductListIcon ?> ;" class="IconName" id="ProductListIcon">

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

        <form action="" method="post" enctype="multipart/form-data">

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

                <div style="display: <?php echo $MainDashboard ?>;" class="MainDashboard" id="MainDashboard">

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



                <div style="display: <?php echo $MainAddProduct ?>;" class="MainAddProduct" id="MainAddProduct">



                    <label for="" id="AddProductLabel">Add product</label>

                    <div class="AddProductMainContainer">

                        <div class="ProductDescription">

                            <div class="ProductContainer">

                                <label for="">Product Name</label>

                                <input type="text" id="ProductName" class="form-control" name="ProductName" value="<?php echo $ProductName  ?>">

                            </div>

                            <div class="ProductContainer">

                                <label for="">Product Description</label>

                                <textarea class="form-control" type="text" id="ProductDescription" name="ProductDescription"><?php echo $ProductDescription  ?></textarea>

                            </div>

                            <div class="ProductContainer">

                                <label for="">Category</label>

                                <select id="Category" class="form-select" name="Category">

                                    <option value="" <?php echo $Selected ?>>Select Category</option>

                                    <option value="Shorts" <?php echo $Shorts ?>>Shorts</option>

                                    <option value="Hats" <?php echo $Hats ?>>Hats</option>

                                    <option value="Pants" <?php echo $Pants ?>>Pants</option>

                                    <option value="Shoes" <?php echo $Shoes ?>>Shoes</option>

                                    <option value="Dress" <?php echo $Dress ?>>Dress</option>

                                    <option value="Shirt" <?php echo $Shirt ?>>Shirt</option>

                                    <option value="Jacket" <?php echo $Jacket ?>>Jacket</option>

                                </select>

                            </div>

                            <div class="IDStockPrices">

                                <div class="IDPrice">

                                    <div class="ProductContainer">

                                        <label for="">Regular Price</label>

                                        <input type="number" id="RegularPrice" class="form-control" name="RegularPrice" value="<?php echo $RegularPrice  ?>">

                                    </div>

                                </div>

                                <div class="StockPrice">

                                    <div class="ProductContainer">

                                        <label for="">Stock</label>

                                        <input type="number" id="Stock" class="form-control" name="Stock" value="<?php echo $Stock  ?>">

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="ProductImage">

                            <img src="./Image/Dashboard/AddProduct Image/<?php echo $SavedImage ?>" alt="" id="DisplayImage">

                            <div class="ProductContainer">

                                <label for="">Product Gallery</label>

                                <input type="file" name="Picture" id="UploadFile" onchange="ImageSet()">

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

                                <input type="submit" id="AddProductSubmitBtn" value="Submit" name="AddProductSubmit">

                                <button id="AddProduvtCancelBtn">Cancel</button>


                            </div>



                        </div>

                    </div>

                </div>

                <div style="display: <?php echo $MainProductList ?>;" class="MainProductList" id="MainProductList">



                    <label for="" id="ProductList">Product List</label>

                    <div class="ProductListMainContainer">

                        <div class="ListOfProductLabels">

                            <div class="ListContainer">

                                <label for="">PRODUCT ID</label>

                            </div>

                            <div class="ListContainer">

                                <label for="">PRODUCT IMAGE</label>

                            </div>

                            <div class="ListContainer">

                                <label for="">PRODUCT NAME</label>

                            </div>

                            <div class="ListContainer">

                                <label for="">PRODUCT PRICE</label>

                            </div>

                            <div class="ListContainer">

                                <label for="">STOCK</label>

                            </div>

                            <div class="ListContainer">

                                <label for="">ACTION</label>

                            </div>


                        </div>

                        <div class="ListColumn">

                            <?php

                            $var = mysqli_query($conn, "SELECT * FROM products;");
                            while ($row = mysqli_fetch_assoc($var)) {
                            ?>
                                <div class="ListOfProducts">

                                    <div class="ListContainer">

                                        <label for=""><?php echo $row["Product_ID"] ?></label>

                                    </div>

                                    <div class="ListContainer">

                                    <?php
                                        $ImageFile = $row["Product_Image"];
                                    
                                    "<img src='./Image/Dashboard/AddProduct Image/.$row[Product_Image]'></img>";?>
                                    

                                <img src="./Image/Dashboard/AddProduct Image/<?php echo $ImageFile ?>" alt="">
                                
                                    </div>
                                    <div class="ListContainer">

                                        <label for=""><?php echo $row["Product_Name"] ?></label>

                                    </div>
                                    <div class="ListContainer">

                                        <label for=""><?php echo $row["Regular_Price"] ?></label>

                                    </div>
                                    <div class="ListContainer">

                                        <label for=""><?php echo $row["Stock"] ?></label>

                                    </div>
                                    <div class="ListContainer">

                                        <div class="Command">

                                           <button class="EditBtn" name="EditProduct" value="<?php echo $row["Product_ID"]?>"><img src="./Image/Dashboard/AddProduct Image/edit.png" alt="" id="EditProduct" ></button> 

                                            <img src="./Image/Dashboard/AddProduct Image/trash.png" alt="" id="DeleteProduct" data-bs-target="#DeleteProductConfirmation" data-bs-toggle="modal">

                                        </div>



                                    </div>

                                    <div class="modal fade" id="DeleteProductConfirmation"> <!-- Delete Confirmation Modal -->
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content" id="confirm">

                                                <div class="modal-header border-0">
                                                    <h4 class="modal-title  w-100 text-center text-black">Confirmation</h4>
                                                </div>

                                                <div class="modal-body w-100 text-center text-black">
                                                    Are You Sure? You want to delete this Product ID <?php echo $row["Product_ID"] ?> ?
                                                </div>

                                                <div class="modal-footer w-100 justify-content-around border-0">
                                                    <button name="DeleteProduct" value="<?php echo $row["Product_ID"]  ?>" class="btn btn-success mx-2">Save</button>
                                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
                                                </div>

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
   

                             <div style="display: <?php echo $MainEditProduct ?>" class="MainEditProduct" id="MainEditProduct">



                                        <label for="" id="EditProductLabel">Edit product</label>

                                        <div class="EditProductMainContainer">

                                            <div class="ProductDescription">

                                                <div class="ProductContainer">

                                                    <label for="">Product Name</label>

                                                    <input type="text" id="EditProductName" class="form-control" name="EditProductName" value="<?php echo $EditProductName  ?>">

                                                </div>

                                                <div class="ProductContainer">

                                                    <label for="">Product Description</label>

                                                    <textarea class="form-control" type="text" id="EditProductDescription" name="EditProductDescription"><?php echo $EditProductDescription  ?></textarea>

                                                </div>

                                                <div class="ProductContainer">

                                                    <label for="">Category</label>

                                                    <select id="EditCategory" class="form-select" name="EditCategory">

                                                        <option value="" <?php echo $EditSelected ?>>Select Category</option>

                                                        <option value="Shorts" <?php echo $EditShorts ?>>Shorts</option>

                                                        <option value="Hats" <?php echo $EditHats ?>>Hats</option>

                                                        <option value="Pants" <?php echo $EditPants ?>>Pants</option>

                                                        <option value="Shoes" <?php echo $EditShoes ?>>Shoes</option>

                                                        <option value="Dress" <?php echo $EditDress ?>>Dress</option>

                                                        <option value="Shirt" <?php echo $EditShirt ?>>Shirt</option>

                                                        <option value="Jacket" <?php echo $EditJacket ?>>Jacket</option>

                                                    </select>

                                                </div>

                                                <div class="IDStockPrices">

                                                    <div class="IDPrice">

                                                        <div class="ProductContainer">

                                                            <label for="">Regular Price</label>

                                                            <input type="number" id="EditRegularPrice" class="form-control" name="EditRegularPrice" value="<?php echo $EditRegularPrice  ?>">

                                                        </div>

                                                    </div>

                                                    <div class="StockPrice">

                                                        <div class="ProductContainer">

                                                            <label for="">Stock</label>

                                                            <input type="number" id="EditStock" class="form-control" name="EditStock" value="<?php echo $EditStock  ?>">

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="ProductImage">

                                                <img src="./Image/Dashboard/AddProduct Image/<?php echo $EditSavedImaged  ?>" alt="" id="EditDisplayImage">

                                                <div class="ProductContainer">

                                                    <label for="">Product Gallery</label>

                                                    <input type="file" name="EPicture" id="EditUploadFile" onchange="EditImageSet()">

                                                    <label for="EditUploadFile" id="EditUploadFunction">

                                                        <img src="./Image/Dashboard/AddProduct Image/Imageicon.png" alt="">

                                                        <div class="uploadletter">

                                                            <p>Drop your imager here, or browse</p>

                                                            <p>Jpeg, png are allowed</p>

                                                        </div>


                                                    </label>

                                                </div>



                                                <div class="RecentImage"></div>

                                                <div class="SubmitButton">

                                                    <button id="EditProductSubmitBtn" name="EditProductSubmit" value="<?php echo $EditID2 ?>">Submit</button>

                                                    <button id="EditProduvtCancelBtn">Cancel</button>


                                                </div>



                                            </div>

                                        </div>

                                    </div>

            </div>

        </form>

    </div>



    </div>



    </div>



    </div>

</body>

<script type="text/javascript" src="./script/Dashboard.js"></script>

</html>
