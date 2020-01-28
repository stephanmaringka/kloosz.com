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
    <title> Insert Products </title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
</head>

<body>

    <!-- row -->
    <div class="row">

        <div class="col-lg-12">

            <ol class="breadcrumb">

                <li class="active">

                    <i class="fa fa-dashboard"></i> Dashboard / Insert Products

                </li>

            </ol>

        </div>

    </div>
    <!-- row end -->

    <!-- row -->
    <div class="row">

        <div class="col-lg-12">

            <div class="panel panel-default">

                <div class="panel-heading">

                    <h3 class="panel-title">

                        <i class="fa fa-money fa-fw"></i> Insert Product

                    </h3>

                </div>

                <!-- panel body -->
                <div class="panel-body">

                    <form method="post" class="form-horizontal" enctype="multipart/form-data">

                        <!-- form group product title -->
                        <div class="form-group">

                            <label class="col-md-3 control-label">
                                Product Title
                            </label>

                            <div class="col-md-6">

                                <input name="product_title" type="text" class="form-control" required>

                            </div>

                        </div>
                        <!-- form group product title end -->

                        <!-- form group url -->
                        <div class="form-group">

                            <label class="col-md-3 control-label"> Product Url </label>

                            <div class="col-md-6">

                                <input name="product_url" type="text" class="form-control" required>

                                <br>

                                <p style="font-weight:bold;font-style:italic;font-size:16px;"> Use Dash '-' for url </p>

                            </div>

                        </div>
                        <!-- form group url end -->

                        <!-- form group manufacturer -->
                        <div class="form-group">

                            <label class="col-md-3 control-label">
                                Manufacturer
                            </label>

                            <div class="col-md-6">

                                <select name="manufacturer" class="form-control">

                                    <option selected disabled>Select a Manufacturer</option>

                                    <?php 
                                
                                $get_manufacturer = "select * from manufacturers";
                                $run_manufacturer = mysqli_query($con,$get_manufacturer);
                                
                                while ($row_manufacturer=mysqli_fetch_array($run_manufacturer)){
                                    $manufacturer_id = $row_manufacturer['manufacturer_id'];
                                    $manufacturer_title = $row_manufacturer['manufacturer_title'];
                                    
                                    echo "
                                    
                                    <option value='$manufacturer_id'> $manufacturer_title </option>
                                    
                                    ";
                                    
                                }
                                
                                ?>
                                </select>
                            </div>
                        </div>
                        <!-- form group manufacturer end -->

                        <!-- form group product category -->
                        <div class="form-group">

                            <label class="col-md-3 control-label">
                                Product Category
                            </label>

                            <div class="col-md-6">

                                <select name="product_cat" class="form-control">

                                    <option selected disabled>Select a Product Category</option>

                                    <?php 
                                
                                $get_p_cats = "select * from product_categories";
                                $run_p_cats = mysqli_query($con,$get_p_cats);
                                
                                while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                    $p_cat_id = $row_p_cats['p_cat_id'];
                                    $p_cat_title = $row_p_cats['p_cat_title'];
                                    
                                    echo "
                                    
                                    <option value='$p_cat_id'> $p_cat_title </option>
                                    
                                    ";
                                    
                                }
                                
                                ?>
                                </select>

                            </div>

                        </div>
                        <!-- form group product category end -->

                        <!-- form group category -->
                        <div class="form-group">

                            <label class="col-md-3 control-label">
                                Category
                            </label>

                            <div class="col-md-6">

                                <select name="cat" class="form-control">

                                    <option selected disabled>Select a Category</option>

                                    <?php 
                              
                                    $get_cat = "select * from categories";
                                    $run_cat = mysqli_query($con,$get_cat);
                              
                                    while ($row_cat=mysqli_fetch_array($run_cat)){
                                  
                                        $cat_id = $row_cat['cat_id'];
                                        $cat_title = $row_cat['cat_title'];
                                  
                                        echo "
                                  
                                        <option value='$cat_id'> $cat_title </option>
                                  
                                        ";
                                  
                                    }
                              
                                    ?>

                                </select>

                            </div>

                        </div>
                        <!-- form group category end -->

                        <!-- form group img1 -->
                        <div class="form-group">

                            <label class="col-md-3 control-label">
                                Product Image 1
                            </label>

                            <div class="col-md-6">

                                <input name="product_img1" type="file" class="form-control" required>

                            </div>

                        </div>
                        <!-- form group img1 end -->

                        <!-- form group img2 -->
                        <div class="form-group">

                            <label class="col-md-3 control-label">
                                Product Image 2
                            </label>

                            <div class="col-md-6">

                                <input name="product_img2" type="file" class="form-control">

                            </div>

                        </div>
                        <!-- form group img2 end -->

                        <!-- form group img3 -->
                        <div class="form-group">

                            <label class="col-md-3 control-label">
                                Product Image 3
                            </label>

                            <div class="col-md-6">

                                <input name="product_img3" type="file" class="form-control">

                            </div>

                        </div>
                        <!-- form group img3 end -->

                        <!-- form group pro price -->
                        <div class="form-group">

                            <label class="col-md-3 control-label">
                                Product Price
                            </label>

                            <div class="col-md-6">

                                <input name="product_price" type="text" class="form-control" required>

                            </div>

                        </div>
                        <!-- form group pro price end -->

                        <!-- form group sale -->
                        <div class="form-group">

                            <label class="col-md-3 control-label">
                                Sale Price
                            </label>

                            <div class="col-md-6">

                                <input name="product_sale" type="text" class="form-control">

                            </div>

                        </div>
                        <!-- form group sale end -->

                        <!-- form group keywords -->
                        <div class="form-group">

                            <label class="col-md-3 control-label">
                                Product Keywords
                            </label>

                            <div class="col-md-6">

                                <input name="product_keywords" type="text" class="form-control" required>

                            </div>

                        </div>
                        <!-- form group keywords end -->

                        <!-- form group desc -->
                        <div class="form-group">

                            <label class="col-md-3 control-label">
                                Product Desc
                            </label>

                            <div class="col-md-6">

                                <textarea name="product_desc" cols="19" rows="6" class="form-control"></textarea>

                            </div>

                        </div>
                        <!-- form group desc end -->

                        <!-- form group label -->
                        <div class="form-group">
                           
                            <label class="col-md-3 control-label"> Product Label </label>

                            <div class="col-md-6">

                                <select name="product_label">

                                    <option selected disabled> Select Label Product </option>

                                    <option value="new">New Product</option>

                                    <option value="sale">Sale Product</option>

                                </select>

                            </div>

                        </div><!-- form group label -->

                        <!-- form group -->
                        <div class="form-group">

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                                <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">

                            </div>

                        </div>

                        <!-- form group end -->
                    </form>

                </div>
                <!-- panel body end -->

            </div>

        </div>

    </div>
    <!-- row end -->


    <!-- <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script> -->
    <script src="js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
</body>

</html>


<?php 

if(isset($_POST['submit'])){
    
    $product_title = $_POST['product_title'];
    $product_url = $_POST['product_url'];
    $product_cat = $_POST['product_cat'];
    $cat = $_POST['cat'];
    $manufacturer_id = $_POST['manufacturer'];
    $product_price = $_POST['product_price'];
    $product_keywords = $_POST['product_keywords'];
    $product_desc = $_POST['product_desc'];
    $product_sale = $_POST['product_sale'];
    $product_label = $_POST['product_label'];
    
    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];
    
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];
    
    move_uploaded_file($temp_name1,"product_images/$temp_name1");
    move_uploaded_file($temp_name2,"product_images/$temp_name2");
    move_uploaded_file($temp_name3,"product_images/$temp_name3");
    
    $insert_product = "insert into products (p_cat_id,cat_id,manufacturer_id,date,product_title,product_url,product_img1,product_img2,product_img3,product_price,product_keywords,product_desc,product_label,product_sale) values ('$product_cat','$cat','$manufacturer_id',NOW(),'$product_title','$product_url','$product_img1','$product_img2','$product_img3','$product_price','$product_keywords','$product_desc','$product_label','$product_sale')";
    
    $run_product = mysqli_query($con,$insert_product);
    
    if($run_product){
        
        echo "<script>alert('Product has been inserted sucessfully')</script>";
        echo "<script>window.open('index.php?view_products','_self')</script>";
        
    }
    
}

?>


<?php } ?>
