<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Galeri Musik';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><strong><?= Html::encode($this->title) ?></strong></h1>
    <br>

    <div class="row">
        
            <table style="width:100%" class="table table-hover">
                <tr>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Audio</th>
                </tr>
                <?php
                foreach ($medias as $media) {
                ?>
                <tr class="active">
                    <td><strong><?php echo Yii::getAlias(''). $media->Judul; ?></strong></td>
                    <td><?php echo Yii::getAlias(''). $media->Deskripsi; ?></td>
                    <td>
                        <audio src="<?php echo Yii::getAlias('@web/').$media->filepath;?>" controls>
                        </audio>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        

    </div>




    <!-- <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code> -->
</div>