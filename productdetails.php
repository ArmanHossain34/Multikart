<!--shop & product page links-->
<?php
$p_id = $_GET['p_id'];
$con = mysqli_connect("localhost", "root", "", "shop");
$query = "select * from product where p_id='$p_id'";
$data = mysqli_query($con, $query);

$result = mysqli_fetch_assoc($data);


?>


<!--show products from database-->
<?php

$con = mysqli_connect("localhost", "root", "", "shop");
$query = "select * from product";
$data = mysqli_query($con, $query);


?>

<?php
$p_id = $_GET['p_id'];
$con = mysqli_connect("localhost", "root", "", "shop");
$query = "select * from product where p_id='$p_id'";
$data = mysqli_query($con, $query);

$result = mysqli_fetch_assoc($data);


//===============add to cart===============
if (isset($_GET['add_to_cart'])) {

    $cp_id = $_GET['cp_id'];
    $cp_price = $_GET['cp_price'];
    $cu_id = $_GET['cu_id'];
    $qty = $_GET['qty'];



    $query = "INSERT INTO temp_cart(qty,cp_price,cu_id,cp_product_id)values('$qty','$cp_price','$cu_id','$cp_id')";
    $data = mysqli_query($con, $query);
    if ($data) {
        echo "done";
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="40000">
    <link rel="stylesheet" href="asset/style.css">
    <link rel="stylesheet" href="asset/productdetails.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;800&family=Poppins:ital,wght@0,300;0,400;0,600;1,400;1,600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <!--header start-->
    <section>

        <div class="header-all">

            <!-- <div class="header-top">
                <div class="container">
                    <div class="header-top-left">
                        <p>Special collection already available.<span class="read-more">Read more...</span> </p>
                    </div>
                    <div class="header-top-right">
                        <p><i class="fa-solid fa-code-compare"></i> Compare <i class="fa-solid fa-user"></i> Login <i class="fa-solid fa-lock"></i> Register</p>
                    </div>
                </div>

            </div> -->

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
                        <i class="fa-solid fa-heart"></i><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a><i class="fa-solid fa-magnifying-glass"></i>
                    </div>



                </div>

            </div>


        </div>

    </section>
    <!--header end-->



    <!--shop  banner 1st row start-->
    <section class="product-banner">
        <div class="product-banner-content">

            <h2>Product Details</h2>
            <p><a href="index.php">Home</a> <i class="fa-solid fa-grip-lines-vertical"></i> <span class="text-white"> Details of <b><?php echo $result["p_name"]; ?></b> </span></p>
        </div>
    </section>
    <!--shop  banner end-->

    <!--product details start-->
    <section class="product-details-start">
        <div class="pro-details-row container">
            <div class="pro-details-col">

                <div class="pro-b-img">
                    <img id="imageBox" src="admin/pic/<?php echo $result["p_img"]; ?>" alt="">
                </div>

                <div class="pro-grp-img">

                    <div class="pro-grp-one">
                        <img src="admin/pic/<?php echo $result["p_img"]; ?>" alt="" onclick="myFunction(this)">
                    </div>
                    <div class="pro-grp-one">
                        <img src="asset/img/8.jpg" alt="" onclick="myFunction(this)">
                    </div>
                    <div class="pro-grp-one">
                        <img src="asset/img/watch.jpg" alt="" onclick="myFunction(this)">
                    </div>
                    <div class="pro-grp-one">
                        <img src="asset/img/5.jpg" alt="" onclick="myFunction(this)">
                    </div>

                </div>



            </div>
            <div class="pro-details-info">
                <h2> <?php echo $result["p_name"]; ?> </h2>
                <p>Category: <b><?php echo $result["p_cat"]; ?></b></p>
                <div class="pro-details-icons">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>

                    <span>(30 Customers reviews)</span>
                </div>

                <h3>$ <?php echo $result["p_price"]; ?> <strike> $ <?php echo $result["p_price"]; ?></strike></h3>
                <p> <?php echo $result["p_description"]; ?> </p>

                <div class="pro-size">

                    <select>
                        <option value="Select model">Select model</option>
                        <option value="32GB">32GB</option>
                        <option value="64GB">64GB</option>
                        <option value="128">128</option>
                        <option value="256GB">256GB</option>
                    </select>
                </div>
                <p><b>Color</b></p>

                <div class="pro-color">

                    <div class="pro-color-one red"></div>
                    <div class="pro-color-one green"></div>
                    <div class="pro-color-one blue"></div>
                </div>




                <form action="" method="get">


                    <div class="pro-input">
                        <i class="fa-solid fa-minus"></i><input type="number" name="qty" min="1" value="1"><i class="fa-solid fa-plus"></i>
                    </div>

                    <div class="input-hidden-item">
                        <input type="hidden" name="p_id" value="<?php echo $result['p_id']; ?>">
                        <input type="hidden" name="cp_id" value="<?php echo $result['p_id']; ?>">
                        
                        <input type="hidden" name="cp_price" value="<?php echo $result['p_price']; ?>">

                        <input type="hidden" name="cu_id" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
                    </div>

                    <div class="pro-wish-com">
                        <i class="fa-solid fa-heart"></i><span>Add to Wishlist</span> <i class="fa-solid fa-arrow-right-arrow-left"></i> <span>Add to Compare</span>
                    </div>

                    <div class="product-BUTTON">

                        <div class="pro-add-to-cart">
                            <input type="submit" name="add_to_cart" value="Add to cart">
                        </div>

                        <div class="pro-buy-now mt-3">
                            <a href="#">Buy Now</a>
                        </div>

                    </div>

                </form>



            </div>



        </div>

    </section>



    <!--product details end-->


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
    <!--footer end-->


    <!--js for gallery image slider-->
    <script>
        function myFunction(smallImg) {
            var fullImg = document.getElementById("imageBox")
            fullImg.src = smallImg.src;
        }
    </script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>