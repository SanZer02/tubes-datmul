<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mediam */

$this->title = 'Tambah Audio';
$this->params['breadcrumbs'][] = ['label' => 'Database Audio', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mediam-create">

    <h1><strong><?= Html::encode($this->title) ?></strong></h1>
    <br>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
