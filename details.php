 <?php

session_start();

$active='Cart';

include("includes/db.php");
include("functions/functions.php");

?>

<?php 
    
    $product_id = $_GET['pro_id'];
    
    $get_product = "select * from products where product_url='$product_id'";
    
    $run_product = mysqli_query($con,$get_product);

    $check_product = mysqli_num_rows($run_product);

    if($check_product == 0){

        echo "<script>window.open('index.php','_self')</script>";

    }else{
    
    $row_products = mysqli_fetch_array($run_product);
    
    $p_cat_id = $row_products['p_cat_id'];
    
    $pro_title = $row_products['product_title'];
    
    $pro_price = $row_products['product_price'];

    $pro_sale_price = $row_products['product_sale'];
    
    $pro_desc = $row_products['product_desc'];
    
    $pro_img1 = $row_products['product_img1'];
    
    $pro_img2 = $row_products['product_img2'];
    
    $pro_img3 = $row_products['product_img3'];
        
    $pro_label = $row_products['product_label'];

    if($pro_label == ""){

    }else{

        $product_label = "
        
            <a href='#' class='label $pro_label'>
            
                <div class='theLabel'> $pro_label </div>
                <div class='labelBackground'>  </div>
            
            </a>
        
        ";

    }
    
    $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
    
    $run_p_cat = mysqli_query($con,$get_p_cat);
    
    $row_p_cat = mysqli_fetch_array($run_p_cat);
    
    $p_cat_title = $row_p_cat['p_cat_title'];

?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Kloosz</title>
     <link rel="stylesheet" href="styles/bootstrap-337.min.css">
     <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
     <link rel="stylesheet" href="styles/style.css">
 </head>

 <body>
     <!-- Top -->
     <div id="top">

         <div class="container">

             <div class="col-md-6 offer">

                 <a href="#" class="btn btn-success btn-sm">

                     <?php 
                   
                   if(!isset($_SESSION['customer_email'])){
                       
                       echo "Welcome: Guest";
                       
                   }else{
                       
                       echo "Welcome: " . $_SESSION['customer_email'] . "";
                       
                   }
                   
                   ?>

                 </a>
                 <a href="checkout.php"><?php items(); ?> Items In Your Cart | Total Price: <?php total_price(); ?> </a>

             </div>

             <div class="col-md-6">

                 <ul class="menu">

                     <li>
                         <a href="customer_register.php">Register</a>
                     </li>
                     <li>
                         <a href="checkout.php">My Account</a>
                     </li>
                     <li>
                         <a href="cart.php">Go To Cart</a>
                     </li>
                     <li>
                         <a href="checkout.php">

                             <?php 
                   
                            if(!isset($_SESSION['customer_email'])){
                       
                                echo "<a href='checkout.php'> Login </a>";
                       
                                }else{
                       
                                echo "<a href='logout.php'> Logout </a>";
                       
                                }
                   
                            ?>

                         </a>
                     </li>

                 </ul>

             </div>

         </div>

     </div>
     <!-- Top End -->

     <!-- Navbar -->
     <div id="navbar" class="navbar navbar-default">

         <div class="container">

             <div class="navbar-header">

                 <a href="index.php" class="navbar-brand home">

                     <img src="images/KLOOSZ1.png" alt="melisan1 Logo" class="hidden-xs">
                     <img src="images/KLOOSZ2.png" alt="melisan2 Logo Mobile" class="visible-xs">

                 </a>

                 <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                     <span class="sr-only">Toggle Navigation</span>

                     <i class="fa fa-align-justify"></i>

                 </button>

                 <button class="navbar-toggle" data-toggle="collapse" data-target="#search">

                     <span class="sr-only">Toggle Search</span>

                     <i class="fa fa-search"></i>

                 </button>

             </div>

             <div class="navbar-collapse collapse" id="navigation">

                 <div class="padding-nav">

                     <ul class="nav navbar-nav left">

                         <li class="<?php if ($active=='Home') echo"active"; ?>">
                             <a href="index.php">Home</a>
                         </li>
                         <li class="<?php if ($active=='Shop') echo"active"; ?>">
                             <a href="shop.php">Shop</a>
                         </li>
                         <li class="<?php if ($active=='Account') echo"active"; ?>">

                             <?php
                            
                            if(!isset($_SESSION['customer_email'])){
                                
                                echo"<a href='checkout.php'>My Account</a>";
                                
                            }else{
                                
                                echo"<a href='customer/my_account.php?my_orders'>My Account</a>";    
                                
                            }
                            
                            ?>

                         </li>
                         <li class="<?php if ($active=='Cart') echo"active"; ?>">
                             <a href="cart.php">Shopping Cart</a>
                         </li>
                         <li class="<?php if ($active=='Contact') echo"active"; ?>">
                             <a href="contact.php">Contact Us</a>
                         </li>

                     </ul>

                 </div>

                 <a href="cart.php" class="btn navbar-btn btn-primary right">

                     <i class="fa fa-shopping-cart"></i>

                     <span><?php items(); ?> Items In Your Cart</span>

                 </a>

                 <div class="navbar-collapse collapse right">

                     <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">

                         <span class="sr-only">Toggle Search</span>

                         <i class="fa fa-search"></i>

                     </button>

                 </div>

                 <div class="collapse clearfix" id="search">

                     <form method="get" action="results.php" class="navbar-form">

                         <div class="input-group">

                             <input type="text" class="form-control" placeholder="Search" name="user_query" required>

                             <span class="input-group-btn">

                                 <button type="submit" name="search" value="Search" class="btn btn-primary">

                                     <i class="fa fa-search"></i>

                                 </button>

                             </span>

                         </div>

                     </form>

                 </div>

             </div>

         </div>

     </div>
     <!-- Navbar End -->

     <div id="content">
         <div class="container">
             <div class="col-md-12">

                 <ul class="breadcrumb">
                     <li>
                         <a href="index.php">Home</a>
                     </li>
                     <li>
                         Shop
                     </li>

                     <li>
                         <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"> <?php echo $p_cat_title ?></a>
                     </li>
                     <li> <?php echo $pro_title ?> </li>
                 </ul>

             </div>

             <div class="col-md-12">
                 <div id="productMain" class="row">
                     <div class="col-sm-6">
                         <div id="mainImage">
                             <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                 <ol class="carousel-indicators">
                                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                     <li data-target="#myCarousel" data-slide-to="1"></li>
                                     <li data-target="#myCarousel" data-slide-to="2"></li>
                                 </ol>

                                 <div class="carousel-inner">
                                     <div class="item active">
                                         <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="Product 3-a"></center>
                                     </div>
                                     <div class="item">
                                         <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="Product 3-b"></center>
                                     </div>
                                     <div class="item">
                                         <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="Product 3-c"></center>
                                     </div>
                                 </div>

                                 <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                     <span class="glyphicon glyphicon-chevron-left"></span>
                                     <span class="sr-only">Previous</span>
                                 </a>

                                 <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                     <span class="glyphicon glyphicon-chevron-right"></span>
                                     <span class="sr-only">Next</span>
                                 </a>

                             </div>
                         </div>

                         <?php echo $product_label ?>

                     </div>

                     <div class="col-sm-6">
                         <div class="box">
                             <h1 class="text-center"> <?php echo $pro_title; ?> </h1>

                             <?php add_cart(); ?>

                             <form action="details.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post">
                                 <div class="form-group">
                                     <label for="" class="col-md-5 control-label">Products Quantity</label>

                                     <div class="col-md-7">
                                         <select name="product_qty" id="" class="form-control">
                                             <option>1</option>
                                             <option>2</option>
                                             <option>3</option>
                                             <option>4</option>
                                             <option>5</option>
                                         </select>

                                     </div>

                                 </div>

                                 <div class="form-group">
                                     <label class="col-md-5 control-label">Product Size</label>

                                     <div class="col-md-7">

                                         <select name="product_size" class="form-control" required oninput="setCustomValidity('')" oninvalid="setCustomValidity('Must pick 1 size for the product')">

                                             <option disabled selected>Select a Size</option>
                                             <option>Small</option>
                                             <option>Medium</option>
                                             <option>Large</option>

                                         </select>

                                     </div>
                                 </div>

                                 <?php
                               
                               if($pro_label == "sale"){
                                   
                                   echo "
                                   
                                        <p class='price'>

                                            <del>Rp $pro_price</del><br/>

                                            Rp $pro_sale_price

                                        </p>
                                    
                                    ";

                                }else{
                                   
                                   echo "

                                    <p class='price'>

                                            Rp $pro_price

                                        </p>
                                    
                                    ";

                                }
                               
                               ?>

                                 <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>

                             </form>

                         </div>

                         <div class="row" id="thumbs">

                             <div class="col-xs-4">
                                 <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                                     <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="product 1" class="img-responsive">
                                 </a>
                             </div>

                             <div class="col-xs-4">
                                 <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                                     <img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="product 2" class="img-responsive">
                                 </a>
                             </div>

                             <div class="col-xs-4">
                                 <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                                     <img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="product 4" class="img-responsive">
                                 </a>
                             </div>

                         </div>

                     </div>


                 </div>

                 <div class="box" id="details">

                     <h4>Product Details</h4>

                     <p>

                         <?php echo $pro_desc; ?>

                     </p>

                     <h4>Size</h4>

                     <ul>
                         <li>Small</li>
                         <li>Medium</li>
                         <li>Large</li>
                     </ul>

                     <hr>

                 </div>

                 <div id="row same-heigh-row">
                     <div class="col-md-3 col-sm-6">
                         <div class="box same-height headline">
                             <h3 class="text-center">Products You May Like</h3>
                         </div>
                     </div>

                     <?php 
                   
                    $get_products = "select * from products order by rand() LIMIT 0,3";
                   
                    $run_products = mysqli_query($con,$get_products);
                   
                   while($row_products=mysqli_fetch_array($run_products)){
                       
                    $pro_id = $row_products['product_id'];
        
                    $pro_title = $row_products['product_title'];

                    $pro_price = $row_products['product_price'];

                    $pro_sale_price = $row_products['product_sale'];
                       
                    $pro_url = $row_products['product_sale'];

                    $pro_img1 = $row_products['product_img1'];

                    $pro_label = $row_products['product_label'];

                    $manufacturer_id = $row_products['manufacturer_id'];

                    $get_manufacturer = "select * from manufacturers where manufacturer_id='$manufacturer_id'";
        
                    $run_manufacturer = mysqli_query($db,$get_manufacturer);

                    $row_manufacturer = mysqli_fetch_array($run_manufacturer);

                    $manufacturer_title = $row_manufacturer['manufacturer_title'];
        
                    if($pro_label == "sale"){

                        $product_price = " <del> Rp $pro_price </del> ";

                        $product_sale_price = "/ Rp $pro_sale_price ";

                    }else{

                        $product_price = " Rp $pro_price ";

                        $product_sale_price = "";

                    }


                    if($pro_label == ""){

                    }else{

                        $product_label = "

                            <a href='#' class='label $pro_label'>

                                <div class='theLabel'> $pro_label </div>
                                <div class='labelBackground'>  </div>

                            </a>

                        ";

                    }
        
                    echo "

                    <div class='col-md-3 col-sm-6 center-responsive'>
                        <div class='product'>
                            <a href='details.php?pro_id=$pro_url'>
                                <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                            </a>
                            <div class='text'>

                            <center>

                                <p class='btn btn-primary'> $manufacturer_title <p/>

                            </center>    

                                <h3>
                                    <a href='details.php?pro_id=$pro_url'>
                                        $pro_title
                                    </a>
                                </h3>

                                <p class='price'>

                                    $product_price &nbsp;$product_sale_price

                                </p>

                                <p class='button'>

                                    <a class='btn btn-defaul' href='details.php?pro_id=$pro_url'>
                                        View Details 
                                    </a>

                                    <a class='btn btn-primary' href='details.php?pro_id=$pro_url'>
                                        <i class='fa fa-shopping-cart'></i> Add to Cart
                                    </a>
                                </p>

                            </div>

                            $product_label

                        </div>
                    </div>

                    ";   
                   
                   }
                   ?>

                 </div>

             </div>

         </div>
     </div>

     <?php 
    
    include("includes/footer.php");
    
    ?>

     <script src="js/jquery-331.min.js"></script>
     <script src="js/bootstrap-337.min.js"></script>


 </body>
 </html>
 <?php } ?>
