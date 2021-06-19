<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mediav */

$this->title = 'Update : ' . $model->Judul;
$this->params['breadcrumbs'][] = ['label' => 'Database Video', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Judul, 'url' => ['view', 'id' => $model->Judul]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mediav-update">

    <h1><strong><?= Html::encode($this->title) ?></strong></h1>
    <br>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
