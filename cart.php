<?php

$ip=$_SERVER['REMOTE_ADDR'];


$con=mysqli_connect("localhost","root","","shop");

$query="select * from temp_cart where cu_id='$ip'";
$data=mysqli_query($con,$query);



//=======================delete=====


if(isset($_GET['btndelete']))
{
    $query="DELETE FROM temp_cart where cp_id='$_GET[did]' ";
    if (mysqli_query($con, $query)) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . mysqli_error($con);
      }

}
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="">
    <link rel="stylesheet" href="asset/style.css">
    <link rel="stylesheet" href="asset/cart.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;800&family=Poppins:ital,wght@0,300;0,400;0,600;1,400;1,600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body class="mt-0">
    <!--header start-->
    <section>

        <div class="header-all">

            <<div class="header-top">
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
                                <li><a href="upload.php">New Upload</a></li>
                            </ul>
                        </div>
                        <div class="icons">
                            <i class="fa-solid fa-heart"></i> <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a> <i class="fa-solid fa-magnifying-glass"></i>
                        </div>

                    

                </div>

            </div>


        </div>

    </section>
   <!--header end-->

    <div class="kamrul-cart container">
        <h2>Cart</h2>
        <table border="1px" width="100%">

            <tr>
            <th> cp_product_id</th>
            <th>cp_price </th>
            <th> Qty</th>
            <th> Total price</th>
            <th> Action</th>

            </tr>

            <?php 
                $amount1=0;
                $user=0;
                while($result= mysqli_fetch_assoc($data)){

            ?>

            <tr>
            <td> <?php echo $result["cp_product_id"];?></td>
            
            <td> <?php echo $result["cp_price"];?> </td>

            <td> <?php echo $result["qty"];?></td>

            <td> <?php  $amount=$result["qty"]* $result["cp_price"]; echo $amount;?></td>
            
            <td> <a href="?btndelete=del&did=<?php echo $result["cp_id"];?>">  <i class="fa-solid fa-calendar-xmark"></i></a></td>
            </tr>


            <?php
            $amount1+=$amount;
            
            } ?>

            <tr>
            <td colspan="3"> Total Price </td>

            <td colspan="2"><?php echo $amount1;?> </td>

            </tr>

        </table>
        <div class="kamrul-cart-btn">
            <a href="stripe/index.php?user=<?php echo $user;?>&amount=<?php echo $amount1;?>"> pay </a>
        </div>
    
    
    </div>

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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>