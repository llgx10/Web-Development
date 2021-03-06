<!doctype html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>eCommerce HTML-5 Template </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

  <!-- CSS here -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/flaticon.css">
      <link rel="stylesheet" href="assets/css/slicknav.css">
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/nice-select.css">
      <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
   <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left d-flex">
                                    <div class="flag">
                                        <img src="assets/img/icon/header_icon.png" alt="">
                                    </div>
                                    <div class="select-this">
                                        <form action="#">
                                            <div class="select-itms">
                                                <select name="select" id="select1">
                                                    <option value="">USA</option>
                                                    <option value="">SPN</option>
                                                    <option value="">CDA</option>
                                                    <option value="">USD</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <ul class="contact-now">     
                                        <li>+777 2345 7886</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                   <ul>                                          
                                       <li><a href="login.html">My Account </a></li>
                                       <li><a href="product_list.html">Wish List  </a></li>
                                       <li><a href="cart.html">Shopping</a></li>
                                       <li><a href="cart.html">Cart</a></li>
                                       <li><a href="checkout.html">Checkout</a></li>
                                   </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                                <div class="logo">
                                  <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>                                                
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="Category.php">Category</a>
                                                    <ul class="submenu">
                                                        <li><a href="product_list.php">Gaming Headsets</a></li>
                                                         <li><a href="product_list.php">Noise cancelling</a></li>
                                                         <li><a href="product_list.php">For Girls</a></li></li>
                                                    </ul>
                                            <li class="hot"><a href="#">Products</a></li>
                                            <li><a href="blog.php">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.php">Blog</a></li>
                                                    <li><a href="single_blog.php">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div> 
                            <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                    <li class="d-none d-xl-block">
                                        <div class="form-box f-right ">
                                            <input type="text" name="Search" placeholder="Search products">
                                            <div class="search-icon">
                                                <i class="fas fa-search special-tag"></i>
                                            </div>
                                        </div>
                                     </li>
                                    <li class=" d-none d-xl-block">
                                        <div class="favorit-items">
                                            <i class="far fa-heart"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shopping-card">
                                            <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </li>
                                   <li class="d-none d-lg-block"> <a href="#" class="btn header-btn">Sign in</a></li>
                                </ul>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
<cart>
    <?php
	include "connect.php";
	if(!isset($_SESSION['cart']))
        {
            echo'Emty cart';
        }
	else 
	{
		$cart = $_SESSION['cart'];
		if (isset($_POST['cart']) && count($cart) != "") 
		{
			$soluong_cn = $_POST['quantity'];
			foreach ($soluong_cn as $id => $sl) 
			{
				if ($sl == 0) 
				{
					unset($_SESSION['cart'][$id]);
				} 
				else 
					if ($sl > 0 && is_numeric($sl)) 
					{
						$_SESSION['cart'][$id] = $sl;
					}
				header("location: " . $_SERVER['REQUEST_URI'] . "");
			}
		}
		if (count($cart)) {
		?>
		<form method="post">
			<table width="495" border="1" align="center" cellpadding="0" cellspacing="0">
				<tr bgcolor="#CCCCFF">
					<th colspan="6">
						<div align="center" class="style3">Gi??? h??ng</div>
					</th>
				</tr>
				<tr>
					<th width="150">
						<div align="center" class="style2">T??n s???n ph???m</div>
					</th>
					<th width="75">
						<div align="center" class="style2">Gi??</div>
					</th>
					<th width="75">
						<div align="center" class="style2">S??? l?????ng</div>
					</th>
					<th width="100">
						<div align="center" class="style2">Th??nh ti???n</div>
					</th>
					<th width="50">
						<div align="center" class="style2"><strong>X??a</strong></div>
					</th>
				</tr>
				<?php
				$tong = 0;
				foreach ($cart as $id => $sl) {
                                        $str="select * from product where product_id = '$id'";
					$result = mysqli_query($connect, $str);
					$row = mysqli_fetch_assoc($result);
	
					?>
					<tr>
						<td width="175">
							<div align="center"><?php echo $row['name']; ?></div>
						</td>
						<td width="50">
							<div align="right"><?php echo $row['price']; ?></div>
						</td>
						<td width="75">
							<div align="center"><input name="soluong[<?php echo $id; ?>]" type="text"
													   value="<?php echo $sl; ?>"></div>
						</td>
						<td width="100">
							<div align="right"><?php echo $sl * $row['price']; ?></div>
						</td>
						<td width="50">
							<div align="center"><a href="xoa.php?id=<?php echo
								$row['product_id']; ?>">X??a</a></div>
						</td>
					</tr>
					<?php
					$tong += $sl * $row['price'];
				}
				?>
				<tr>
					<td colspan="6" align="right">
						T???ng c???ng: <?php echo $tong; ?>
					</td>
				</tr>
			</table>
			<br>
			<div align="center">
				<input type="submit" value="Ti???p t???c mua h??ng" formaction="index.php">
				<input name="capnhat" type="submit" class="style3" value="C???p nh???t">
				<input name="thanhtoan" type="submit" class="style3" value="Thanh to??n" formaction="thanhtoan.php">
	</div>
		</form>
<?php
	}
}

?>
    
    
    
    
    
</cart>

  
    
    
    
  <!--================End Cart Area =================-->

 <footer>
       <!-- Footer Start-->
       <div class="footer-area footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                      <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                             <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>SOUND OF THE TIME</p>
                               </div>
                            </div>
                        </div>
                      </div>
                   </div>
                   <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Quick Links</h4>
                               <ul>
                                   <li><a href="#">About</a></li>
                                   <li><a href="#"> Offers & Discounts</a></li>
                                   <li><a href="#"> Get Coupon</a></li>
                                   <li><a href="#">  Contact Us</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>New Products</h4>
                               <ul>
                                   <li><a href="#">Gaming Headsets</a></li>
                                   <li><a href="#">For girls</a></li>
                                   <li><a href="#">Hot sale</a></li>
                                   <li><a href="#">Upcoming product</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Support</h4>
                               <ul>
                                <li><a href="#">Frequently Asked Questions</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Report a Payment Issue</a></li>
                            </ul>
                           </div>
                       </div>
                   </div>
               </div>

       <!-- Footer End-->
   </footer>

<!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    
    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>