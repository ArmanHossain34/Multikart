<?php

$con = mysqli_connect("localhost", "root", "", "shop");
$query = "select * from product";
$data = mysqli_query($con, $query);


$watch = "select * from product where p_cat='watches'";
$watchdisplay = mysqli_query($con, $watch);

$Bluetooth = "select * from product where p_cat='Bluetooth-Speaker'";
$Bluetoothdisplay = mysqli_query($con, $Bluetooth);

$Camera = "select * from product where p_cat='Camera'";
$Cameradisplay = mysqli_query($con, $Camera);

$Headphones = "select * from product where p_cat='Headphones'";
$Headphonesdisplay = mysqli_query($con, $Headphones);


$Appliances = "select * from product where p_cat='Home Appliances'";
$Appliancesdisplay = mysqli_query($con, $Appliances);

$Smart = "select * from product where p_cat='Smart-Device'";
$Smartdisplay = mysqli_query($con, $Smart);


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/style.css">
    <link rel="stylesheet" href="asset/shop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;800&family=Poppins:ital,wght@0,300;0,400;0,600;1,400;1,600&display=swap" rel="stylesheet">
    <title>Shop</title>


<style>
    
.preloader-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #111;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all .4s ease;
    z-index: 100;
    
}

.fade-out-animation {
    opacity: 0;
    visibility: hidden;
}

</style>

</head>

<body onload="fahad2()">

<!-- Now Create a read preloader using this spinner -->
<div class="preloader-wrapper" id="pload">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;">
      <span class="visually-hidden">Loading...</span>
    </div>
</div>

<div id="id_main">


    <!--header start-->
    <section>

        <div class="header-all">

            <div class="header-top">
                <div class="container">
                    <div class="header-top-left">
                    <p class="text-white">Grave it now at<span class="read-more"> DIGI MART!    </span> </p>
                    </div>
                    <div class="header-top-right">
                    <p > <a href="login.php?status=login" class="text-white" ><i class="fa-solid fa-user"></i> Login </a> <a href="login.php" class="text-white"><i class="fa-solid fa-lock"></i> Register </a></p>
                    </div>
                </div>

            </div>

            <div class="header-bottom-background">


                <div class="header-bottom container">


                    <div class="logo">
                        <a href="index.php"><img src="asset/img/logo13.png" alt=""></a>
                    </div>
                    <div class="menu mt-3">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="shop.php">Shop</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact us</a></li>
                            <!-- <li><a href="upload.php">New Upload</a></li> -->
                        </ul>
                    </div>
                    <div class="icons">
                        <i class="fa-solid fa-heart"></i> <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a><i class="fa-solid fa-magnifying-glass"></i>
                    </div>



                </div>

            </div>


        </div>

    </section>
    <!--header end-->







    <!--shop  banner 1st row start-->
    <section class="shop-banner">
        <div class="shop-banner-content">

            <h2>Shop</h2>
            <p class="text-white"><a href="index.php">Home   </a>  | <a href="shop.php" class="shop-color">   Shop</a></p>
        </div>
    </section>
    <!--shop  banner end-->




    <!--shop 2nd row  start-->
    <section>



        <div class="shop-page-row container">
            <div class="shop-page-sidebar">

                <div class="shop-page-sidebar-row">



                    <!--input brand name-->
                    <div class="shoop-page-sid-brand">
                        <h2>BRAND</h2>
                        <ul>
                            <li><a href="cat-Watches.php">Watch</a></li>
                            <li><a href="cat-Smartdevice.php">Smart Device</a></li>
                            <li><a href="cat-Homeappliance.php">Home Appliance</a></li>
                            <li><a href="cat-headphones.php">Headphones</a></li>
                            <li><a href="cat-camera.php">Camera</a></li>
                            <li><a href="cat-bluetooth-speakers.php">Speakers</a></li>
                        </ul>
                    </div>





                    <!--input Color name & code-->


                    <div class="shoop-page-sid-color">
                        <h2>COLORS</h2>
                        <div class="checkbox-colors">
                            <div class="checkbox-colors-one white"></div>
                            <div class="checkbox-colors-one black"></div>
                            <div class="checkbox-colors-one red"></div>
                            <div class="checkbox-colors-one yellow"></div>
                            <div class="checkbox-colors-one green"></div>
                            <div class="checkbox-colors-one orange"></div>
                        </div>


                    </div>



                    <!--input size value-->

                    <div class="shoop-page-sid-size">
                        <h2>SIZE</h2>
                        <input type="checkbox" id="ss">
                        <label for="ss"> 10 inch.</label><br>

                        <input type="checkbox" id="sm">
                        <label for="sm"> 15 inch.</label><br>

                        <input type="checkbox" id="sl">
                        <label for="sl">20 inch.</label><br>

                        <input type="checkbox" id="as">
                        <label for="as">25 inch.</label><br>

                        <input type="checkbox" id="ad">
                        <label for="ad"> 30 inch.</label><br>

                        <input type="checkbox" id="af">
                        <label for="af"> 35 inch.</label><br>
                    </div>

                </div>


                <div class="shoop-page-sid-img">
                    <img src="asset/img/ad3.png" alt="">
                </div>


            </div>


            <div class="shop-page-products-all">


                <div class="top-pro-row">

                    <?php while ($result = mysqli_fetch_assoc($data)) { ?>

                        <a href="productdetails.php?p_id=<?php echo $result["p_id"]; ?>">

                            <div class="top-pro-col shop-pro-col">
                                <div class="top-pro-col-img">
                                    <img src="admin/pic/<?php echo $result["p_img"]; ?>" alt="">
                                </div>
                                <h2 class="pro-name"><?php echo $result["p_name"]; ?></h2>
                                <p class="pro-price">$<?php echo $result["p_price"]; ?></p>
                                <p class="pro-price"><?php echo $result["p_cat"]; ?></p>
                                
                            </div>

                        </a>

                    <?php } ?>

                </div>

            </div>
        </div>

    </section>
    <!--shop form end-->






    <!--footer start-->
    <!--footer start-->
    <footer class="ftgap">
        <div class="footer-row container">
            <div class="footer-col">
                <img src="asset/img/logo13.png" alt="">
                <!-- <p class="center">ANDSHOP is an multi-vendor B2C fast e-commerce company.</p> -->
                <div class="px-4 ml-4 mx-4 mt-4 text-white">
                <i class="fa-brands fa-facebook-f "></i><i class="fa-brands fa-instagram"></i><i class="fa-brands fa-linkedin"></i><i class="fa-brands fa-pinterest"></i>
                </div>
                
            </div>

            <div class="footer-col text-white">
                <h3>INFORMATION</h3>
                <ul>
                    <li><a class="text-white" href="#">Home</a></li>
                    <li><a class="text-white" href="#">About Us</a></li>
                    <li><a class="text-white" href="#">Private policy</a></li>


                </ul>
            </div>

            <div class="footer-col text-white">
                <h3>SHOP</h3>
                <ul>
                    <li><a class="text-white" href="#">JoyStick</a></li>
                    <li><a class="text-white" href="#">KeyBoard | Mouse</a></li>
          
                </ul>
            </div>



            <div class="footer-col text-white">
                <h3>NewsLetter</h3>
                <input type="email" placeholder="Your Mail">
                <button>Send email</button>
            </div>

        </div>
    </footer>
    </div>
    <!--footer end-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
var myVar;

function fahad2() {
  myVar = setTimeout(showPage, 500);
}

function showPage() {
  document.getElementById("pload").style.display = "none";
  document.getElementById("id_main").style.display = "block";
}
</script>
    
   
</body>

</html>