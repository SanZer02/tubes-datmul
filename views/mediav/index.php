<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MediavSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Database Video';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mediav-index">

    <h1><strong><?= Html::encode($this->title) ?></strong></h1>

    <p>
        <?= Html::a('Tambah Video', ['create'], ['class' => 'btn btn-success']) ?>
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
            'filename:ntext',
            // 'filepath:image',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
