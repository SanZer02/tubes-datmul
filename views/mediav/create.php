<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mediav */

$this->title = 'Tambah Video';
$this->params['breadcrumbs'][] = ['label' => 'Database Video', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mediav-create">

    <h1><strong><?= Html::encode($this->title) ?></strong></h1>
    <br>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
