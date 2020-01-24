<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Insert Manufacturer
                
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                
                    <i class="fa fa-money fa-fw"></i> Insert Manufacturer
                
                </h3>
            </div>
            
            <div class="panel-body">
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                    
                        <label for="" class="control-label col-md-3">
                        
                            Manufacturer Name 
                        
                        </label>
                        
                        <div class="col-md-6">
                        
                            <input name="manufacturer_name" type="text" class="form-control">
                        
                        </div>
                    
                    </div>
                    
                    <div class="form-group">
                    
                        <label for="" class="control-label col-md-3">
                        
                            Choose as Top Manufacturer
                        
                        </label>
                        
                        <div class="col-md-6">
                        
                            <input name="manufacturer_top" type="radio" value="yes">
                            <label>Yes</label>
                            
                            <input name="manufacturer_top" type="radio" value="no">
                            <label>No</label>
                        
                        </div>
                    
                    </div>
                    
                    <div class="form-group">
                    
                        <label for="" class="control-label col-md-3">
                        
                            Manufacturer Image
                        
                        </label>
                        
                        <div class="col-md-6">
                        
                            <input type="file" name="manufacturer_image" class="form-control">
                        
                        </div>
                    
                    </div>
                    
                    <div class="form-group">
                    
                        <label for="" class="control-label col-md-3"></label>
                        
                        <div class="col-md-6">
                        
                            <input type="submit" name="submit" value="Submit Manufacturer" class="btn btn-primary form-control">
                        
                        </div>
                    
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

<?php  

    if(isset($_POST['submit'])){
        
        $manufacturer_name = $_POST['manufacturer_name'];
        
        $manufacturer_top = $_POST['manufacturer_top'];
        
        $manufacturer_image = $_FILES['manufacturer_image']['name'];
        
        $temp_name = $_FILES['manufacturer_image']['tmp_name'];
        
        move_uploaded_file($temp_name,"other_images/$manufacturer_image");  
            
            $insert_manufacturer = "insert into manufacturers (manufacturer_title,manufacturer_top,manufacturer_image) values ('$manufacturer_name','$manufacturer_top','$manufacturer_image')";
            
            $run_manufacturer = mysqli_query($con,$insert_manufacturer);
            
            echo "<script>alert('Your new manufacturer has been inserted')</script>";
            
            echo "<script>window.open('index.php?view_manufacturers','_self')</script>";
        
    }

?>

<?php } ?>
