<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                
                <i class="fa fa-dashboard"></i> Dashboard / View Manufacturers
                
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
               <h3 class="panel-title">
               
                   <i class="fa fa-tags"></i>  View Manufacturers
                
               </h3>
            </div>
            
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        
                        <thead>
                            <tr>
                                <th> Manufacturer ID: </th>
                                <th> Manufacturer Title: </th>
                                <th> Manufacturer Image: </th>
                                <th> Manufacturer Delete: </th>
                                <th> Manufacturer Edit: </th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            
                            <?php 
          
                                $i=0;
                            
                                $get_manufacturer = "select * from manufacturers";
                                
                                $run_manufacturer = mysqli_query($con,$get_manufacturer);
          
                                while($row_manufacturer=mysqli_fetch_array($run_manufacturer)){
                                    
                                    $manufacturer_id = $row_manufacturer['manufacturer_id'];
                                    
                                    $manufacturer_title = $row_manufacturer['manufacturer_title'];
                                    
                                    $manufacturer_image = $row_manufacturer['manufacturer_image'];
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr>
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $manufacturer_title; ?> </td>
                                <td> <img src="other_images/<?php echo $manufacturer_image; ?>" width="60" height="60"></td>
                                <td> 
                                     
                                     <a href="index.php?delete_manufacturer=<?php echo $manufacturer_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                     <a href="index.php?edit_manufacturer=<?php echo $manufacturer_id; ?>">
                                     
                                        <i class="fa fa-pencil"></i> Edit
                                    
                                     </a> 
                                    
                                </td>
                            </tr>
                            
                            <?php } ?>
                            
                        </tbody>
                        
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php } ?>