<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="">
    <link rel="stylesheet" href="asset/style.css">
    <link rel="shortcut icon" href="asset/img/logo1.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;800&family=Poppins:ital,wght@0,300;0,400;0,600;1,400;1,600&display=swap" rel="stylesheet">
    <title>DIGIMART</title>
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


<body onload="fahad()">

<!-- Now Create a read preloader using this spinner -->
<div class="preloader-wrapper" id="pload">
    <div class="spinner-grow text-primary" style="width: 3rem;height: 3rem;">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>
<div id="id_main">
    <!--header start-->
    <section class="topspace">

        <div class="header-all">

            <div class="header-top">
                <div class="container">
                    <div class="header-top-left">
                        <p class="text-white">Grave it now at<span class="read-more"> DIGI MART!    </span> </p>
                    </div>
                    <div class="header-top-right">
                        <p > <a href="login.php?status=login" class="text-white" ><i class="fa-solid fa-user"></i> Login </a> </p><p> <a href="login.php" class="text-white"><i class="fa-solid fa-lock"></i> Register </a></p>
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
                            <i class="fa-solid fa-heart"></i><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a><i class="fa-solid fa-magnifying-glass"></i>
                        </div>

                    

                </div>

            </div>


        </div>

    </section>
   <!--header end-->
<section>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="asset/img/order2.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="asset/img/order1.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="asset/img/order3.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
    <!--banner start-->
    <section class="banner mt-4 center">
        <div class="banner-content container">
            <!-- <h2>Collection <span>Headphone</span></h2>
            <h4>Introducing Apple Watch Series 4</h4> -->
            <a href="shop.php">Shop Now</a>
        </div>
    </section>
     <!--banner end-->

    <!--feature-banner start-->
    <section class="sec-pad">
        <div class="feature-banner-row container">
            <div class="feature-banner-row-left">
                <a href="shop.php"><img src="asset/img/set2.png" alt=""></a>
            </div>
            <div class="feature-banner-row-right">
                <a href="shop.php"><img src="asset/img/setC1.png" alt=""></a>
                <a href="shop.php"><img src="asset/img/setC2.png" alt=""></a>
            </div>
        </div>
    </section>
    <!--ffeature-banner end-->

    <!--feature-icon start-->
    <section class="container sec-pad">
        <div class="feature-icon-row">
            <div class="feature-icon-col">
                <div class="feature-icon-col-left">
                    <i class="fa-solid fa-truck"></i>
                </div>
                <div class="feature-icon-col-right">
                    <h4>Free Shipping</h4>
                    <p>On all orders over $75.00</p>
                </div>
            </div>

            <div class="feature-icon-col">
                <div class="feature-icon-col-left">
                    <i class="fa-solid fa-globe"></i>
                </div>
                <div class="feature-icon-col-right">
                    <h4>Free Returns</h4>
                    <p>Returns are free within 9 days</p>
                </div>
            </div>


            <div class="feature-icon-col">
                <div class="feature-icon-col-left">
                <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <div class="feature-icon-col-right">
                    <h4>Support 24/7</h4>
                    <p>Contact us 24 hours a day</p>
                </div>
            </div>


            <div class="feature-icon-col">
                <div class="feature-icon-col-left">
                <i class="fa-solid fa-envelope-open-text"></i>
                </div>
                <div class="feature-icon-col-right">
                    <h4>Free Shipping</h4>
                    <p>On all orders over $75.00</p>
                </div>
            </div>
        </div>
    </section>
    <!--feature-icon end-->

    <!--top product start-->
    <section class="container sec-pad">

        <div class="top-pro-row">
            <h2 class="font-weight-bold">TOP PRODUCTS</h2>
        </div>

        <div class="top-pro-row">
            <div class="top-pro-col">
                <div class="top-pro-col-img">
                    <img src="asset/img/1.jpg" alt="">
                </div>
                <h2 class="pro-name">Movie Projector HD Outdoor</h2>
                <p class="pro-price">$334.00</p>
            </div>

            <div class="top-pro-col">
                <div class="top-pro-col-img">
                    <img src="asset/img/watch.jpg" alt="">
                </div>
                <h2 class="pro-name">Movie Projector HD Outdoor</h2>
                <p class="pro-price">$334.00</p>
            </div>


            <div class="top-pro-col">
                <div class="top-pro-col-img">
                    <img src="asset/img/pot.jpg" alt="">
                </div>
                <h2 class="pro-name">Movie Projector HD Outdoor</h2>
                <p class="pro-price">$334.00</p>
            </div>


            <div class="top-pro-col">
                <div class="top-pro-col-img">
                    <img src="asset/img/watches.jpg" alt="">
                </div>
                <h2 class="pro-name">Movie Projector HD Outdoor</h2>
                <p class="pro-price">$334.00</p>
            </div>
        </div>


        <div class="top-pro-row">
            <div class="top-pro-col">
                <div class="top-pro-col-img">
                    <img src="asset/img/4.jpg" alt="">
                </div>
                <h2 class="pro-name">Movie Projector HD Outdoor</h2>
                <p class="pro-price">$334.00</p>
            </div>

            <div class="top-pro-col">
                <div class="top-pro-col-img">
                    <img src="asset/img/5.jpg" alt="">
                </div>
                <h2 class="pro-name">Movie Projector HD Outdoor</h2>
                <p class="pro-price">$334.00</p>
            </div>


            <div class="top-pro-col">
                <div class="top-pro-col-img">
                    <img src="asset/img/6.jpg" alt="">
                </div>
                <h2 class="pro-name">Movie Projector HD Outdoor</h2>
                <p class="pro-price">$334.00</p>
            </div>


            <div class="top-pro-col">
                <div class="top-pro-col-img">
                    <img src="asset/img/7.jpg" alt="">
                </div>
                <h2 class="pro-name">Movie Projector HD Outdoor</h2>
                <p class="pro-price">$334.00</p>
            </div>
        </div>

    </section>

    <!--top product end-->

    <!--atom sound start-->
    <section class="atom-sound">
        <div class="atom-sound-row container">
            <div class="atom-sound-content">
                <!-- <h2>DOLBY ATMOS<br>SOUND FEATURE</h2>
                <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p> -->
            </div>
        </div>


        <!-- <div class="atom-sound-row atom-sound-content container">
            <div class="atom-sound-col">
                <i class="fa-brands fa-bluetooth-b"></i>
                <h4>Bluetooth <br>Enabled device</h4>
            </div>

            <div class="atom-sound-col">
                <i class="fa-solid fa-wifi"></i>
                <h4>Bluetooth <br>Enabled device</h4>
            </div>


            <div class="atom-sound-col">
                <i class="fa-solid fa-battery-three-quarters"></i>
                <h4>Bluetooth <br>Enabled device</h4>
            </div> -->


            <!-- <div class="atom-sound-col">
                <i class="fa-solid fa-volume-high"></i>
                <h4>Bluetooth <br>Enabled device</h4>
            </div> -->

            
        </div>
    </section>
    <!--atom sound end-->

    <!--DEAL PRODUCTS start-->
    <section class="container sec-pad">

        <div class="top-pro-row">
            <h2>DEAL PRODUCTS</h2>
        </div>

        <div class="top-pro-row">

            <div class="top-pro-col">
                <div class="top-pro-col-img">
                    <img src="asset/img/spc2.png" alt="">
                </div>
                <h2 class="pro-name">Movie Projector HD Outdoor</h2>
                <p class="pro-price">$334.00</p>
            </div>

            <div class="top-pro-col">
                <div class="top-pro-col-img">
                    <img src="asset/img/spt3.png" alt="">
                </div>
                <h2 class="pro-name">Movie Projector HD Outdoor</h2>
                <p class="pro-price">$334.00</p>
            </div>


            <div class="top-pro-col">
                <div class="top-pro-col-img">
                    <img src="asset/img/spt4.png" alt="">
                </div>
                <h2 class="pro-name">Movie Projector HD Outdoor</h2>
                <p class="pro-price">$334.00</p>
            </div>


            <div class="top-pro-col">
                <div class="top-pro-col-img">
                    <img src="asset/img/spt1.png" alt="">
                </div>
                <h2 class="pro-name">Movie Projector HD Outdoor</h2>
                <p class="pro-price">$334.00</p>
            </div>
        </div>

    </section>
    <!--DEAL PRODUCTS end-->

    <!--footer start-->
    <footer class="ftgap">
        <div class="footer-row container">
            <div class="footer-col footer_logo">
                <img src="asset/img/logo13.png" alt="">
                <!-- <p class="center">ANDSHOP is an multi-vendor B2C fast e-commerce company.</p> -->
                <div class="px-4 ml-4 mx-4 mt-4 text-white">
                <i class="fa-brands fa-facebook-f "></i><i class="fa-brands fa-instagram"></i><i class="fa-brands fa-linkedin"></i><i class="fa-brands fa-pinterest"></i>
                </div>
                
            </div>

            <div class="footer-col first_info text-white">
                <h3 class="info1">INFORMATION</h3>
                <ul>
                    <li><a class="text-white" href="#">Home</a></li>
                    <li><a class="text-white" href="#">About Us</a></li>
                    <li><a class="text-white" href="#">Private policy</a></li>


                </ul>
            </div>

            <div class="footer-col second_col text-white">
                <h3>SHOP</h3>
                <ul>
                    <li><a class="text-white" href="#">JoyStick</a></li>
                    <li><a class="text-white" href="#">KeyBoard | Mouse</a></li>
          
                </ul>
            </div>



            <div class="footer-col last_col text-white">
                <h3>NewsLetter</h3>
                <input type="email" placeholder="digimart@gmail">
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

function fahad() {
  myVar = setTimeout(showPage, 1500);
}

function showPage() {
  document.getElementById("pload").style.display = "none";
  document.getElementById("id_main").style.display = "block";
}
</script>
    
    
</body>
</html>