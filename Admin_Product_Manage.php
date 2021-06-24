<!DOCTYPE html>
<html lang="en" dir="ltr">
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
   </head>
   <script>
       $(document).ready(function(){
                $("#Add").click(function(){
                $("#pageload").load('AddProduct.php');
                
  });
                $("#Edit").click(function(){
                $("#pageload").load('EditProduct.php');});
});
   
   
   
   </script>
<body>
    <div class="sidebar">
    <div class="logo_content">
      <div class="logo">
          <img src="assets/img/logo/logomini.png" alt="">
        
      </div>
      <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav_list">
      <li>
          <a href="#" style="background:#fff">
          <i class='bx bx-grid-alt' id="product_button" ></i>
          <span class="links_name" style="color:#11101d">Product Manage</span>
        </a>
          <span class="tooltip" id="tooltip1">Product Manage</span>
        </li>
       
      <li>
        <a href="#">
          <i class='bx bx-user' ></i>
          <span class="links_name">User Manage</span>
          </a>
          <span class="tooltip">User Manage</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-folder' ></i>
          <span class="links_name">Homepage Manage</span>
        </a>
          <span class="tooltip">Homepage Manage</span>
      </li>
     
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="links_name">Analytics</span>
        </a>
        <span class="tooltip">Analytics</span>
      </li>
      
      <li class="log_out_btn">
        <a href="#">
          <i class='bx bx-log-out' id="log_out"></i>
          <span class="links_name">Log Out</span>
        </a>
        <span class="tooltip">Log Out</span>
      </li>
      
      
    </ul>
   </div>
    
    
  <div class="product-home">
      <div class="addandedit">
          <button type="Submit" class="btn btn-primary" name="Submit" id="Add" value="Add">Add New Product</button>
          <button type="Submit" class="btn btn-success" name="Submit" id="Edit" value="Edit">Edit Products</button>
       <div class="pageload" id="pageload"></div>
      </div>
     
  
      <div class="product_list">
          <div class="list">
            <?php
            include "Data.php";          
            ?>
            </div>
          </div>
      </div>
  </div>

  <script>
   let btn = document.querySelector("#btn");
   let sidebar = document.querySelector(".sidebar");
   let searchBtn = document.querySelector(".bx-search");

   btn.onclick = function() {
     sidebar.classList.toggle("active");
     if(btn.classList.contains("bx-menu")){
       btn.classList.replace("bx-menu" , "bx-menu-alt-right");
     }else{
       btn.classList.replace("bx-menu-alt-right", "bx-menu");
     }
   }
   searchBtn.onclick = function() {
     sidebar.classList.toggle("active");
   }
   
   
   
</script>
  </script>

</body>
</html>
