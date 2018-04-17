<?php $this->beginPage(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Железобетонные кольца для колодцев.</title>
    <meta name="yandex-verification" content="463e25becca3180d" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/jbi_sources/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="/jbi_sources/css/style.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="/jbi_sources/js/jquery-1.11.1.min.js"></script>
    <!-- start menu -->
    <link href="/jbi_sources/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="/jbi_sources/js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
</head>
<body>
<?php $this->beginBody(); ?>

<div class="wrap">
    <div class="container">
        <?php echo $this->render("//common/header") ?>
        <div class="grid_1">
            <!--<div class="col-md-3 banner_left">
                <img src="images/pic1.png" class="img-responsive" alt=""/>
                <div class="banner_desc">
                    <h1>Slim Fit Men </h1>
                    <h2>Roundcheck T-Shirt</h2>
                    <h5>$125
                           <small>Only</small>
                        </h5>
                    <a href="#" class="btn1 btn4 btn-1 btn1-1b">Add To Cart</a>
                </div>
            </div>-->
            <div class="col-md-12 banner_right">
                <!-- FlexSlider -->
                <section class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li><img src="/jbi_sources/images/banner/banner.jpg" alt=""/></li>
                            <li><img src="/jbi_sources/images/banner/banner1.jpg" alt=""/></li>
                            <li><img src="/jbi_sources/images/banner/banner2.jpg" alt=""/></li>
                            <li><img src="/jbi_sources/images/banner/banner3.jpg" alt=""/></li>
                            <li><img src="/jbi_sources/images/banner/banner4.jpg" alt=""/></li>
                        </ul>
                    </div>
                </section>
                <!-- FlexSlider -->
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="content">
            <div class="content_box">
                <?=$content ?>
                <?php echo $this->render("//common/footer") ?>
            </div>
        </div>


    </div>
</div>
<link href="/jbi_sources/css/flexslider.css" rel='stylesheet' type='text/css' />
<script defer src="/jbi_sources/js/jquery.flexslider.js"></script>
<script type="text/javascript">

    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<?php $this->endBody(); ?>

</body>
</html>

<?php $this->endPage(); ?>