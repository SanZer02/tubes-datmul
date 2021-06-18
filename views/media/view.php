<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Media */

$this->title = $model->Judul;
$this->params['breadcrumbs'][] = ['label' => 'Media', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="media-view">

    <h1><strong><?= Html::encode($this->title) ?></strong></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'Judul',
            'Deskripsi:ntext',
            'Tanggal_Pembuatan',
            'Tanggal_Edit',
            'filename:ntext',
            'filepath:ntext',
            [
                'attribute' => 'filepath',
                'label' => 'Gambar',
                'format' => 'raw',
                'value' => function($data) {
                    if (!is_null($data->filepath)) {
                        return Html::img(Yii::$app->homeUrl. '/' .$data->filepath,
                        ['style' => 'width:975px; height:auto;']
                        );
                    }
                    else {
                        return NULL;
                    }
                }
            ],
        ],
    ]) ?>

</div>
