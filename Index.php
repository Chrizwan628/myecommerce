<?php
include("includes/db.php");
?>

<html>


<head>
<title> My Shope</title>
<link rel="stylesheet" href="styles/style.css" media="all" />
</head>
<body>
	<!--main container starts-->
<div class="main_wrapper">
	<!--header starts-->
		<div class= "header_wrapper">

<img src="images/logoe.jpg" style = "float:left;">
<img src="images/add2.jpg"  style = "float:right;">

		</div>
			<!--header end-->
		<!--navbar starts-->
		<div id="navbar"> 
			<ul id="menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">All Product</a></li>
			     <li><a href="#">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="#">Shoping Cart</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
            <div id="form">
            <form method="get" action="result.php" enctype="multipart/form-data">
            	
                <input type="text" name="user_query" placeholder="Search a Product"/>
            	<input type="submit" name="search" value="search"/>
            
            </form>
            
            </div>



		  </div>
		<!--navbar ends-->
				<div class="content_wrapper">
				
                <div id = "left_sidebar">
                
                <div id="sidebar_title">	 categories  </div>
                	<ul id="cats">
                	<?php
                    
                	$get_cats= "select * from categories";
					$run_cats = mysqli_query($con , $get_cats);
					while($row_cats =mysqli_fetch_array($run_cats) )
					{
						$cat_id = $row_cats['cat_id'];
						$cat_title = $row_cats['cat_title'];
						echo "<li><a href='Index.php?cat=$cat_id'>$cat_title</a></li>";
						
						}
					?>
                    </ul>
                    
                    <div id="sidebar_title">	Brands
                    </div>
                    <ul id="cats">
                	<?php
                    
                	$get_brands= "select * from brands";
					$run_brands = mysqli_query($con , $get_brands);
					while($row_brands = mysqli_fetch_array($run_brands) )
					{
						$brand_id = $row_brands['brand_id'];
						$brand_title = $row_brands['brand_title'];
						echo "<li><a href='Index.php?cat=$brand_id'>$brand_title</a></li>";
						
						}
					?>
                    </ul>
                </div>
                
                
                
		<div id = "right_content">
                	   <div id = "headline">
               			 <div id = "headline_content">
               			 	<b>welcome new usert</b>
               			 	<b><font color="#FF0000">Shoping Cart:</font></b>
                         	<span> -Items: - Price:</span>
               			 </div>
              		  </div>
                  
                  <div id = "products_box">
                  <?php
				  $get_products = "select * from products order by rand() LIMIT 0,6 ";
				  $run_products = mysqli_query($con,$get_products);
				  while($row_products = mysqli_fetch_array($run_products))
				  {
					  $pro_id = $row_products['product_id'];
					  $pro_title = $row_products['product_title'];
					  $cat_id = $row_products['cat_id'];
					  $brand_id = $row_products['brand_id'];
					  $pro_desc = $row_products['product_desc'];
					  $pro_price = $row_products['product_price'];
					  $pro_img1 = $row_products['product_img1'];
					  
					  echo "
					  <div id = 'single_products'>
					  <h3 align='center'>$pro_title</h3>
					  
					  <img src='admin_area/product_images/$pro_img1' width='180' height='180' />
					  </div>
					  ";
					  }  
				  ?>
                  
                  </div>    
                      
                      
          </div>

		</div>

		<div class="footer">
        <h1 style="color:#000; padding-top:30px; text-align:center">&copy; 2016 By - CH Rizwan Soft </h1>
        </div>

</div>

</body>
</html>