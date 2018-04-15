<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\GoodSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="goods-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'good_id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'short_descr') ?>

    <?= $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'slug') ?>

    <?php // echo $form->field($model, 'html_kw') ?>

    <?php // echo $form->field($model, 'html_descr') ?>

    <?php // echo $form->field($model, 'full_descr') ?>

    <?php // echo $form->field($model, 'img') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
