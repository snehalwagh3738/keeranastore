   
   
   <?php include_once("../include/header.php");?>
   <?php include_once("../config/db_config.php");?>


<script type="text/javascript">
    
    $(document).ready(function(){
        
        $("#deleteLink").click(function(){
            
           if( confirm("Are you sure wanted to delete this product"))
           {
            window.location = this.href;
            }
            else
            {
                return false;
            }
        });
        
    });
    
    </script>
   <div class="container">  
       <h1>Product <a href="add_product.php" class="btn btn-success pull-right"><i class="glyphicon glyphicon-plus-sign"></i></a></h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Price</th>
                         <th>quantity</th>
                         <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                   <?php 
                   $sql = "select * from products where deleted=0";
                   $result = mysql_query($sql);
                   
                   while($product = mysql_fetch_array($result))
                   { ?>
                       
                   
                    <tr>
                        <td><?php echo $product['id'];?></td>
                        <td><?php echo $product['name'];?></td>
                        <td><?php echo $product['price'];?></td>
                        <td><?php echo $product['quantity'];?></td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="productview.php?id=<?php echo $product['id'];?>"><i class="glyphicon glyphicon-zoom-in"></i></a>
                            <a class="btn btn-info btn-sm" href="product_update.php?id=<?php echo $product['id'];?>"><i class="glyphicon glyphicon-pencil"></i></a>
                            <a id="deleteLink" class="btn btn-danger btn-sm" href="product_delete.php?id=<?php echo $product['id'];?>"><i class="glyphicon glyphicon-trash"></i></a>
                       
                    </tr>
                    
                   <?php } ?>
                </tbody>
            </table>
        </div>
