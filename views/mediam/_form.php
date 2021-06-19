<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mediam */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mediam-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Deskripsi')->textarea(['rows' => 6]) ?>

    <!-- <?= $form->field($model, 'filename')->textInput(['maxlength' => true]) ?> -->
    <?= $form->field($model, 'filename')->fileInput() ?>

    <!-- <?= $form->field($model, 'filepath')->textarea(['rows' => 6]) ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
