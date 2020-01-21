<?php 
    
    $active='Home';
    include("includes/header.php");

?>

    <!-- Home Slider -->
    <div class="container" id="slider">

        <div class="col-md-12">

            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                

                <ol class="carousel-indicators">
                    

                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>

                </ol>

                <div class="carousel-inner">
                    

                    <?php 
                    
                    $get_slides = "select * from slider LIMIT 0,1";
                    
                    $run_slides = mysqli_query($con,$get_slides);
                    
                    while($row_slides=mysqli_fetch_array($run_slides)){
                        $slide_name = $row_slides['slide_name'];
                        $slide_image = $row_slides['slide_image'];
                        $slide_url = $row_slides['slide_url'];
                        
                        echo "
                        
                        <div class='item active'>
                       
                           <a href='$slide_url'>

                                <img src='admin_area/slides_images/$slide_image'>

                           </a>
                       
                       </div>
                        
                        ";
                    }
                    
                    $get_slides = "select * from slider LIMIT 1,3";
                    
                    $run_slides = mysqli_query($con,$get_slides);
                    
                    while($row_slides=mysqli_fetch_array($run_slides)){
                        $slide_name = $row_slides['slide_name'];
                        $slide_image = $row_slides['slide_image'];
                        $slide_url = $row_slides['slide_url'];
                        
                        echo "
                        
                        <div class='item'>
                       
                           <a href='$slide_url'>

                                <img src='admin_area/slides_images/$slide_image'>

                           </a>
                       
                       </div>
                        
                        ";
                    }
                    
                    ?>

                </div>

                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                    <!-- left carousel-control Begin -->

                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>

                </a>

                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                    <!-- left carousel-control Begin -->

                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>

                </a>

            </div>

        </div>

    </div>
    <!-- Home Slider End -->

    <!-- Box Introduction -->
    <div id="advantages">
        <div class="container">
            <div class="same-height-row">
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">
                                We Love Our Costumer
                            </a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore totam sint, maxime, eum explicabo modi alias doloremque culpa.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-tag"></i>
                        </div>
                        <h3><a href="#">
                                Best Prices
                            </a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut impedit officia ab repellat ullam similique minus explicabo facere accusantium.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-thumbs-up"></i>
                        </div>
                        <h3><a href="#">
                                100% Original Products
                            </a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates esse culpa numquam iste dignissimos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Box Introduction End -->

    <!-- Product Storefront -->
    <div id="hot">
        <div class="box">
            <div class="container">
                <div class="col-md-12">
                    <h2>
                        Our Latest Products
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Storefront End -->

    <!-- Content -->
    <div id="content" class="container">
        <div class="row">
            
            <?php 
            
            getPro();
            
            ?>

        </div>
    </div>
    <!-- Content End -->

    <?php 
    
    include("includes/footer.php");
    
    ?>




    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>


</body>
</html>