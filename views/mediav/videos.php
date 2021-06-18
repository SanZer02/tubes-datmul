<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Galleri Video';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><strong><?= Html::encode($this->title) ?></strong></h1>
    
    <br>
    

    <div class="row">
    <?php
    foreach($medias as $media) {
    ?>
        <div class="col-md-6">
            <div class="card" style="width:552px">
                
                <video controls class="card-img-top" width="100%">
                    <source src="<?php echo Yii::getAlias('@web').'/'.$media->filepath;?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="card-body">
                    <h3 class="card-title" style="word-wrap:break-word"><strong><?php echo $media->Judul; ?></strong></h3>
                </div>
                <br>
                <br>
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
