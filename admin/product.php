   
   
   <?php include_once("../include/header.php");?>
   <?php include_once("../config/db_config.php");?>
   <div class="container">  
            <h1>Product</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>product_Id</th>
                        <th>product_Name</th>
                        <th>product_Price</th>
                         <th>product_quantity</th>
                         <th>product_Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>suger</td>
                        <td>30Rs</td>
                        <td>1Kg</td>
                        <td>
                            <input type="submit" value="view" class="btn btn-primary btn-xs" name="view" id="view">
                            <input type="submit" value="update" class="btn btn-primary btn-xs" name="update" id="update">
                            <input type="submit" value="dalete" class="btn btn-primary btn-xs" name="dalate" id="dalate">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
