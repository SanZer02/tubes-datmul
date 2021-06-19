<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mediam */

$this->title = 'Create Mediam';
$this->params['breadcrumbs'][] = ['label' => 'Mediams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mediam-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
