<?php

session_start();

include("includes/db.php");
include("functions/functions.php");

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

                                echo " <a href='logout.php'> Logout </a> ";

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

                    <img src="images/KLOOSZ1.png" alt="kloosz1 Logo" class="hidden-xs">
                    <img src="images/KLOOSZ2.png" alt="kloosz2 Logo Mobile" class="visible-xs">

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
    
