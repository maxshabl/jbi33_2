<?php
    $session = Yii::$app->session;
    $session->open();
    $basket = \yii\helpers\Json::decode($session->get('basket'), true);

?>
<div class="header_top">
    <div class="col-sm-9 h_menu4">

        <ul class="megamenu skyblue">
            <li class="active grid"><a class="color1" href="/">Главная</a></li>
            <li class="active grid"><a class="color2" href="/o_nas">О нас</a></li>
            <li class="active grid"><a class="color3" href="/produkciya">Продукция</a></li>
            <li class="active grid"><a class="color4" href="/dostavka">Доставка</a></li>
            <li class="active grid"><a class="color5" href="/kontakty">Контакты</a></li>
        </ul>
    </div>
    <div class="col-sm-3 header-top-right">
        <!-- <div class="drop_buttons">

            <select class="drop-down">
               <option value="1">Войти</option>
               <option value="2">Euro</option>
            </select>
               <!--<select class="drop-down drop-down-in">
                <option value="1">English</option>
                <option value="2">French</option>
                <option value="3">German</option>
            </select>
              <div class="clearfix"></div>
           </div>-->
        <div class="register-info">
            <ul>
                <li><a href="/login">Войти</a></li>
                <li><a href="/reg">Регистрация</a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
</div>
<div class="header_bootm">
    <div class="col-sm-4 span_1">
        <div class="logo">
            <a href="index.html"><img src="/jbi_sources/images/logo.png" alt=""/></a>
        </div>
    </div>
    <div class="col-sm-8 col-xs-12 row_2">
        <div class="header_bottom_right">
            <div class="search">
                <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your email address';}">
                <input type="submit" value="">
            </div>
            <ul class="bag">
                <a href="/cart"><i class="bag_left"> </i></a>
                <a href="/cart"><li class="bag_right"><p id="basket"><?=(isset($basket['price'])?$basket['price']:0) ?> руб</p> </li></a>
                <div class="clearfix"> </div>
            </ul>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>