<?php
    require_once('header.php');
?>

<section id="home">
        <!-------------------------------slider-------------------------------------->
            <div id="carousel-example-generic" class="carousel slide row" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php
                        $con = mysqli_connect("localhost", "root", "", "sedia_admin");
                        if($con == false){
                            die(mysqli_connect_error());
                        }
                        $select_sql = "SELECT * FROM home_slider";
                        $result = mysqli_query($con , $select_sql);
                        if($result->num_rows > 0){
                            for($i = 0 ; $i < $result->num_rows ; $i++){
                                $row = $result->fetch_assoc();
                    ?> 
                    <li data-target="#carousel-example-generic" data-slide-to="<?=$i?>" class="<?=($i == 0) ? "active" : "" ?>"></li>
                    <?php
                        }
                    }
                    ?>
                </ol>
                
                    <!-- Wrapper for slides -->
                <div class="carousel-inner row" role="listbox">
                    <?php
                        $con = mysqli_connect("localhost", "root", "", "sedia_admin");
                        if($con == false){
                            die(mysqli_connect_error());
                        }
                        $select_sql = "SELECT * FROM home_slider";
                        $result = mysqli_query($con , $select_sql);
                        if($result->num_rows > 0){
                            for($i = 0 ; $i < $result->num_rows ; $i++){
                                $row = $result->fetch_assoc();
                    ?> 
                                <div class="item <?=($i == 0) ? "active" : "" ?> col-xs-12">
                                    <img src="<?=$row["src"]?>" alt="slider" class="slider-img">
                                    <div class="carousel-caption col-xs-12">
                                        <h3 class="<?=($i == 0) ? "wow flipInX" : "" ?>" <?=($i == 0) ? 'data-wow-duration="1s"' : "" ?>>Sedia <span class="furniture ">Furniture!</span></h3>
                                        <p class="<?=($i == 0) ? "wow flipInX" : "" ?>" <?=($i == 0) ? 'data-wow-duration="1s" data-wow-delay="0.5s" ' : "" ?>><span class="creative">/<?=$row["tagspan"]?></span> <?=$row["tagp"]?>.</p>
                                        <p class="small <?=($i == 0) ? "wow flipInX" : "" ?>" <?=($i == 0) ? 'data-wow-duration="1s" data-wow-delay="1s" ' : "" ?>><span class="leftline"></span> We are a team of professionals <span class="rightline"></span></p>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>

                </div>
            </div>
        <!--------------------------------end-slider---------------------------------------->
    </section>
    <main>
        <!------------------------------first-container---------------------------------->
        <section class="big-con" id="services">
            <div class="text-center">
                <div class="col-xs-12 heart-style2">
                    <i class="fa fa-heart-o heart2" aria-hidden="true"></i>
                    <h2 class="container-h wow fadeInDown" data-wow-duration="1s">Our Services</h2>
                </div>
                <div class="row">

                    <?php
                        $con = mysqli_connect("localhost", "root", "", "sedia_admin");
                        if($con == false){
                            die(mysqli_connect_error());
                        }
                        $select_sql = "SELECT * FROM services";
                        $result = mysqli_query($con , $select_sql);
                        if($result->num_rows > 0){
                            for($i = 0 ; $i < $result->num_rows ; $i++){
                                $row = $result->fetch_assoc();
                    ?> 
                                <div class="col-xs-12 col-sm-6 col-md-3 services-cont wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    <p class="container-p"><?=$row['section']?></p>
                                </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </section>

        <section class="big-con2" id="gallary">
            <div class="text-center">
                <div class="row">
                    <h2 class="container-h wow fadeInDown" data-wow-duration="1s">Our Gallery</h2>
                </div>
                <div class="row">
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "sedia_admin");
                    if($con == false){
                        die(mysqli_connect_error());
                    }
                    $select_sql = "SELECT * FROM gallary_p";
                    $result = mysqli_query($con , $select_sql);
                    if($result->num_rows > 0){
                        for($i = 0 ; $i < $result->num_rows ; $i++){
                            $row = $result->fetch_assoc();
                    ?> 
                        <div class="col-xs-12 heart-style wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <i class="fa fa-heart-o heart" aria-hidden="true"></i>
                            <p class="container-p" ><?=$row['para']?></p>
                        </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </section>
        <!-----------------------------end-first-container---------------------------------->

        <!-----------------------------------images------------------------------------->    
            
            <section class="row room-menu">
                <div class="col-xs-12 col-md-12">
                    <div class="filter-butt">
                        <button class="butt active wow flipInX" data-wow-duration="1s" id="all-imgs" data-filter="all">All</button>
                        <?php
                        $con = mysqli_connect("localhost", "root", "", "sedia_admin");
                        if($con == false){
                            die(mysqli_connect_error());
                        }
                        $select_sql = "SELECT * FROM gallary_categories";
                        $result = mysqli_query($con , $select_sql);
                        if($result->num_rows > 0){
                            for($i = 0 ; $i < $result->num_rows ; $i++){
                                $row = $result->fetch_assoc();
                        ?> 
                        <button class="butt wow flipInX" data-wow-duration="1s" id="<?=$row['category']?>" data-filter=".<?=$row['category']?>"><?=$row['buttname']?></button>
                        <?php
                            }
                        }
                        ?>
                    
                    </div>
                </div>
            </section>

            <section class="photos">
                <div class="row filter22">
                        <?php
                        $con = mysqli_connect("localhost", "root", "", "sedia_admin");
                        if($con == false){
                            die(mysqli_connect_error());
                        }
                        $select_sql = "SELECT * FROM gallary_imgs";
                        $result = mysqli_query($con , $select_sql);
                        if($result->num_rows > 0){
                            for($i = 0 ; $i < $result->num_rows ; $i++){
                                $row = $result->fetch_assoc();
                        ?> 
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mix  <?=$row['category']?> img-container ">
                            <div class="remove wow fadeInUp " data-wow-duration="1s" data-wow-delay="<?=$i/4 . 's'?>">
                                <img src="<?=$row['src']?>" alt="<?=$row['descrp']?>">
                                <div class="img-hov">
                                    <a class="show-me"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <p>Sedia Furniture</p>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        }
                        ?>
                </div>
                
            </section>

            <section class="show-img">
                <div class="big-box"></div>
                <div class="box">
                    <img src="http://www.sedia-furniture.com/images/item-1.jpg">
                </div>
            </section>
        <!------------------------------------end-images----------------------------------->

        <!------------------------------sec-container---------------------------------->
            <section class="sec-con text-center" id="about">
                <div class="row">
                    <p class="container-h wow fadeInDown" data-wow-duration="1s">ABOUT US</p>
                        <?php
                        $con = mysqli_connect("localhost", "root", "", "sedia_admin");
                        if($con == false){
                            die(mysqli_connect_error());
                        }
                        $select_sql = "SELECT * FROM about_p";
                        $result = mysqli_query($con , $select_sql);
                        if($result->num_rows > 0){
                            for($i = 0 ; $i < $result->num_rows ; $i++){
                                $row = $result->fetch_assoc();
                        ?> 

                            <div class="col-xs-12 heart-style wow fadeInUp" data-wow-duration="1s" data-wow-delay="<?=$i/4 . 's'?>">
                                <i class="fa fa-heart-o heart" aria-hidden="true"></i>
                                <p class="container-p"><?=$row['para']?></p>
                            </div>
                        
                        <?php
                            }
                        }
                        ?>
                </div>
            </section>
        <!-----------------------------end-sec-container---------------------------------->

        <!---------------------------------facts-container--------------------------------->
            <section class="row facts text-center">
                <div class="col-xs-12 sub-con">
                    <div class="col-xs-12 heart-style2">
                        <i class="fa fa-heart-o heart2" aria-hidden="true"></i>
                        <p class="fact-font wow flipInX" data-wow-duration="1s">SOME FUN FACTS</p>
                    </div>
                    <div class="row items col-xs-12">
                        <div class="col-xs-12 col-sm-6 col-md-3 container-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <i class="fa fa-clock-o icon clock" aria-hidden="true" class="icon"></i>
                            <div class="cont">
                                <span class="num">12</span>
                                <p class="cap-p">HOURS OF WORK IN DAY</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 container-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.75s">
                            <i class="fa fa-users icon" aria-hidden="true" class="icon"></i>
                            <div class="cont">
                                <p class="sm-p">More Than</p>
                                <span class="num">500</span>
                                <p class="cap-p">SATISFIED CLIENTS</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 container-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <i class="fa fa-rocket icon" aria-hidden="true" class="icon"></i>
                            <div class="cont">
                                <p class="sm-p">More Than</p>
                                <span class="num">850</span>
                                <p class="cap-p">ROOMS DELIVERED</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 container-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.25s">
                            <i class="fa fa-clock-o icon clock" aria-hidden="true" class="icon"></i>
                            <div class="cont">
                                <span class="num">2015</span>
                                <p class="cap-p">SINCE</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-----------------------------end-facts-container--------------------------------->


        <!-----------------------------third-container--------------------------------->
        <section class="third sec-con text-center " id="contact">
            <div class="row">
                <div class="col-xs-12 heart-style2 wow fadeInDown"  data-wow-duration="1s">
                    <i class="fa fa-heart-o heart2" aria-hidden="true"></i>
                    <p class="container-h">CONTACT US</p>
                </div>
                <p class="col-xs-12 container-p wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">We support the client in the course of the contract and after delivery and at any time within 24 hours .. E-mail us at any time and we will reply as soon as.</p>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-4 contact">
                    <p class="contact-title">Our Contact</p>
                    <p class="content">23 El Nasr st, Cairo, Egypt</p>
                    <p class="content">info@sedia-furniture.com</p>
                    <p class="content">(02) 25192589</p>
                    <p class="content">(01) 000337906</p>
                </div>

                <div class="col-xs-12 col-md-8">
                    <div class="row form">
                        <form action="after_submit.php" method="POST">
                            <p class="form-title col-xs-12">Say hello!</p>
                            <div class="col-xs-12 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                                <input type="text" placeholder="Name" name="name" id="name">
                                <small class="error no-name"></small>
                            </div>
                            <div class="col-xs-12 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                <input type="text" placeholder="Email" name="email" id="email">
                                <small class="error no-email"></small>
                            </div>
                            <div class="col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                <textarea placeholder="Message" name="mess" id="mess"></textarea>
                                <small class="error no-mess"></small>
                            </div>
                            <div class="col-xs-12">
                            <p class="sent"></p>
                            </div>
                            <input type="submit" value="Send Message" id="sub" class="mess wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            
                        </form>
                        
                        
                    </div>
                </div>
            </div>
        </section>


        <!-----------------------------end-third-container--------------------------------->
    </main>

<?php
    require_once('footer.php');
?>