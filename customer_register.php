<?php 

    $active='Account';
    include("includes/header.php");

?>

<!-- content -->
<div id="content">
    <div class="container">
        <div class="col-md-12">

            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    Register
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
                <div class="box-header">
                    <center>
                        <h2> Register a new account</h2>
                        <p class="text-muted">
                            If you have any questions. feel free to contact us. Our Customer Service work <strong>24/7</strong>
                        </p>
                    </center>
                    
                    <form action="customer_register.php" method="post" enctype="multipart/form-data">
                       
                        <!-- form group register -->
                        <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" class="form-control" name="c_name" required>
                        </div>
                        <!-- form group register end -->
                        
                        <!-- form group email -->
                        <div class="form-group">
                            <label>Your Email</label>
                            <input type="text" class="form-control" name="c_email" required>
                        </div>
                        <!-- form group email end -->
                        
                        <!-- form group password -->
                        <div class="form-group">
                            <label>Your Password</label>
                            <input type="password" class="form-control" name="c_pass" required>
                        </div>
                        <!-- form group password end -->
                        
                        <!-- form group country -->
                        <div class="form-group">
                            <label>Your Country</label>
                            <input type="text" class="form-control" name="c_country" required>
                        </div>
                        <!-- form group country end -->
                        
                        <!-- form group city -->
                        <div class="form-group">
                            <label>Your City</label>
                            <input type="text" class="form-control" name="c_city" required>
                        </div>
                        <!-- form group city end -->
                        
                        <!-- form group contact -->
                        <div class="form-group">
                            <label>Your Contact</label>
                            <input type="text" class="form-control" name="c_contact" required>
                        </div>
                        <!-- form group contact end -->
                        
                        <!-- form group address -->
                        <div class="form-group">
                            <label>Your Address</label>
                            <input type="text" class="form-control" name="c_address" required>
                        </div>
                        <!-- form group address end -->
                        
                        <!-- form group profile picture -->
                        <div class="form-group">
                            <label>Your Profile Picture</label>
                            <input type="file" class="form-control form-height-custom" name="c_image" required>
                        </div>
                        <!-- form group profile picture end -->
                        
                        <!-- register submit -->
                        <div class="text-center">
                            <button type="submit" name="register" class="btn btn-primary">
                                <i class="fa fa-user-md"></i> Register
                            </button>
                        </div>
                        <!-- register submit end -->
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- content end -->

<?php 
    
    include("includes/footer.php");
    
    ?>

<!-- Content End -->


<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>


</body>

</html>


<?php 

if(isset($_POST['register'])){
    
    $c_name = $_POST['c_name'];
    
    $c_email = $_POST['c_email'];
    
    $c_pass = $_POST['c_pass'];
    
    $c_country = $_POST['c_country'];
    
    $c_city = $_POST['c_city'];
    
    $c_contact = $_POST['c_contact'];
    
    $c_address = $_POST['c_address'];
    
    $c_image = $_FILES['c_image']['name'];
    
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    
    $c_ip = getRealIpUser();
    
    move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
    
    $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";
    
    $run_customer = mysqli_query($con,$insert_customer);
    
    $sel_cart = "select * from cart where ip_add='$c_ip'";
    
    $run_cart = mysqli_query($con,$sel_cart);
    
    $check_cart = mysqli_num_rows($run_cart);
    
    if($check_cart>0){
        
        /// If register have items in cart ///
        
        $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('You have been Registered Sucessfully')</script>";
        
        echo "<script>window.open('checkout.php','_self')</script>";
        
    }else{
        
        /// If register without items in cart ///
        
        $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('You have been Registered Sucessfully')</script>";
        
        echo "<script>window.open('index.php','_self')</script>";
        
    }
    
}

?>
