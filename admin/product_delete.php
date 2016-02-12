

<?php include("../include/admin_header.php"); ?>


        <h1>Product View</h1>
        <div class="container-fluid info">
            <label>product_Id</label><br>
            <label>product_Name</label><br>
            <label>product_price</label><br>
            <label>product_Quantity</label><br>
            
        </div>
  <?php
  $select =  mysql_query("UPDATE products set deleted=1 where id=".$_GET['id']);
  
  header("location:{$config['BASEURL']}admin/product.php");
  
  ?>

        
        <?php include("../include/admin_footer.php"); ?>
