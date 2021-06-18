<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mediav */

$this->title = 'Update Mediav: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Mediavs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mediav-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
