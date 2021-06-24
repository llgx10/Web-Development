<?php
  include"connect.php";
  $output='';
  $query="SELECT product_id, name,Supplier,Type,price, Thumbnail FROM product WHERE product_id LIKE '%".$search."%' OR  name LIKE '%".$search."%' OR  Supplier LIKE '%".$search."%' OR  Type LIKE '%".$search."%'";
  $result = mysqli_query($connect, $query);
  if(mysqli_num_row($result)>0)
  { 
       while ($row= mysqli_fetch_assoc($result)){
       $output.='
                                            <div class="col-lg-6 col-sm-6">
                                            <div class="single_product_item">
                                            <img src="'.$row['Thumbnail'].'" alt="" class="img-fluid">
                                             <h3> <a href="single-product.html">'.$row['name'].'</a> </h3>
                                            <p>'.$row['price'].'<br> '.$row['Type'].'</p>
                                            </div>
                                            </div>
                                                ';  
                                       $id=$row['product_id'];
      
      
  }
  echo $output;
  }
  else{
      echo "No product found";
      
      
  }
  
        
 ?>
  
