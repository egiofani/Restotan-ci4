<?= $this->extend('template/front/home') ?>

<?= $this->section('content') ?>
 <!-- ***** Main Banner Area Start ***** -->
 <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>KlassyCafe</h4>
                            <h6>THE BEST EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="<?= base_url()  ?>/bootstrap/assets/images/slide-01.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="<?= base_url()  ?>/bootstrap/assets/images/slide-02.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="<?= base_url()  ?>/bootstrap/assets/images/slide-03.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>We Leave A Delicious Memory For You</h2>
                        </div>
                        <p>Klassy Cafe is one of the best <a href="https://templatemo.com/tag/restaurant" target="_blank" rel="sponsored">restaurant HTML templates</a> with Bootstrap v4.5.2 CSS framework. You can download and feel free to use this website template layout for your restaurant business. You are allowed to use this template for commercial purposes. <br><br>You are NOT allowed to redistribute the template ZIP file on any template donwnload website. Please contact us for more information.</p>
                        <div class="row">
                            <div class="col-4">
                                <img src="<?= base_url()  ?>/bootstrap/assets/images/about-thumb-01.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="<?= base_url()  ?>/bootstrap/assets/images/about-thumb-02.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="<?= base_url()  ?>/bootstrap/assets/images/about-thumb-03.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                            <img src="<?= base_url()  ?>/bootstrap/assets/images/about-video-bg.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of cakes with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                <?php foreach($banner as $key => $value):  ?>
                    <div class="item">
                        <div class='card' style="background-image: url('<?= base_url("/upload/".$value['gambar']); ?>')">
                            <div class='info'>
                              <h1 class='title'><?= $value['banner'] ?></h1>
                              <p class='description'><?= $value['link'] ?></p>
                              <div class="main-text-button">
                              </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Klassy Week</h6>
                        <h2>This Week’s Special Meal Offers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                        <?php foreach($kategori as $key => $value):  ?>
                                          <li><a href='#<?= $value['idkategori'] ?>'><img src="<?= base_url()  ?>/bootstrap/assets/images/tab-icon-01.png" alt=""><?= $value['kategori'] ?></a></li>
                                          <?php endforeach ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                            <?php foreach($kategori as $key => $value):  ?>
                                <article id='<?= $value['idkategori'] ?>'>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <?php foreach($menu as $key => $data):  ?>
                                                    <?php if ($data['idkategori'] === $value['idkategori']) : ?>
                                                    <div class="col-md-6">
                                                        <div class="tab-item"><a href="<?= base_url('tambah-ke-keranjang/' . $data['idmenu']) ?>"><button class="btn">
                                                            <img src="<?= base_url("/upload/".$data['gambar']); ?>" alt="">
                                                            <h4><?= $data['menu'] ?></h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price ">
                                                                <h6><?= number_format($data['harga'], 0, ',', '.')  ?></h6>
                                                            </div>
                                                            </button></a>
                                                        </div>
                                                    </div>
                                                    <?php endif ?>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                </article>  
                                <?php endforeach ?>   
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** --> 
    <?= $this->endSection() ?> 