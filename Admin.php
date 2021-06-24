<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/AdminCSS.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
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
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="links_name">Product Manage</span>
        
          <ul class="nav-flyout" id="dropdown">
            <li>
              <a href="#"><i class="ion-ios-color-filter-outline"></i>Add Product</a>
            </li>
            <li>
              <a href="#"><i class="ion-ios-clock-outline"></i>View Warehouse</a>
            </li>
          </ul>
          </a>
          <span class="tooltip">Product Manage</span>
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
    
  <div class="home_content">
      <img class="admin-avatar" src="assets/img/logo/testimonial.png"></img>
 
    <div class="text">Welcome Admin </div>
    <div class="admin-name">LLONG</div>
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
   function bigImg(x) {
        $(".links_name").css("display", "block");
}

function normalImg(x) {
        $(".links_name").css("display", "none");
}
</script>
  </script>

</body>
</html>
