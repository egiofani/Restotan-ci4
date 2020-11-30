<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>MyCafe</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()  ?>/bootstrap/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()  ?>/bootstrap/assets/css/login.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url()  ?>/bootstrap/assets/css/font-awesome.css">

    <link rel="stylesheet" href="<?= base_url()  ?>/bootstrap/assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="<?= base_url()  ?>/bootstrap/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="<?= base_url()  ?>/bootstrap/assets/css/lightbox.css">

    <link href="<?= base_url('fontawesome/css/all.css') ?>" rel="stylesheet" />

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="<?= base_url()  ?>" class="logo">
                            <img src="<?= base_url()  ?>/bootstrap/assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a  href="<?= base_url()  ?>/#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="<?= base_url()  ?>/#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                        <?php
                            $jml_keranjang = 0;
                            foreach ($cart as $key => $value) {
                                $jml_keranjang = $jml_keranjang + $value['qty'];
                            }
                            ?>

                            <li class="scroll-to-section"><a href="<?= base_url()  ?>/#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="<?= base_url()  ?>/#offers">All Menu</a></li> 
                            <li><i class="ti-shopping-cart"></i> <a href="<?= base_url('keranjang')?>">Cart <i class="fas fa-shopping-cart"></i> <?= $jml_keranjang ?></a></li>
                               
                            <li class="submenu">
                            <?php if (!empty(session()->get('namapelanggan'))) :?>
                            
                                <a><?= session()->get('namapelanggan') ?></a>
                                <ul>
                                   <li><i class="ti-reload"></i> <a href="<?= base_url('historypembelian')?>">History
                                    Pembelian</a></li>
                                    <li><i class="ti-credit-card"></i> <a href="<?= base_url('statuspembayaran')?>">Status
                                        Pembayaran</a></li>
                                    <li><i class="ti-back-right"></i><a href="<?= base_url('logout')?>">Logout</a></li>
                                   <?php else :?> 
                                    <i class="ti-power-off"></i><a href="<?= base_url('login')?>">Login</a>
                                    <?php endif;?>
                                </ul>
                            </li>
                           
                           
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <div class=" header m-5"></div>

    <?= $this->renderSection('content') ?>
    
    
    <!-- ***** Footer Start ***** -->
    <footer class="mt-5 " >
        <div class="container ">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="<?= base_url()  ?>/bootstrap/assets/images/white-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright EgioFaniRenedio
                        
                        <br>Design: TemplateMo</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?= base_url()  ?>/bootstrap/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?= base_url()  ?>/bootstrap/assets/js/popper.js"></script>
    <script src="<?= base_url()  ?>/bootstrap/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="<?= base_url()  ?>/bootstrap/assets/js/owl-carousel.js"></script>
    <script src="<?= base_url()  ?>/bootstrap/assets/js/accordions.js"></script>
    <script src="<?= base_url()  ?>/bootstrap/assets/js/datepicker.js"></script>
    <script src="<?= base_url()  ?>/bootstrap/assets/js/scrollreveal.min.js"></script>
    <script src="<?= base_url()  ?>/bootstrap/assets/js/waypoints.min.js"></script>
    <script src="<?= base_url()  ?>/bootstrap/assets/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url()  ?>/bootstrap/assets/js/imgfix.min.js"></script> 
    <script src="<?= base_url()  ?>/bootstrap/assets/js/slick.js"></script> 
    <script src="<?= base_url()  ?>/bootstrap/assets/js/lightbox.js"></script> 
    <script src="<?= base_url()  ?>/bootstrap/assets/js/isotope.js"></script> 
    <script src="<?= base_url()  ?>/bootstrap/assets/js/login.js"></script> 

    <!-- Login 
    <script src="<?= base_url()  ?>/bootstrap/assets/js/jquery-3.1.1.min.js"></script> 
    <script src="<?= base_url()  ?>/bootstrap/assets/js/jquery-ui.min.js"></script> -->


    <!-- Global Init -->
    <script src="<?= base_url()  ?>/bootstrap/assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>



