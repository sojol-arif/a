
<?php include('header.php'); ?>

<style>
    #body{
        padding-top:0;
    }
    header nav.ic-navbar a.ic-logo-right{
        top:-220px;
    }
    header nav.ic-navbar a.ic-logo-left{
        left:-220px;
    }
    @media only screen and (min-width:992px){
        header nav.ic-navbar a.ic-logo-left.logo-left{
            left:0px;
        }
        header nav.ic-navbar ul.navbar-nav> li.ic-login::after{
            color:#fff;
        }
        header nav.ic-navbar a.ic-logo-right{
            top:0px;
            display:block;
        }
        header nav.ic-navbar ul.navbar-nav li a.nav-link{
            color:#fff;
        }
        header nav.ic-navbar{
            background-color:transparent;
            box-shadow:none;
        }
        header nav.ic-navbar ul.navbar-nav li a.nav-link.navbar-a-color{
            color:#101010;
        }
        header nav.ic-navbar ul.navbar-nav li.nav-item.active>a.link-activ-hover-color,
        header nav.ic-navbar ul.navbar-nav li.nav-item:hover>a.link-activ-hover-color{
            color:#DF1B24;
        }
        header nav.ic-navbar.nav-bg-white{
            background-color:#fff;
        }
        header nav.ic-navbar a.ic-logo-right.notTop{
            top:-300px;
        }
    }
    @media only screen and (min-width:992px) and (max-width:1100px){
        header nav.ic-navbar ul.navbar-nav li a.nav-link{
            padding-left:4px;
            padding-right:4px;
        }
    }
    @media only screen and (max-width:992px){
        header nav.ic-navbar a.ic-logo-left{
            left: 0px;
        }
    }
</style>

    <!-- banner -->
    <div id="banner">
        <img src="images/home/banner.jpg" alt="banner" class="img-fluid home-banner">
        <div id="banner-tabs">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="buy-nav" data-toggle="pill" href="#buy-content" role="tab" aria-controls="buy-content" aria-selected="true">Buy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Sell</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">renovate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-lease-tab" data-toggle="pill" href="#pills-lease" role="tab" aria-controls="pills-lease" aria-selected="false">Lease</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <!-- 1st tab -->
                <div class="tab-pane fade show active" id="buy-content" role="tabpanel" aria-labelledby="pills-home-tab">
                    <form action="">
                        <input class="form-control tagsOne" type="text" placeholder="Agent, Office, City, Neighborhood, Address, Zip or MLS® #">
                        <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>

                <!-- 2nd tab -->
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <form action="">
                        <input class="form-control tagsOne" id="tags" type="text" placeholder="Agent, Office, City, Neighborhood, Address, Zip or MLS® #">
                        <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <form action="">
                        <input class="form-control tagsTwo"  type="text" placeholder="Enter your home address...">
                        <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <div class="tab-pane fade" id="pills-lease" role="tabpanel" aria-labelledby="pills-lease-tab">
                    <form action="">
                        <input class="form-control tagsTwo"  type="text" placeholder="Enter your home address...">
                        <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Listing -->
    <section id="ic-Featured-listing">
        <div class="container">
            <h2>Featured listings</h2>

            <!--carousel -->
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel ic-carousel-home slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/home/carousel-1.jpg" class="d-block w-100 img-fluid" alt="...">
                            <div class="carousel-caption">
                                <ul class="ic-nameArea">
                                    <li>
                                        <a href="">594 MAPLETON</a>
                                    </li>
                                    <li>
                                        <a href="">HOLMBY HILLS, CA</a>
                                    </li>
                                    <li>
                                        <a href="">90024</a>
                                    </li>
                                </ul>
                                <ul class="ic-how-many">
                                    <li>
                                        <a href="">14 BEDROOMS</a>
                                    </li>
                                    <li>
                                        <a href="">27 BATHROOMS</a>
                                    </li>
                                    <li>
                                        <a href="">56,500 SQFT</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/home/carousel-1.jpg" class="d-block w-100 img-fluid" alt="...">
                            <div class="carousel-caption">
                                <ul class="ic-nameArea">
                                    <li>
                                        <a href="">594 MAPLETON</a>
                                    </li>
                                    <li>
                                        <a href="">HOLMBY HILLS, CA</a>
                                    </li>
                                    <li>
                                        <a href="">90024</a>
                                    </li>
                                </ul>
                                <ul class="ic-how-many">
                                    <li>
                                        <a href="">14 BEDROOMS</a>
                                    </li>
                                    <li>
                                        <a href="">27 BATHROOMS</a>
                                    </li>
                                    <li>
                                        <a href="">56,500 SQFT</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/home/carousel-1.jpg" class="d-block w-100 img-fluid" alt="...">
                            <div class="carousel-caption">
                                <ul class="ic-nameArea">
                                    <li>
                                        <a href="">594 MAPLETON</a>
                                    </li>
                                    <li>
                                        <a href="">HOLMBY HILLS, CA</a>
                                    </li>
                                    <li>
                                        <a href="">90024</a>
                                    </li>
                                </ul>
                                <ul class="ic-how-many">
                                    <li>
                                        <a href="">14 BEDROOMS</a>
                                    </li>
                                    <li>
                                        <a href="">27 BATHROOMS</a>
                                    </li>
                                    <li>
                                        <a href="">56,500 SQFT</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Listed Propertise -->
    <section id="ic-listed-propertise" class="ic-absolute-carousel-section">
        <div class="container">
            <div class="bd-example">
                <div id="carouselExampleCaptions2" class="carousel ic-absolute-carousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions2" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions2" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions2" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-12 col-lg-8 col-sm-12">
                                    <img src="images/home/listed-propertise-banner.jpg" class="d-block w-100 img-fluid ic-fadeInLeft2" alt="...">
                                </div>
                                <div class="carousel-caption ic-fadeInRight2">
                                    <h4>Listed Properties</h4>
                                    <ul class="ic-nameArea">
                                        <li>
                                            <a href="">594 MAPLETON</a>
                                        </li>
                                        <li>
                                            <a href="">HOLMBY HILLS, CA</a>
                                        </li>
                                        <li>
                                            <a href="">90024</a>
                                        </li>
                                    </ul>
                                    <ul class="ic-how-many">
                                        <li>
                                            <a href="">14 BEDROOMS</a>
                                        </li>
                                        <li>
                                            <a href="">27 BATHROOMS</a>
                                        </li>
                                        <li>
                                            <a href="">56,500 SQFT</a>
                                        </li>
                                    </ul>
                                    <p class="card-p-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporun incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices grida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    <a href="" class="ic-card-btn ic-btn-black">View Listing</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-12 col-lg-8 col-sm-12">
                                    <img src="images/home/renovate-propertise-carosel-1.jpg" class="d-block w-100 img-fluid ic-fadeInLeft2" alt="...">
                                </div>
                                <div class="carousel-caption ic-fadeInRight2">
                                    <h4>Listed Properties</h4>
                                    <ul class="ic-nameArea">
                                        <li>
                                            <a href="">594 MAPLETON</a>
                                        </li>
                                        <li>
                                            <a href="">HOLMBY HILLS, CA</a>
                                        </li>
                                        <li>
                                            <a href="">90024</a>
                                        </li>
                                    </ul>
                                    <ul class="ic-how-many">
                                        <li>
                                            <a href="">14 BEDROOMS</a>
                                        </li>
                                        <li>
                                            <a href="">27 BATHROOMS</a>
                                        </li>
                                        <li>
                                            <a href="">56,500 SQFT</a>
                                        </li>
                                    </ul>
                                    <p class="card-p-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporun incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices grida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    <a href="" class="ic-card-btn ic-btn-black">View Listing</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-12 col-lg-8 col-sm-12">
                                    <img src="images/home/listed-propertise-banner.jpg" class="d-block w-100 img-fluid ic-fadeInLeft2" alt="...">
                                </div>
                                <div class="carousel-caption ic-fadeInRight2">
                                    <h4>Listed Properties</h4>
                                    <ul class="ic-nameArea">
                                        <li>
                                            <a href="">594 MAPLETON</a>
                                        </li>
                                        <li>
                                            <a href="">HOLMBY HILLS, CA</a>
                                        </li>
                                        <li>
                                            <a href="">90024</a>
                                        </li>
                                    </ul>
                                    <ul class="ic-how-many">
                                        <li>
                                            <a href="">14 BEDROOMS</a>
                                        </li>
                                        <li>
                                            <a href="">27 BATHROOMS</a>
                                        </li>
                                        <li>
                                            <a href="">56,500 SQFT</a>
                                        </li>
                                    </ul>
                                    <p class="card-p-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporun incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices grida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    <a href="" class="ic-card-btn ic-btn-black">View Listing</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Renovate Propertise -->
     <section  id="ic-renovate-propertise" class="ic-absolute-carousel-section">
        <div class="container">
            <div class="bd-example">
                <div id="carouselExampleCaptions3" class="carousel ic-absolute-carousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions3" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions3" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions3" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-12 col-lg-8 offset-lg-4 col-sm-12">
                                    <img src="images/home/renovate-propertise-carosel-1.jpg" class="d-block w-100 img-fluid animated ic-fadeInRight" alt="...">
                                </div>
                                <div class="carousel-caption animated ic-fadeInLeft">
                                    <h4>renovate Properties</h4>
                                    <ul class="ic-nameArea">
                                        <li>
                                            <a href="">594 MAPLETON</a>
                                        </li>
                                        <li>
                                            <a href="">HOLMBY HILLS, CA</a>
                                        </li>
                                        <li>
                                            <a href="">90024</a>
                                        </li>
                                    </ul>
                                    <ul class="ic-how-many">
                                        <li>
                                            <a href="">14 BEDROOMS</a>
                                        </li>
                                        <li>
                                            <a href="">27 BATHROOMS</a>
                                        </li>
                                        <li>
                                            <a href="">56,500 SQFT</a>
                                        </li>
                                    </ul>
                                    <p class="card-p-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporun incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices grida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    <a href="" class="ic-card-btn ic-btn-black">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-12 col-lg-8 offset-lg-4 col-sm-12">
                                    <img src="images/home/listed-propertise-banner.jpg" class="d-block w-100 img-fluid animated ic-fadeInRight" alt="...">
                                </div>
                                <div class="carousel-caption animated ic-fadeInLeft">
                                    <h4>renovate Properties</h4>
                                    <ul class="ic-nameArea">
                                        <li>
                                            <a href="">594 MAPLETON</a>
                                        </li>
                                        <li>
                                            <a href="">HOLMBY HILLS, CA</a>
                                        </li>
                                        <li>
                                            <a href="">90024</a>
                                        </li>
                                    </ul>
                                    <ul class="ic-how-many">
                                        <li>
                                            <a href="">14 BEDROOMS</a>
                                        </li>
                                        <li>
                                            <a href="">27 BATHROOMS</a>
                                        </li>
                                        <li>
                                            <a href="">56,500 SQFT</a>
                                        </li>
                                    </ul>
                                    <p class="card-p-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporun incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices grida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    <a href="" class="ic-card-btn ic-btn-black">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-12 col-lg-8 offset-lg-4 col-sm-12">
                                    <img src="images/home/renovate-propertise-carosel-1.jpg" class="d-block w-100 img-fluid  animated ic-fadeInRight" alt="...">
                                </div>
                                <div class="carousel-caption animated ic-fadeInLeft">
                                    <h4>renovate Properties</h4>
                                    <ul class="ic-nameArea">
                                        <li>
                                            <a href="">594 MAPLETON</a>
                                        </li>
                                        <li>
                                            <a href="">HOLMBY HILLS, CA</a>
                                        </li>
                                        <li>
                                            <a href="">90024</a>
                                        </li>
                                    </ul>
                                    <ul class="ic-how-many">
                                        <li>
                                            <a href="">14 BEDROOMS</a>
                                        </li>
                                        <li>
                                            <a href="">27 BATHROOMS</a>
                                        </li>
                                        <li>
                                            <a href="">56,500 SQFT</a>
                                        </li>
                                    </ul>
                                    <p class="card-p-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporun incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices grida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    <a href="" class="ic-card-btn ic-btn-black">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<script>
$("document").ready(function(){

    //home page navbar hover, color, background
    var navbar = $("nav.ic-navbar");

     $('header nav.ic-navbar ul.navbar-nav>li.nav-item').hover(function() {
        navbar.addClass('nav-color-shadow');
        $('.ic-logo-left').addClass('logo-left');
        $('header nav.ic-navbar ul.navbar-nav> li>a.nav-link').addClass('navbar-a-color');
        $('header nav.ic-navbar ul.navbar-nav> li.ic-login').addClass('afterSlash');
        $('.ic-logo-right').addClass('notTop');
        $('header nav.ic-navbar ul.navbar-nav li.nav-item.active>a,header nav.ic-navbar ul.navbar-nav li.nav-item>a').addClass('link-activ-hover-color');
        navbar.addClass('nav-bg-white');
    }, function() {
        navbar.removeClass('nav-color-shadow');
        $('.ic-logo-left').removeClass('logo-left');
        $('header nav.ic-navbar ul.navbar-nav> li.ic-login').removeClass('afterSlash');
        $('header nav.ic-navbar ul.navbar-nav> li>a.nav-link').removeClass('navbar-a-color');
        $('.ic-logo-right').removeClass('notTop');
        $('header nav.ic-navbar ul.navbar-nav li.nav-item.active>a,header nav.ic-navbar ul.navbar-nav li.nav-item>a').addClass('link-activ-hover-color');
        navbar.removeClass('nav-bg-white');
    });
    if($(window).width()>992){
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100){
                navbar.addClass('nav-color-shadow');
                $('.ic-logo-left').addClass('logo-left');
                $('header nav.ic-navbar ul.navbar-nav> li>a.nav-link').addClass('navbar-a-color');
                $('header nav.ic-navbar ul.navbar-nav> li.ic-login').addClass('afterSlash');
                $('.ic-logo-right').addClass('notTop');
                $('header nav.ic-navbar ul.navbar-nav li.nav-item.active>a,header nav.ic-navbar ul.navbar-nav li.nav-item>a').addClass('link-activ-hover-color');
            } else {
                navbar.removeClass('nav-color-shadow');
                $('.ic-logo-left').removeClass('logo-left');
                $('header nav.ic-navbar ul.navbar-nav> li.ic-login').removeClass('afterSlash');
                $('header nav.ic-navbar ul.navbar-nav> li>a.nav-link').removeClass('navbar-a-color');
                $('.ic-logo-right').removeClass('notTop');
                $('header nav.ic-navbar ul.navbar-nav li.nav-item.active>a,header nav.ic-navbar ul.navbar-nav li.nav-item>a').addClass('link-activ-hover-color');
            }
        });
    }
    if($(window).width()>992){
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100){
                $('header nav.ic-navbar ul.navbar-nav>li.nav-item').hover(function() {
                    navbar.addClass('nav-color-shadow');
                    $('.ic-logo-left').addClass('logo-left');
                    $('header nav.ic-navbar ul.navbar-nav> li>a.nav-link').addClass('navbar-a-color');
                    $('header nav.ic-navbar ul.navbar-nav> li.ic-login').addClass('afterSlash');
                    $('.ic-logo-right').addClass('notTop');
                    $('header nav.ic-navbar ul.navbar-nav li.nav-item.active>a,header nav.ic-navbar ul.navbar-nav li.nav-item>a').addClass('link-activ-hover-color');
                    navbar.addClass('nav-bg-white');
                }, function() {
                    navbar.addClass('nav-color-shadow');
                    $('.ic-logo-left').addClass('logo-left');
                    $('header nav.ic-navbar ul.navbar-nav> li>a.nav-link').addClass('navbar-a-color');
                    $('header nav.ic-navbar ul.navbar-nav> li.ic-login').addClass('afterSlash');
                    $('.ic-logo-right').addClass('notTop');
                    $('header nav.ic-navbar ul.navbar-nav li.nav-item.active>a,header nav.ic-navbar ul.navbar-nav li.nav-item>a').addClass('link-activ-hover-color');
                });
            }
        });
    }
    if($(window).width()>992){
        $(window).scroll(function () {
            if ($(this).scrollTop() < 100){
                $('header nav.ic-navbar ul.navbar-nav>li.nav-item').hover(function() {
                    navbar.addClass('nav-color-shadow');
                    $('.ic-logo-left').addClass('logo-left');
                    $('header nav.ic-navbar ul.navbar-nav> li>a.nav-link').addClass('navbar-a-color');
                    $('header nav.ic-navbar ul.navbar-nav> li.ic-login').addClass('afterSlash');
                    $('.ic-logo-right').addClass('notTop');
                    $('header nav.ic-navbar ul.navbar-nav li.nav-item.active>a,header nav.ic-navbar ul.navbar-nav li.nav-item>a').addClass('link-activ-hover-color');
                    navbar.addClass('nav-bg-white');
                }, function() {
                    navbar.removeClass('nav-color-shadow');
                    $('.ic-logo-left').removeClass('logo-left');
                    $('header nav.ic-navbar ul.navbar-nav> li.ic-login').removeClass('afterSlash');
                    $('header nav.ic-navbar ul.navbar-nav> li>a.nav-link').removeClass('navbar-a-color');
                    $('.ic-logo-right').removeClass('notTop');
                    $('header nav.ic-navbar ul.navbar-nav li.nav-item.active>a,header nav.ic-navbar ul.navbar-nav li.nav-item>a').addClass('link-activ-hover-color');
                    navbar.removeClass('nav-bg-white');
                });
            }
        });
    }
});

</script>
<!-- Required JavaScript Libraries -->
<?php include('footer.php'); ?>