<?php 

session_start();

if(!isset($_SESSION['customer_email'])){
    
    echo "<script>window.open('../checkout.php','_self')</script>";
    
}else{

include("includes/db.php");
include("functions/functions.php");
    
if(isset($_GET['order_id'])){
    
    $order_id = $_GET['order_id'];
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Melisan</title>
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
                <a href="checkout.php"> <?php items(); ?> Items In Your Cart | Total Price: <?php total_price(); ?> </a>

            </div>

            <div class="col-md-6">

                <ul class="menu">

                    <li>
                        <a href="../customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="my_account.php">My Account</a>
                    </li>
                    <li>
                        <a href="../cart.php">Go To Cart</a>
                    </li>
                    <li>
                        <a href="../checkout.php">
                        
                        <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                       
                                echo "<a href='checkout.php'> Login </a>";

                               }else{

                                echo " <a href='logout.php'> Log Out </a> ";

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

                <a href="../index.php" class="navbar-brand home">

                    <img src="images/melisanlogo1.jpg" alt="melisan1 Logo" class="hidden-xs">
                    <img src="images/melisanlogo2.jpg" alt="melisan2 Logo Mobile" class="visible-xs">

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

                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a href="../shop.php">Shop</a>
                        </li>
                        <li class="active">
                            <a href="my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="../cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="../contact.php">Contact Us</a>
                        </li>

                    </ul>

                </div>

                <a href="../cart.php" class="btn navbar-btn btn-primary right">

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
                       My Account
                   </li>
               </ul>
               
           </div>
           
           <div class="col-md-3">
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div>
           
           <div class="col-md-9">
               
               <div class="box">
                   
                   <h1 align="center"> Please confirm your payment</h1>
                   
                   <form action="confirm.php?update_id=<?php echo $order_id;  ?>" method="post" enctype="multipart/form-data">
                       
                       <div class="form-group">
                           
                         <label> Invoice No: </label>
                          
                          <input type="text" class="form-control" name="invoice_no" required>
                           
                       </div>
                       
                       <div class="form-group">
                           
                         <label> Amount Sent: </label>
                          
                          <input type="text" class="form-control" name="amount_sent" required>
                           
                       </div>
                       
                       <div class="form-group">
                           
                         <label> Select Payment Mode: </label>
                          
                          <select name="payment_mode" class="form-control">
                              
                              <option> Select Payment Mode </option>
                              <option> Back Code </option>
                              <option> Paypal </option>
                              <option> Easy Paisa </option>
                              <option> Western Union </option>
                              
                          </select>
                           
                       </div>
                       
                       <div class="form-group">
                           
                         <label> Transaction / Reference ID: </label>
                          
                          <input type="text" class="form-control" name="ref_no" required>
                           
                       </div>
                       
                       <div class="form-group">
                           
                         <label> Omni Paisa / Easy Paisa: </label>
                          
                          <input type="text" class="form-control" name="code" required>
                           
                       </div>
                       
                       <div class="form-group">
                           
                         <label> Payment Date: </label>
                          
                          <input type="text" class="form-control" name="date" required>
                           
                       </div>
                       
                       <div class="text-center">
                           
                           <button class="btn btn-primary btn-lg">
                               
                               <i class="fa fa-user-md"></i> Confirm Payment
                               
                           </button>
                           
                       </div>
                       
                   </form>
                   
                   <?php 
                   
                    if(isset($_POST['confirm_payment'])){
                        
                        $update_id = $_GET['update_id'];
                        
                        $invoice_no = $_POST['invoice_no'];
                        
                        $amount = $_POST['amount_sent'];
                        
                        $payment_mode = $_POST['payment_mode'];
                        
                        $ref_no = $_POST['ref_no'];
                        
                        $code = $_POST['code'];
                        
                        $payment_date = $_POST['date'];
                        
                        $complete = "Complete";
                        
                        $insert_payment = "insert into payments (invoice_no,amount,payment_mode,ref_no,code,payment_date) values ('$invoice_no','$amount','$payment_mode','$ref_no','$code','$payment_date')";
                        
                        $run_payment = mysqli_query($con,$insert_payment);
                        
                        $update_customer_order = "update customer_orders set order_status='$complete' where order_id='$update_id'";
                        
                        $run_customer_order = mysqli_query($con,$update_customer_order);
                        
                        $update_pending_order = "update pending_orders set order_status='$complete' where order_id='$update_id'";
                        
                        $run_pending_order = mysqli_query($con,$update_pending_order);
                        
                        if($run_pending_order){
                            
                            echo "<script>alert('Terima kasih, pesanan Anda akan di proses 1x24 jam')</script>";
                            
                            echo "<script>window.open('my_account.php?my_orders','_self')</script>";
                            
                        }
                        
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