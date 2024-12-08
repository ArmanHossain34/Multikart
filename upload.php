<?php


$con = mysqli_connect("localhost", "root", "", "shop");
if (!$con) {
    echo "error";
}
if (isset($_POST['p_button'])) {

    $Name = $_POST['p_name'];

    $price = $_POST['p_price'];
    $description = $_POST['p_description'];
    $p_cat = $_POST['p_cat'];



    $t_name = $_FILES['p_img']['tmp_name'];
    $file_name = $_FILES['p_img']['name'];


    move_uploaded_file($t_name, "admin/pic/$file_name");

    $query = "insert into product(p_name,p_description,p_img,p_price,p_cat)values('$Name','$description','$file_name','$price','$p_cat')";
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
    <meta http-equiv="refresh" content="">
    <link rel="stylesheet" href="asset/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/upload.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;800&family=Poppins:ital,wght@0,300;0,400;0,600;1,400;1,600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <!--header start-->
    <section>

        <div class="header-all">

            <div class="header-top">
                <div class="container">
                    <div class="header-top-left">
                    <p class="text-white">Grave it now at<span class="read-more"> DIGI MART!    </span> </p>
                    </div>
                    <div class="header-top-right">
                        <p><a class="text-white" href="login.php"><i class="fa-solid fa-user"></i> Logout</a>  </p>
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
                            <li><a href="#">Product Page</a></li>
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



    <div class="form-background-list">
        <div class="form-background">

            <div class="form-list">

                <!--upload form start-->
                <form action="" method="POST" enctype="multipart/form-data mt-2 mb-2">

                    <label class="text2" for="category">Product Category</label><br>
                    <input id="category" type="text" name="p_cat"><br>

                    <label class="text2" for="name">Name</label><br>
                    <input id="name" type="text" name="p_name"><br>

                    <label class="text2" for="price">Price</label><br>
                    <input id="price" type="number" name="p_price"><br>

                    <label class="text2" for="image">Image</label><br>
                    <input class="text-white" type="file" id="image" name="p_img"><br>

                    <label class="text2" for="description">Product Long description</label><br>
                    <input type="text" id="description" name="p_description"><br>

                    <input type="submit" value="Upload" name="p_button">
                </form>
                <!--upload form end-->
            </div>

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