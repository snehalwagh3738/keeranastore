

<?php include("../include/admin_header.php"); ?>


        <h1>Product View</h1>
        <div class="container-fluid info">
            <label>product_Id</label><br>
            <label>product_Name</label><br>
            <label>product_price</label><br>
            <label>product_Quantity</label><br>
            
        </div>
  <?php
  $select =  mysql_query("SELECT * FROM products where id=".$_GET['id']);
  
  
  while($userrow=mysql_fetch_array($select))
  {
      ?>
        <div>
            <?php       echo $userrow['id'];?>
        </div>
        <div>
            <?php       echo $userrow['name'];?>
        </div>
        <div>
            <?php       echo $userrow['price'];?>
        </div>
        <div>
            <?php       echo $userrow['quantity'];?>
        </div>
   
    <?php
    
  }
?>

        
        <?php include("../include/admin_footer.php"); ?>
