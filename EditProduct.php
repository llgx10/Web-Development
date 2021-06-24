<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/AdminCSS.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
     <script>
  
      $(document).ready(function(){
        $(".id").keyup(function(){
            var id=$(this).val();
            $.get("ListProduct.php?id="+id,function(data,status){
                    $(".ListProduct").html(data);  
                });
        }); 
        
    });
     
     
     </script>
   </head>
    <body>
        <br>
        <br>
        <form method="post" action="">
            <label for="id">Product ID</label>
            <input type="text" name="txtid" class="id" id="id"></input>
            <?php 
            if(isset($_POST['Submit'])&&($_POST['Submit']=="Delete")){
                    $Name = $_POST['txtname'];
                    include 'connect.php';
                    $str="DELETE FROM product WHERE name='$Name'";
                    if($connect->query($str)==true)
                                    echo "deleted successfully";
                                    else
                                        echo "deleted failed";
                                    $connect->close();            
                           }
                           
            if(isset($_POST['Submit'])&&($_POST['Submit']=="Apply")){      
              include 'connect.php';
                                $Name = $_POST['txtname'];
                                 $Supplier = $_POST['txtSupplier'];
                                 $Type = $_POST['txttype'];
                                 $Description= $_POST['txtdesc'];
                                  $price = $_POST['txtprice'];
                                 $quantity = $_POST['txtquantity'];
                                  $Thumbnail = $_POST['txtthumbnail'];
                                 $image_1 = $_POST['txtimage1'];
                                  $image_2 = $_POST['txtimage2'];
                                  echo"$Supplier   ";
                                 $str1="UPDATE product SET Supplier='$Supplier' Where name='$Name'";
                              if($connect->query($str1)==true)
                              echo "Edit successfully";
                                   else
                                    echo "Edit failed";
                                   $connect->close(); 
            }
                
                
            
            
            ?>
         <br> <br>
            <div class="ListProduct"></div>
            
        </form>
  
        

    </body>
</html>
