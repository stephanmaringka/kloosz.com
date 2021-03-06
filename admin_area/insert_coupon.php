<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert Coupons </title>
</head>
<body>
    
<div class="row">
    
    <div class="col-lg-12">
        
        <ol class="breadcrumb">
            
            <li class="active">
                
                <i class="fa fa-dashboard"></i> Dashboard / Insert Coupons
                
            </li>
            
        </ol>
        
    </div>
    
</div>
       
<div class="row">
    
    <div class="col-lg-12">
        
        <div class="panel panel-default">
            
           <div class="panel-heading">
               
               <h3 class="panel-title">
                   
                   <i class="fa fa-money fa-fw"></i> Insert Coupons 
                   
               </h3>
               
           </div>
           
           <div class="panel-body">
               
               <form method="post" class="form-horizontal">
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Coupon Title </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="coupon_title" type="text" class="form-control" required>
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Coupon Price </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="coupon_price" type="text" class="form-control" required>
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Coupon Limit </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="coupon_limit" type="number" class="form-control" value="1">
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Select Product </label> 
                      
                      <div class="col-md-6">
                          
                          <select name="product_id" class="form-control" required>
                          
                            <option selected disabled>Select Product For Coupon</option>

                            <?php 
                            
                                $get_p = "select * from products";
                                $run_p = mysqli_query($con,$get_p);

                                while($row_p = mysqli_fetch_array($run_p)){

                                    $p_id = $row_p['product_id'];
                                    $p_title = $row_p['product_title'];

                                    echo "<option value='$p_id'>$p_title</option>";

                                }
                            
                            ?>
                          
                          </select>
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Coupon Code </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="coupon_code" type="text" class="form-control" required>
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6">
                          
                          <input name="submit" value="Create Coupon" type="submit" class="btn btn-primary form-control">
                          
                      </div>
                       
                   </div>
                   
               </form>
               
           </div>
            
        </div>
        
    </div>
    
</div>

<?php 

if(isset($_POST['submit'])){

    $coupon_title = $_POST['coupon_title'];
    $coupon_price = $_POST['coupon_price'];
    $coupon_code = $_POST['coupon_code'];
    $coupon_limit = $_POST['coupon_limit'];
    $coupon_pro_id = $_POST['product_id'];

    $coupon_used=0;

    $get_coupons = "select * from coupons where product_id='$coupon_pro_id' or coupon_code='$coupon_code'";
    $run_coupons = mysqli_query($con,$get_coupons);
    $check_coupons = mysqli_num_rows($run_coupons);

    if($check_coupons==1){

        echo "<script>alert('Coupon Code / Product Already Added. Choose Another Coupon Code / Product')</script>";

    }else{

        $insert_coupon = "insert into coupons (product_id,coupon_title,coupon_price,coupon_code,coupon_limit,coupon_used)values('$coupon_pro_id','$coupon_title','$coupon_price','$coupon_code','$coupon_limit','$coupon_used')";
        $run_coupon = mysqli_query($con,$insert_coupon);

        if($run_coupon){

            echo "<script>alert('Your Coupon Has Been Created')</script>";
            echo "<script>window.open('index.php?view_coupons','_self')</script>";

        }

    }

}

?>

<?php } ?>