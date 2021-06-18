<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Gallery';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
    <?php
    foreach($medias as $media) {
    ?>
        <div class="col-md-3">
            <div class="card" style="width:255px">
                <img src="<?php echo Yii::getAlias('@web').'/'.$media->filepath;?>" class="card-img-top" width="100%">
                <div class="card-body">
                    <h4 class="card-title" style="word-wrap:break-word"><strong><?php echo $media->Judul; ?></strong></h4>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    </div>
    



    <!-- <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code> -->
</div>
