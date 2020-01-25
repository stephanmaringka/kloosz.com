<?php 

    $active='Shop';
    include("includes/header.php");

?>

<div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Shop</li>
            </ul>
        </div>
        <div class="col-md-3">
           
        <?php 
    
        include("includes/sidebar.php");
    
        ?>
        
        </div>

        <div class="col-md-9">

                       <div class='box'>
                           <h1>Shop</h1>
                           <p>
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo deleniti accusamus, consequuntur illum quasi ut. Voluptate a, ipsam repellendus ut fugiat minima? Id facilis itaque autem, officiis veritatis perferendis, quaerat!
                           </p>
                       </div>

            <div id="products" class="row">

            <?php getProducts(); ?>

            </div>
            <center>
                <ul class="pagination">
                
                    <?php getPaginator(); ?>
                
                </ul>
            </center>
            
            
        </div>
        
        <div id="wait" class="wait" style="position:absolute;top:40%;left:45%;padding: 200px 100px 100px 100px"></div>

    </div>
</div>



<?php 
    
    include("includes/footer.php");
    
    ?>


<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
<script>

   $(document).ready(function(){
      
       // Hide & Show Sidebar Toggle //
       
       $('.nav-toggle').click(function(){
           
           $('.panel-collapse,.collapse-data').slideToggle(700,function(){
               
               if($(this).css('display')=='none'){
                   
                   $(".hide-show").html('Show');
                   
               }else{
                   
                   $(".hide-show").html('Hide');
                   
               }
               
           });
           
       });
       
       // Search Filters by letter //
       
        $(function(){
            
           $.fn.extend({
               
              filterTable: function(){
                  
                  return this.each(function(){
                      
                     $(this).on('keyup', function(){
                         
                        var $this = $(this), 
                        search = $this.val().toLowerCase(), 
                        target = $this.attr('data-filters'),
                        handle = $(target),
                        rows = handle.find('li a');
                        
                        if(search == ''){
                            
                            rows.show();
                            
                        }else{
                            
                            rows.each(function(){
                                
                                var $this = $(this);
                                
                                $this.text().toLowerCase().indexOf(search) === -1? $this.hide() : $this.show();
                                
                            });
                            
                        }
                        
                     }); 
                      
                  });
                  
              } 
               
           });
            
            $('[data-action="filter"][id="dev-table-filter"]').filterTable();
            
        });
       
       });

</script>


</body>

</html>
