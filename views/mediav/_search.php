<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MediavSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mediav-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'Judul') ?>

    <?= $form->field($model, 'Deskripsi') ?>

    <?= $form->field($model, 'Tanggal_Pembuatan') ?>

    <?= $form->field($model, 'Tanggal_Edit') ?>

    <?php // echo $form->field($model, 'filename') ?>

    <?php // echo $form->field($model, 'filepath') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
