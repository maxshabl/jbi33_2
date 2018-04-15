<?php
use yii\helpers\Html;
$this->title = "Корзина";
?>
<?= Html::beginForm('/product/cart', 'post', ['id' => 'cart_form'])?>
<div class="cart">
    <?= Html::error($order, 'good_id', ['tag'=>'div','class'=>'error'])?>
    <div class="cart_box">
        <h3 class="col-sm-2 cart_title">...</h3>
        <h3 class="col-sm-4 cart_title">Название</h3>
        <h3 class="col-sm-1 cart_title">Цена</h3>
        <h3 class="col-sm-1 cart_title ">Колич</h3>
        <h3 class="col-sm-2 cart_title">Сумма</h3>
        <h3 class="col-sm-1 cart_title">...</h3>
        <div class="clearfix"></div>
    </div>
    <?php foreach ($goods as $gItem):?>
        <div id="<?=$gItem->good_id?>" class="cart_box">
            <div class="col-sm-2"><?//=$gItem->img?></div>
            <div class="col-sm-4"><?=$gItem->title.$gItem->title.$gItem->title?></div>
            <div class="col-sm-1"><?=$gItem->price?></div>
            <div class="col-sm-1 item_price" ><input name="count" type="text" value="<?=$basket['goods'][$gItem->good_id]?>"></div>
            <div class="col-sm-2"><?=$basket['goods'][$gItem->good_id]*$gItem->price //$basket['price']?></div>
            <div class="col-sm-1">Удалить</div>
            <div class="clearfix"></div>
        </div>
    <?php endforeach;?>
    <div class="contact_form">
        <div class="row_5">
            <div class="input_block">
                <?= Html::error($order, 'name', ['tag'=>'div','class'=>'error'])?>
                <input type="text" class="text" name="name"  placeholder="Ваше имя" >
            </div>
            <div class="input_block">
                <?= Html::error($order, 'email', ['tag'=>'div','class'=>'error'])?>
                <input type="text" class="text" name="email"  placeholder="Email"  >
            </div>
            <div class="input_block">
                <?= Html::error($order, 'email', ['tag'=>'div','class'=>'error'])?>
                <input type="text" class="text" name="phone"  placeholder="Тел номер"  >
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row_6">
            <div class="input_block">
                <?= Html::error($order, 'message', ['tag'=>'div' ])?>
                <textarea name="message" placeholder="Сообщение:" ></textarea>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="clearfix"></div>

    <div class="cart_box">
        <div class="cart_sum">Итого: 3432423 рублей</div>
        <div class="clearfix"></div>
        <button class="cart-button" type="submit" > Сделать заказ </button>
        <div class="cart-button" style="background-color: #15be74;"> Пересчитать </div>
        <div class="clearfix"></div>

    </div>



<?= Html::endForm()?>


