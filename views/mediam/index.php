<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MediamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mediams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mediam-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mediam', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'ID',
            'Judul',
            'Deskripsi:ntext',
            'Tanggal_Pembuatan',
            'Tanggal_Edit',
            //'filename',
            //'filepath:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
