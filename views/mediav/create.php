<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mediav */

$this->title = 'Create Mediav';
$this->params['breadcrumbs'][] = ['label' => 'Mediavs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mediav-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
