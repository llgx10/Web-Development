<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/AdminCSS.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
    <body>
        <div class="product_detail">
          <div class="container form-text">
          <div class="title">Product Details</div>
	<div class="row">
		<div class="col-sm-12">
			<form method="post" action="">
      
				<div class="form-group">
					<label for="txtID">Product ID</label>
					<input class="form-control" id="txtID" type="text" name="txtID">
				</div>
				
				<div class="form-group">
					<label for="txtname">Product Name</label>
					<input class="form-control" id="txtname" type="text" name="txtname">
				</div>
                                
                            <div class="form-group">
                                    <div class="Type">
                                            <label>Product Type</label>
                                            <select class="form-control" name="txttype">
                                                <option value="0" selected-->Select Type</option>
                                                    <option value="Normal">Normal</option>
                                                    <option value="RGB">RGB</option>
                                                    <option value="Noise Cancelled">Noise Cancelled</option>
                                                    <option value="Earbuds">Earbuds</option>
                                                    <option value="Bluetooh">Bluetooh</option>
                                            </select>
                                    </div>
                                <div class="Supplier">
                                            <label>Supplier</label>
                                            <select class="form-control" name="txtSupplier">
                                                <option value="0" selected-->Select Supplier</option>
                                                    <option value="Sony">Sony</option>
                                                    <option value="DareU">DareU</option>
                                                    <option value="MSI">MSI</option>
                                                    <option value="ROG">ROG</option>
                                                    <option value="Razer">Razer</option>
                                            </select>
                                    </div>
                            </div>
			
				<div class="form-group">
					<label for="txtdesc">Description</label>
					<textarea class="form-control" type="text" id="txtdesc" name="txtdesc" rows="3"></textarea>
				</div>
                               
				<div class="form-group">
						<label for="txtpic">Thumbnail Image URL (imgur) </label>
                                                <input class="form-control" id="txtthumbnail" type="text" name="txtthumbnail">
				</div>
                                <div class="form-group">
						<label for="txtpic">Detail Image 1 (imgur)</label>
					<input class="form-control" id="txtimage1" type="text" name="txtimage1">
				</div>
                                <div class="form-group">
						<label for="txtpic">Detail Image 2 (imgur)</label>
					<input class="form-control" id="txtimage2" type="text" name="txtimage2">
				</div>
				
				<div class="form-group">
					<label for="txtquantity">Quantity</label>
					<input class="form-control" type="number" id="txtquantity" name="txtquantity">
				</div>
				<!-- Giá sản phẩm -->
				<div class="form-group">
					<label for="txtprice">Price</label>
					<input class="form-control" type="number" id="txtprice" name="txtprice">
				</div>
                                <div class="button-group">
                                 <button type="submit" class="btn btn-danger" name="btnclear">Clear</button>
                                <button type="Submit" class="btn btn-primary" name="Submit"value="Add">Add New Product</button>
                                </div>
				
			</form> 
                        <?php
                            if(isset($_POST['Submit'])&&($_POST['Submit']=="Add"))
                                {
                                  include "connect.php"; 
                                  $product_id = $_POST['txtID'];
                                  $Name = $_POST['txtname'];
                                  $Supplier = $_POST['txtSupplier'];
                                  $Type = $_POST['txttype'];
                                  $Description= $_POST['txtdesc'];
                                  $price = $_POST['txtprice'];
                                  $quantity = $_POST['txtquantity'];
                                  $Thumbnail = $_POST['txtthumbnail'];
                                  $image_1 = $_POST['txtimage1'];
                                  $image_2 = $_POST['txtimage2'];
                                  
                               $str = "insert into product values('$product_id','$Name','$Supplier','$Type','$Description','$price','$quantity','$Thumbnail','$image_1','$image_2')";
//                               INSERT INTO product VALUES(1,null,"Sony",NULL,NULL,300,15,NULL,NULL,NULL)
                               
                                  if($connect->query($str)==true)
                                    echo "inserted successfully";
                                    else
                                        echo "inserted failed";
                                    $connect->close();            
                                }
            
                       
                        ?>
		</div>
	</div>
</div>
     
    </div>
    </body>
</html>
