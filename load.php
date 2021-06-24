<?php
        include"connect.php";
        $query="select *from product where product_id>'".$_POST['id']."' limit 6";
        $result = mysqli_query($connect, $query);
        $query2="select *from product";
        $result2 = mysqli_query($connect, $query2);
        $limit= mysqli_num_rows($result2);
        $output="";
        while ($row= mysqli_fetch_assoc($result)){
                                 
                                       $output.='
                                            <div class="col-lg-6 col-sm-6">
                                            <div class="single_product_item">
                                            <img src="'.$row['Thumbnail'].'" alt="" class="img-fluid">
                                             <h3> <a href="single_product.php?id='.$row['product_id'].'">'.$row['name'].'</a> </h3>
                                            <p>'.$row['price'].'<br> '.$row['Type'].'</p>
                                            </div>
                                            </div>
                                                ';  
                                       $id=$row['product_id'];
                                   
                                           
        }        
        if($id>=$limit){
                $output.='
                                            <div id="remove_row" class="load_more_btn text-center">
                                            <br> <br>
                                            <a class="btn_3" id="btn_4" data-id="<?php echo $id; ?>">No More Product </a>
                                            </div>' ;
        }
        else {
            $output.='
                                            <div id="remove_row" class="load_more_btn text-center">
                                            <br> <br>
                                            <a class="btn_3" id="btn_3" data-id="<?php echo $id; ?>">Other Products </a>
                                            </div>' ;
        }
        echo $output;
                                
?>
  