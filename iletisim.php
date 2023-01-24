<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Gewer</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,900%7CTangerine:400,700%7CPlayfair+Display:400,700" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/lightGallery-master/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/voye-icons/style.css">
    <link rel="stylesheet" href="plugins/selectize/dist/css/selectize.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php include "./header.php"; ?>

    <div class="ps-page ps-page--contact">
        <div class="ps-contact">
            <div class="ps-section__header">
                <div class="container">
                    <h1>İletişim</h1>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 ">
                            <div class="ps-block--contact">
                                <div class="ps-block__icon"><i class="icon-map-pin"></i></div>
                                <div class="ps-block__content">
                                    <h4>Mağaza Adresi</h4>
                                    <p>M. Nesih Özmen mah. Merter TekKasım Sk. Merter AWM Çarşı İçi Kat:2 No:106 Merter/İSTANBUL</p>
                                    <p>+90 533 305 96 72</p><a href="#">domain@example.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps-section__content">
                <div class="ps-contact__map">
                   
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12042.894628549657!2d28.8870412!3d41.0094213!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb233f3f828ccbe05!2sMerter%20AVM!5e0!3m2!1str!2str!4v1673794107947!5m2!1str!2str" width="600" height="1200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					
                </div>
                <div class="ps-contact__form">
                    <form class="ps-form--contact" action="do_action" method="post">
                        <h3>İletişim</h3>
                        <div class="form-group">
                            <label>İsim</label>
                            <input class="form-control" type="text" placeholder="Enter your name...">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" placeholder="Enter your email...">
                        </div>
                        <div class="form-group">
                            <label>Konu</label>
                            <input class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Mesaj</label>
                            <textarea class="form-control" rows="6" placeholder=""></textarea>
                        </div>
                        <div class="form-group submit">
                            <button class="ps-btn ps-btn--black">Mesaj Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include "./footer.php"; ?>
  
    <!-- Plugins-->
    <script src="plugins/jquery-1.12.4.min.js"></script>
    <script src="plugins/selectize/dist/js/standalone/selectize.min.js"></script>
    <script src="plugins/plugins.min.js"></script>
    <!-- Custom scripts-->
    <script src="js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxflHHc5FlDVI-J71pO7hM1QJNW1dRp4U&amp;region=GB"></script>
</body>

</html>