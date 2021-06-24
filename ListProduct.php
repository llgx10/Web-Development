<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="assets/css/AdminCSS.css">
    </head>
    <body>
        <?php
          $id =$_GET['id'];
          include "connect.php";
          $str="select * from product where product_id='$id'";
          $result=$connect->query($str);
          $row=$result->fetch_assoc();
          $name =$row['name'];
          $type= $row['Type'];
          $supplier=$row['Supplier'];
          $description=$row['description'];
          $price=$row['price'];
          $quantity=$row['quantity'];
          $Thumbnail=$row['Thumbnail'];
          $image_1=$row['image_1'];
          $image_2=$row['image_2'];
          echo"<form method='post' action=''>";
				echo"<div class='form-group'>";
				echo"<label for='txtname'>Product Name</label>";
				echo"<input class='form-control' id='txtname' type='text' name='txtname' value='$name'>";
				echo "</div>";
                            echo"<div class='form-group'>";
                                   echo"<div class='Type'>";
                                       echo"<label>Product Type</label>";
                                            echo '<select class="form-control" name="txttype">';
                                                echo "<option value='$type' selected-->$type</option>";
                                                echo "<option value='Normal'>Normal</option>";
                                                echo "<option value='RGB'>RGB</option>";
                                                echo "<option value='Noise Cancelled'>Noise Cancelled</option>";
                                                echo "<option value='Earbuds'>Earbuds</option>";
                                                echo "<option value='Bluetooh'>Bluetooh</option>";
                                                echo "</select>";
                                                echo "</div>";
                                                echo "<div class='Supplier'>";
                                                echo "<label>Supplier</label>";
                                                echo "<select class='form-control' name='txtSupplier'>";
                                                echo "<option value='$supplier' selected-->$supplier</option>";
                                                echo "<option value='Sony'>Sony</option>";
                                                echo "<option value='DareU'>DareU</option>";
                                                echo "<option value='MSI'>MSI</option>";
                                                echo "<option value='ROG'>ROG</option>";
                                                echo "<option value='Razer'>Razer</option>";
                                                echo "</select>";
                                                echo "</div>";
                            echo"<div class='form-group'>";
                                                echo "<label for='txtdesc'>Description</label>";
                                                echo "<textarea class='form-control' type='text' id='txtdesc' name='txtdesc' rows='3' value='$description'>$description</textarea>";
                                                echo "</div>";
                            echo"<div class='form-group'>";
                                                echo "<label for='txtpic'>Thumbnail Image URL (imgur) </label>";
                                                echo "<input class='form-control' id='txtthumbnail' type='text' name='txtthumbnail' value='$Thumbnail'>";
                                                echo "</div>";
                            echo"<div class='form-group'>";
                                                echo "<label for='txtpic'>Detail Image 1 (imgur)</label>";
                                                echo "<input class='form-control' id='txtimage1' type='text' name='txtimage1' value='$image_1'>";
                                                echo "</div>";
                            echo"<div class='form-group'>";
                                                echo "<label for='txtpic'>Detail Image 2 (imgur)</label>";
                                                echo "<input class='form-control' id='txtimage2' type='text' name='txtimage2'value='$image_2'>";                                            
                                                echo "</div>";
                                               
                            echo"<div class='form-group'>";;
                                                echo "<label for='txtquantity'>Quantity</label>";
                                                    echo "<input class='form-control' type='number' id='txtquantity' name='txtquantity'value='$quantity'>";
                                                echo "</div>";
                            echo"<div class='form-group'>";
                                                echo "<label for='txtprice'>Price</label>";
                                                echo "<input class='form-control' type='number' id='txtprice' name='txtprice' value='$price'>";
                                                echo "</div>";
                            echo"<div class='form-group'>";
                                                echo "<button type='Submit' class='btn btn-danger' name='Submit' value='Delete'>Delete product</button> &ensp;";
                                                echo "<button type='Submit' class='btn btn-primary' name='Submit' value='Apply'>Apply Edits</button>";
                                                echo "</div>";
                                                echo "</form>";
                                                
                                                

                    
                    
                 ?>

    </body>
</html>
