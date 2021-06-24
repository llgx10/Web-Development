<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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
    </head>
    <body>
         <section class="product_list section_padding">
        <div class="container">
            <form method="POST" action="">
            <div class="row" >
                <div class="col-md-4">
                    <div class="product_sidebar">
                        <div class="single_sedebar">
                            <form method=POST action="">
                                <button type="Submit" class="btn btn-primary" name="Submit" value="Search" style="display: none"><i class="fa fa-search"></i></button>
                                <input type="search" id="SearchBox" name="SearchBox" placeholder="Search keyword">
                                <i class="ti-search"></i>
                            </form>
                        </div>
                        <div class="single_sedebar">
                            <div class="select_option">
                                <div class="select_option_list">Brands <i class="right fas fa-caret-down"></i> </div>
                                <div class="select_option_dropdown">
                                    <p><button class="btn_select">Sony</button></p>
                                    <p><button class="btn_select">DareU</button></p>
                                    <p><button class="btn_select">MSI</button></p>
                                    <p><button class="btn_select">ROG</button></p>
                                    <p><button class="btn_select">Razer</button></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_sedebar">
                            <div class="select_option">
                                <div class="select_option_list">Type <i class="right fas fa-caret-down"></i> </div>
                                <div class="select_option_dropdown">
                                    <p><button class="btn_select">Noise Cancelled</button></p>
                                    <p><button class="btn_select">RGB</button></p>
                                    <p><button class="btn_select">Bluetooth</button></p>
                                    <p><button class="btn_select">Normal</button></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
       <div class="col-md-8" >
                        <div class="row" id="row1">
                            <?php
                             if(isset($_POST['Submit'])&&($_POST['Submit']=="Search")){
                                include"connect.php";
                                $search = $_POST['SearchBox'];
                                $query="SELECT product_id, name,Supplier,Type,price, Thumbnail FROM product WHERE product_id LIKE '$search' OR  name LIKE '$search' OR  Supplier LIKE '$search' OR  Type LIKE '$search'";
                                $result = mysqli_query($connect, $query);
                                
                                $data= array();
                                $connect->close(); 
                                while ($row= mysqli_fetch_array($result,1)){
                                    $data[]=$row;
                                }
                                    for($i=0;$i<count($data);$i++){
                                        echo'
                                            <div class="col-lg-6 col-sm-6">
                                            <div class="single_product_item">
                                            <img src="'.$data[$i]['Thumbnail'].'" alt="" class="img-fluid">
                                             <h3> <a href="single_product.php?id='.$data[$i]['product_id'].'">'.$data[$i]['name'].'</a> </h3>
                                            <p>'.$data[$i]['price'].'<br> '.$data[$i]['Type'].'</p>
                                            </div>
                                            </div>
                                            
                                                ';  
                                        
                                
                                        $id=$data[$i]['product_id'];
                                    }
                                   
                             }
                            
                            
                           else{ 
                             include"connect.php";
                                $query="select *from product limit 6";
                                $result = mysqli_query($connect, $query);
                                
                                $data= array();
                                $connect->close(); 
                                while ($row= mysqli_fetch_array($result,1)){
                                    $data[]=$row;
                                }
                                    for($i=0;$i<count($data);$i++){
                                        echo'
                                            <div class="col-lg-6 col-sm-6">
                                            <div class="single_product_item">
                                            <img src="'.$data[$i]['Thumbnail'].'" alt="" class="img-fluid">
                                            <h3> <a href="single_product.php?id='.$data[$i]['product_id'].'">'.$data[$i]['name'].'</a> </h3>
                                            <p>'.$data[$i]['price'].'<br> '.$data[$i]['Type'].'</p>
                                            </div>
                                            </div>
                                                ';  
                                }
                                 
                           }
                             
                             

                            ?>
                                <?php 
                                $id=count($data);
                                ?>
                            
                        <div id="remove_row" class="load_more_btn text-center">
                            <br> <br>
                            <a class="btn_3" id="btn_3" data-id="<?php echo $id; ?>">Other Products</a>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </form>
            </div>
              </section>
         <!-- All JS Custom Plugins Link Here here -->
         <script type="text/javascript">
             $(document).ready(function(){
                 $(document).on('click','#btn_3',function (event){
                     event.preventDefault();
                     
                     var id =$('#btn_3').data('id');
                     $.ajax({
                         url:"load.php",
                         type: "post",
                         data:{id:id},
                         success:function(response){
                             
                             $('#remove_row').remove();
                             $('#row1').append(response);
                         }
                         
                         
                         
                     });
                     
                     
                 });
                 
                 
             });
             
         
        </script>
        
     
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
        <script src="./assets/js/jquery.magnific-popup.js"></script>

        <!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
        <script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
        <!-- Jquery Plugins, main Jquery -->    
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>

        <!-- swiper js -->
        <script src="./assets/js/swiper.min.js"></script>
            <!-- swiper js -->
        <script src="./assets/js/mixitup.min.js"></script>
        <script src="./assets/js/jquery.counterup.min.js"></script>
        <script src="./assets/js/waypoints.min.js"></script>
    </body>
</html>
