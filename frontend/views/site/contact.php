<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>


        <h1 style="padding-top: 50px;text-align: center;    text-transform: inherit; padding-bottom: 50px;" class="contact_head">Заказ можно сделать по указанным теолефонам, через email или форму обратной связи</h1>
        <div class="col-sm-6">

            <address class="addr">
                <p>
                    Владимирская Область, Суздальский Район, <br>поворот на п. Садовый <br>(Напротив ресторана Терем)
                </p>
                <dl>
                    <dt>Тел:</dt>
                    <dd>+7 (4922) 60-30-36</dd>
                </dl>
                <dl>
                    <dt>Тел:</dt>
                    <dd>+7 (904) 260-04-04</dd>
                </dl>
                <dl>
                    <dt>Тел:</dt>
                    <dd>+7 (920) 906-72-06</dd>
                </dl>
                <dl>
                    <dt>Тел:</dt>
                    <dd>+7 (903) 830-72-06</dd>
                </dl>

                <p ><span style="font-weight: bold">E-mail:</span>
                    jbi33@yandex.ru
                </p>
            </address>
        </div>



    <div class="col-sm-6">

            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

            <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'phone') ?>

            <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
            ]) ?>

            <div class="form-group">
                <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>
        <div class="clearfix"> </div>
            <?php ActiveForm::end(); ?>

        </div>



