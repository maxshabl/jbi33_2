<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Goods */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="goods-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?//= $form->field($model, 'good_id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_descr')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'html_kw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'html_descr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'full_descr')->textarea(['rows' => 6]) ?>

    <?//= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imgFile')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
