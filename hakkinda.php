<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="telephone=no" name="format-detection">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <title>Fashion HTML Template</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,900%7CTangerine:400,700%7CPlayfair+Display:400,700"
          rel="stylesheet">
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="plugins/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="plugins/slick/slick/slick.css" rel="stylesheet">
    <link href="plugins/lightGallery-master/dist/css/lightgallery.min.css" rel="stylesheet">
    <link href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css" rel="stylesheet">
    <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="plugins/voye-icons/style.css" rel="stylesheet">
    <link href="plugins/selectize/dist/css/selectize.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php include "./header.php" ?>
<div class="ps-hero--2 bg--top" data-background="img/bg-hakkimizda.jpg">
    <div class="ps-breadcrumb">
        <h1>Hakkımızda</h1>
        <ol class="breadcrumb">
            <li><a href="index.php">Ana Sayfa</a></li>
            <li class="active">Hakkımızda</li>
        </ol>
    </div>
</div>
<div class="ps-page ps-page--about">
    <div class="ps-about--intro">
        <div class="container">
            <blockquote>
                <p>1998 yılında kurulan erkek giyim markamız, Türkiye'de üretilen ürünleri Avrupa pazarına sunmaktadır. </</p>
            </blockquote>
            <p>Markamız, kaliteli malzemeler ve modern tasarımlarla öne çıkan ürünler
                sunmaktadır. Markamız, geniş bir ürün yelpazesine sahiptir ve her yaş ve tarzda erkekler
                için uygun seçenekler sunmaktadır. Ayrıca, müşteri memnuniyeti bizim için çok önemlidir
                ve her müşterinin beklentilerini karşılamak için elimizden geleni yaparız..
            </p>
            <div class="ps-video"><a href="#"><img src="img/pages/about-video.jpg" alt=""></a><a class="ps-video__link" href="#"><i class="icon-play-circle"></i></a></div>
            </p>
        </div>
    </div>
</div>
<?php include "./footer.php"; ?>
<div id="back2top"><i class="fa fa-angle-up"></i></div>
<div id="loader-wrapper"><img alt="" src="img/loading.png">
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<div class="ps-search" id="site-search"><a class="ps-btn--close" href="#"></a>
    <div class="ps-search__content">
        <form action="do_action" class="ps-form--primary-search" method="post">
            <input class="form-control" placeholder="Type your keyword..." type="text">
            <button><i class="aroma-magnifying-glass"></i></button>
        </form>
    </div>
</div>
<div class="ps-modal" id="login">
    <div class="ps-modal__container"><a class="ps-btn--close ps-btn--no-boder" href="#"></a>
        <div class="ps-modal__content">
            <form action="do_action" class="ps-form--register" method="post">
                <h3>Become a member <br> Please register</h3>
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" placeholder="" type="text">
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input class="form-control" placeholder="" type="email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" placeholder="" type="password">
                </div>
                <div class="form-group submit">
                    <button class="ps-btn ps-btn--outline ps-btn--black ps-btn--lg">Register</button>
                    <p>or continue with</p><a class="ps-btn facebook ps-btn--lg" href="#"> Facebook</a>
                    <p>or member to Voye?<a href="login.html"> Login Now</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Plugins-->
<script src="plugins/jquery-1.12.4.min.js"></script>
<script src="plugins/selectize/dist/js/standalone/selectize.min.js"></script>
<script src="plugins/plugins.min.js"></script>
<!-- Custom scripts-->
<script src="js/main.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxflHHc5FlDVI-J71pO7hM1QJNW1dRp4U&amp;region=GB"></script>
</body>
</html>