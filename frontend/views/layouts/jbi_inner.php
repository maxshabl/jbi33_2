
<?php

$this->beginPage();
if( Yii::$app->session->hasFlash('success') ): ?>
    <div style="text-align: center;" class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('success'); ?>
    </div>
<?php endif;?>

    <!DOCTYPE HTML>
    <html>
    <head>
        <title><? if($this->title) echo $this->title; else  echo 'Железобетонные кольца для колодцев.'; ?></title>

        <meta http-equiv="Cache-Control" content="no-cache">
        <?php $this->head() ?>
        <meta name="yandex-verification" content="463e25becca3180d" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="/jbi_sources/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- Custom Theme files
        <link href="/css/site.css" rel='stylesheet' type='text/css' />-->
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

            <div class="content">
                <div class="content_box">
                    <?=$content ?>
                    <?php echo $this->render("//common/footer") ?>
                </div>
            </div>


        </div>
    </div>

    <?php $this->endBody(); ?>

    </body>
    </html>

<?php $this->endPage(); ?>