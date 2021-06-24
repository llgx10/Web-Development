<!DOCTYPE html>
<html>
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/AdminCSS.css">
  <script> 
 $(document).ready(function(){
               $(".btn_edit").click(function(){    
             var a = $(this).parent().siblings(":first").text();
               $("#cookie").val(a);
});
 });
 function EditFocus(x) {
  x.style.backgroundColor = "#1b6e2e";
}

function EditUnFocus(x) {
 x.style.backgroundColor = "#28a745";
}
function DeleteFocus(x) {
  x.style.backgroundColor = "#a33936";
}

function DeleteUnFocus(x) {
 x.style.backgroundColor = "#d9534f";
}
  
  </script>
 </head>
 <body style="overflow: scroll" >
 <form method="post" action="">
     <div class="container">
     <div class="box">
    <div class="container-1">
        <button type="Submit" class="btn btn-primary" name="Submit" value="Search"><i class="fa fa-search"></i></button>
       <input type="search" id="search" placeholder="Search Product..." name="SearchBox" />
    </div>
  <div class="container-2">
  <button type="Submit" class="btn btn-success" name="Submit"value="ViewList">View List</button>
  </div>
   </div>
         <table id="load_data" >
                <tr>
                  <th>Product ID</th>
                  <th>Product Name</th>
                  <th>Supplier</th>
                  <th style="width: 150px">Type</th>
                  <th style="width: 150px">Price</th> 
                </tr>

<?php
 if(isset($_POST['Submit'])&&($_POST['Submit']=="ViewList")){
echo "Load successfully";
include 'connect.php';
$query = "SELECT product_id, name,Supplier,Type,price FROM product";
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result))
{
while($row = mysqli_fetch_array($result))
 {
  echo '
  <tr>
  <td><p>'.$row["product_id"].'</p></td>
  <td><p>'.$row["name"].'</p></td>
  <td><p>'.$row["Supplier"].'</p></td>
  <td><p>'.$row["Type"].'</p></td>
  <td><p>'.$row["price"].'</p></td>
  </tr>
  ';
 }

}
 }
 
 if(isset($_POST['Submit'])&&($_POST['Submit']=="Search")){
     include 'connect.php';
     $search = $_POST['SearchBox'];
     $str = "SELECT product_id, name,Supplier,Type,price FROM product WHERE product_id LIKE '$search' OR  name LIKE '$search' OR  Supplier LIKE '$search' OR  Type LIKE '$search'";
     $result = mysqli_query($connect, $str);      
     if($connect->query($str)==true)
                                    echo "inserted successfully";
                                    else
                                        echo "inserted failed";
                                    $connect->close();                
                                
            while($row = mysqli_fetch_array($result))
            {
            while($row = mysqli_fetch_array($result))
             {
              echo '
              <tr>
              <td><p>'.$row["product_id"].'</p></td>
              <td><p>'.$row["name"].'</p></td>
              <td><p>'.$row["Supplier"].'</p></td>
              <td><p>'.$row["Type"].'</p></td>
              <td><p>'.$row["price"].'</p></td>
              </tr>
              ';
             }
            }
 }
if(isset($_POST['Submit'])&&($_POST['Submit']=="Edit")){
     include 'connect.php';
     $id=$_POST['cookie'];
     
    
    
    
    
    
}

            ?>
    </table>
   
  
  </div>
 </form>
 </body>
</html>