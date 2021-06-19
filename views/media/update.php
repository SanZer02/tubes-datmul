<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Media */

$this->title = 'Update : ' . $model->Judul;
$this->params['breadcrumbs'][] = ['label' => 'Database Gambar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Judul, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="media-update">

    <h1><strong><?= Html::encode($this->title) ?></strong></h1>
    <br>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
