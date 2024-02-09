<section class="consultation">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">


                <div class="consultation__form">
                    <div class="section-title">
                        <span style="color: #373A3B;">Ask for more</span>
                        <h2>Information</h2>
                    </div>

                    <?php
                    include("modelo/conexion.php");
                    include("controladores/infoIndex.php");
                    ?>

                    <form action="#" method="post">
                        <input type="text" name="name" placeholder="Name">
                        <input type="text" name="email" placeholder="Email">
                        <div class="datepicker__item">
                            <input type="text" name="phone" placeholder="Phone number">
                            <i class="fa-solid fa-phone" style="color: #C7C8CC;"></i>
                        </div>

                        <select name="typeService" id="typeService">
                            <option value="Type of service" disabled>Type of service</option>
                            <option value="Porcelain veneers">Porcelain veneers</option>
                            <option value="Teeth whitening">Teeth whitening</option>
                            <option value="Smile design">Smile design</option>
                            <option value="Orthodontics">Orthodontics</option>
                            <option value="Implants">Implants</option>
                            <option value="Rehabilitation">Rehabilitation</option>
                            <option value="Other">Other</option>
                        </select>
                        <button type="submit" value="ok" name="btnForm" class="site-btn" style="background-color: #373A3B;">Ask for information</button>
                    </form>


                </div>
            </div>
            <div class="col-lg-8">
                <div class="consultation__text">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="consultation__text__item">
                                <div class="section-title">
                                    <span>Welcome to Luxur Smiles</span>
                                    <h2>Find the best dentists with <b style="color: #79797A;">LUXUR SMILES</b></h2>
                                </div>
                                <p>Ten years perfecting smiles, restoring confidence. Each patient a story, each treatment a transformation. Passion for oral health, dedication to well-being. Quality dentistry, smiles for life.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="consultation__video set-bg" data-setbg="img/imgVideo2.png">
                                <a href="videos/video2.mp4" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>