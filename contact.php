<?php include("modulos/head.php") ?>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->
<?php include("modulos/offcanvas.php") ?>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<?php include("modulos/header.php") ?>
<!-- Header Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option spad set-bg" data-setbg="img/consultorio.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text" >
                    <h2>Contact Us</h2>
                    <!-- <div class="breadcrumb__links">
                        <a href="./index.html">Home</a>
                        <span>Contact</span>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-4 col-sm-6">
                <div class="contact__widget">
                    <div class="contact__widget__icon">
                        <i class="fa fa-map-marker" style="color: #373A3B;"></i>
                    </div>
                    <div class="contact__widget__text">
                        <h5>Address</h5>
                        <p>Cra 37 a # 5b5 - 53 / Cali - Colombia</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="contact__widget">
                    <div class="contact__widget__icon">
                        <i class="fa fa-phone" style="color: #373A3B;"></i>
                    </div>
                    <div class="contact__widget__text">
                        <h5>Phone</h5>
                        <p>317 6454400</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="contact__widget">
                    <div class="contact__widget__icon">
                        <i class="fa fa-envelope" style="color: #373A3B;"></i>
                    </div>
                    <div class="contact__widget__text">
                        <h5>Email</h5>
                        <p>hello@luxursmiles.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center contact spad">
            <div class="col-lg-12">
                <h3>Find luxur Smiles in Cali, Colombia</h3>
            </div>
            <div class="col-lg-12 pt-3">
                <p>Our dental clinic in Cali, Colombia, is strategically located in a vibrant and culturally rich city. In addition to offering top-quality dental services, our patients can enjoy a wide variety of delicious foods, exciting entertainment venues, and the opportunity to learn salsa dancing at renowned local venues.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12"><img class="img-fluid" src="imagenes/parque.png" alt=""></div>
            <div class="col-lg-3 col-md-6 col-sm-12"><img class="img-fluid" src="imagenes/ermita.jpg" alt=""></div>
            <div class="col-lg-3 col-md-6 col-sm-12"><img class="img-fluid" src="imagenes/cerro.jpg" alt=""></div>
            <div class="col-lg-3 col-md-6 col-sm-12"><img class="img-fluid" src="imagenes/gatos.jpg" alt=""></div>
        </div>
        <div class="contact__content">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__pic">
                        <img src="img/contact-pic.jpg" alt="Photo reception">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form p-3" style="background-color: #C3C2C2;">
                        <h3>Get in touch</h3>
                        <?php
                        include("modelo/conexion.php");
                        include("controladores/contact.php");
                        ?>
                        <form action="" method="POST">
                            <input type="text" name="name" placeholder="Name">
                            <input type="emil" name="email" placeholder="Email">
                            <input type="text" name="phoneNumber" placeholder="Phone Number">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button type="submit" name="btnContact" value="ok" class="site-btn" style="background-color: #373A3B;">Send Message</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->



<!-- Footer Section Begin -->
<?php include("modulos/footer.php") ?>
<!-- Footer Section End -->

<!-- Js Plugins -->
<?php include("modulos/scripts.php") ?>