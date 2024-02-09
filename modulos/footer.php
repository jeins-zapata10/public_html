<footer class="footer">
    <div class="footer__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="footer__logo">
                        <a href="#">
                            <h2 style="color: white;">LUXUR SMILES</h2>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 text-center">

                    <?php
                    include("modelo/conexion.php");
                    include("controladores/formSuscri.php");
                    ?>

                    <div class="footer__newslatter">
                        <form method="post">
                            <input type="text" name="correo" placeholder="Email" autocomplete="off">
                            <button type="submit" name="btnSuscri" value="ok" class="site-btn" style="background-color: #C3C2C2;">Subscribe</button>
                        </form>
                    </div>

                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="footer__social">
                        <a href="https://www.facebook.com/Luxursmilesclinic?mibextid=DlZzXU" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/luxursmiles?igsh=ZnltbThtdG1qaGtq&utm_source=qr" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.tiktok.com/@luxursmiles?_t=8jY775JASjm&_r=1" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <h5>Company</h5>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Departments</a></li>
                        <li><a href="#">Find a Doctor</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">News</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <h5>Quick links</h5>
                    <ul>
                        <li><a href="#">Porcelain veneers</a></li>
                        <li><a href="#">Teeth whitening</a></li>
                        <li><a href="#">Smile design</a></li>
                        <li><a href="#">Orthodontics</a></li>
                        <li><a href="#">Rehabilitation</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="footer__address">
                    <h5>Contact Us</h5>
                    <ul>
                        <li><i class="fa fa-map-marker" style="color: #373A3B;"></i> Cali -colombia, Cra 37 a # 5b5 - 53</li>
                        <li><i class="fa fa-phone" style="color: #373A3B;"></i> (57) 317 6454400</li>
                        <li><i class="fa fa-envelope" style="color: #373A3B;"></i>hello@luxursmiles.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="footer__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5967.29514144839!2d-76.5427975380057!3d3.4250446357643693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a7224bcee4e1%3A0x4367f7724cba6916!2sLUXUR%20SMILES!5e0!3m2!1ses-419!2sco!4v1707227840166!5m2!1ses-419!2sco" width="400" height="230" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <div class="footer__copyright__text">
                        <p>Copyright &copy; <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | Luxur Smile</p>
                    </div>

                </div>
                <div class="col-lg-5">
                    <ul>
                        <li>All Rights Reserved</li>
                        <li>Terms & Use</li>
                        <li>Privacy Policy</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>