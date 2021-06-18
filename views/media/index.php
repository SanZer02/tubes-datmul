<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MediaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Media';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="media-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Media', ['create'], ['class' => 'btn btn-success']) ?>
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
            [
                'attribute' => 'filepath',
                'label' => 'Gambar',
                'format' => 'raw',
                'value' => function($data) {
                    if (!is_null($data->filepath)) {
                        return Html::img(Yii::$app->homeUrl. '/' .$data->filepath,
                        ['style' => 'width:200px; height:auto;']
                        );
                    }
                    else {
                        return NULL;
                    }
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
