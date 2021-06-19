<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mediam */

$this->title = 'Update : ' . $model->Judul;
$this->params['breadcrumbs'][] = ['label' => 'Database Audio', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Judul, 'url' => ['view', 'id' => $model->Judul]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mediam-update">

    <h1><strong><?= Html::encode($this->title) ?></strong></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
