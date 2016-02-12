
	  <?php 
	 
         include_once  'include/header.php';
	  
	  if(isset($_POST['Submit']))
			{
				$name=$_POST['name'];
				$email=$_POST['email'];
				$gender=$_POST['gender'];
				$address=$_POST['address'];
				$city=$_POST['city'];
				$contact=$_POST['contact'];
				$area=$_POST['area'];
				$pincode=$_POST['pincode'];			
				 $sql="insert into users(name,email,gender,address,city,contact,area,pincode)values('".$name."','".$email."','".$gender."','".$address."','".$city."','".$contact."','".$area."','".$pincode."')";
                            $res=mysql_query($sql);
                            if(!$res)
                            {
                                echo 'record not inserted'; 
                            }
			}	
	  ?>
	</head>
	  <style>
	
              #a{
                  margin-left: 95px;
              }
	 h2, .h2 {
    font-size: 30px;
    margin-left: 40px;
    font-family: q;
}

	  .well{
		  background-color: rgba(8, 8, 8, 0.1);
	  }
	  h6 {
    font-size: 18px;
	  }
          input[type=radio], input[type=checkbox] {
    margin: 0px 0 0;
    margin-top: 1px \9;
    line-height: normal;
    height: 7%;
    width: 64%;
}	

.col-sm-1 {
    width: 5.333333%;
}

	  </style>
	  
	  <body> 
	 <!--style="background-image:url('image/shadi.png'); height:auto;">-->
	  
		<div class="container">
                   
                    <h2 class="well" style="margin-left:50px">Registration Form</h2><br>
                
		    <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
				<div class="form-group col-md-offset-3">
				  <label class="control-label col-sm-2 col-md-offset-1">Name :</label>
				  <div class="col-sm-5">
					<input type="text" class="form-control" name="name" placeholder="Enter Name">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2  col-md-offset-1" >Email :</label>
				  <div class="col-sm-5">
					<input type="email" class="form-control" name="email" placeholder="Enter Email">
				  </div>
				</div>
			<div class="form-group" id="a">
					 <label class="control-label col-sm-1  col-md-offset-1" >Gender:</label>
					  <label class="control-label col-sm-1 col-md-offset-1"  >Male</label>
					 <div class="col-sm-1">
					<input type="radio" name="gender" value="M" >
                                         </div>
					  <label class="control-label col-sm-1  col-md-offset-1" >Female</label>
					 <div class="col-sm-1">
				    <input type="radio"  name="gender" value="F" >
                                         </div>
			    </div>
				<div class="form-group">
				  <label class="control-label col-sm-2  col-md-offset-1" >Address :</label>
				  <div class="col-sm-5">
					<input type="text" class="form-control" name="address" placeholder="Enter Address">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2 col-md-offset-1" >City :</label>
				  <div class="col-sm-5">
					<input type="text" class="form-control" name="city" placeholder="Enter City">
				  </div>
				</div>  
				<div class="form-group">
				  <label class="control-label col-sm-2  col-md-offset-1" >Contact :</label>
				  <div class="col-sm-5">
					<input type="text" class="form-control" name="contact" placeholder="Enter Contact">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2 col-md-offset-1 " >Area:</label>
				  <div class="col-sm-5">
					<input type="text" class="form-control" name="area" placeholder="Enter Area">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2 col-md-offset-1" >Pincode :</label>
				  <div class="col-sm-5">
					<input type="text" class="form-control" name="pincode" placeholder="Enter Pincode">
				  </div>
				</div>
                        <div class="form-group">        
						  <div class="col-sm-offset-8 col-sm-3">
							<button type="submit" class="btn btn-default btn-lg"  name="Submit">Register</button>
						  </div>
                        </div>
                </div>

         <?php    include '../keeranastore/include/footer.php';?>