<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

    <div class="row">
       
        <div class="col-lg-12">
           
            <ol class="breadcrumb">
               
                <li class="active">
                   
                    <i class="fa fa-dashboard"></i> Dashboard / Create Term
                    
                </li>
                
            </ol>
            
        </div>
        
    </div>

    <div class="row">
       
        <div class="col-lg-12">
           
            <div class="panel panel-default">
               
                <div class="panel-heading">
                   
                    <h3 class="panel-title">
                       
                        <i class="fa fa-money fa-fw"></i> Create Term
                        
                    </h3>
                    
                </div>
                
                <div class="panel-body">
                   
                    <form method="post" class="form-horizontal" enctype="multipart/form-data">
                       
                        <div class="form-group">
                           
                            <label class="col-md-3 control-label">
                                Term Title
                            </label>
                            
                            <div class="col-md-6">
                               
                                <input name="term_title" type="text" class="form-control" required>
                                
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                           
                            <label class="col-md-3 control-label">
                                Term Link
                            </label>
                            
                            <div class="col-md-6">
                               
                                <input name="term_link" type="text" class="form-control" required>
                                
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                Term Desc
                            </label>
                            <div class="col-md-6">
                                <textarea name="term_desc" cols="19" rows="6" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-6">
                                <input name="submit" value="Create Term" type="submit" class="btn btn-primary form-control">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
 <?php 

if(isset($_POST['submit'])){

    $term_title = $_POST['term_title'];
    $term_link = $_POST['term_link'];
    $term_desc = $_POST['term_desc'];

    $insert_term = "insert into terms (term_title,term_link,term_desc) values ('$term_title','$term_link','$term_desc')";

    $run_term = mysqli_query($con,$insert_term);

    if($run_term){

        echo "<script>alert('Your Term Has Been Created')</script>";
        echo "<script>window.open('index.php?view_terms','_self')</script>";

    }

}

?>
    
    <?php } ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    <script src="js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
</body>

</html>