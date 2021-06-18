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
                
                <video controls class="card-img-top" width="100%">
                    <source src="<?php echo Yii::getAlias('@web').'/'.$media->filepath;?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
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
