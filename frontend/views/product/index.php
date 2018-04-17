<?php
    $models = array_chunk($models, 3);

?>

    <div class="men">
        <!--<h1 style="text-align: center" class="contact_head">ЖБИ изделия</h1>-->
        <?php foreach ($models as $chunk):?>
            <div class="contact_box">
                <?php foreach ($chunk as $item):?>
                    <div class="col-sm-4">
                        <a class="img-lnk" href="pr/<?=$item->slug?>"><img src="<?=$item->img?>" class="img-responsive" alt=""></a>
                        <h4 class="item_title"> <?=$item->title?> </h4>
                        <p class="item_desc"> <?=$item->short_descr?></p>
                        <div id="<?=$item->good_id?>" class="item_price">
                            <div class="price" >Цена: <span><?=$item->price?></span> р</div>

                            <!--<a title="Добавить в корзину"><i  class="to_bag"></i></a>-->
                            <a href="/kontakty" title="Добавить в корзину"><i  class="to_bag"></i></a>
                            <input  type="text" value="1" >
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                <?php endforeach;?>
                <div class="clearfix"> </div>
            </div>
        <?php endforeach;
        echo \yii\widgets\LinkPager::widget([
            'pagination' => $pages,
        ]);
        ?>
        <div class="clearfix"> </div>
    </div>


<!--<script type="text/javascript">

    $(document).ready(function(){              // по окончанию загрузки страницы
        $('i.to_bag').click(function(event){      // вешаем на клик по элементу с id = example-1
            id = $(this).parent().parent().attr('id');
            count = $(this).parent().parent().children('input').attr('value');
            url = '/product/tobasket';
            price = $(this).parent().parent().children('div.price').children('span').text();
            params = 'id='+id+'&count='+count+'&price='+price+'&XDEBUG_SESSION_START=PHPSTORM';
            sendAjax(url, params);
        })
    });

    function sendAjax(url, data)
    {
        $.ajax({ //  сам запрос
            type: 'GET',
            url: url,
            data: data, // данные которые передаём  серверу
            dataType: "json" // предполоижтельный формат ответа сервера
        }).done(function(res) { // если успешно
            console.log('Ответ получен: ', res);
            val = jQuery.parseJSON(res.price);
            $("#basket").text(val+' руб');
        }).fail(function() { // если ошибка передачи

            console.log('Ошибка выполнения запроса!');
        });
    }
</script>-->
