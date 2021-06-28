<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
    <style>
        .brandname {
            font-family: 'Mate SC', serif;
        }

        .gambarcover{
            text-align: center;
            color: #f8f8f8;
            content:url(http://cdn.onlinewebfonts.com/svg/img_67804.png);
            width: 500px; 
        }
    
            
    
        .gambarvidio{
            text-align: center;
            color: #f8f8f8;
            content:url(http://icons.iconarchive.com/icons/designbolts/free-multimedia/1024/Video-Camera-icon.png);
            width: 500px;
        }
        .gambaraudio{
            text-align: center;
            color: #f8f8f8;
            content:url(https://static.vecteezy.com/system/resources/previews/000/654/477/original/speaker-icon-image-vector.jpg);
            width: 500px;
        }
    </style>
    <?php $this->registerCsrfMetaTags() ?>
    <title>DATMUL Gallery</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <strong class="brandname">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    ?>
    </strong>
    <?php
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Images', 'url' => ['/media/images']],
            ['label' => 'Video', 'url' => ['/mediav/videos']],
            ['label' => 'Audio', 'url' => ['/mediam/musics']],
            [
                'label' => 'CRUD',
                'items' => [
                    ['label' => 'Image Database', 'url' => ['/media/index']],
                    ['label' => 'Video Database', 'url' => ['/mediav/index']],
                    ['label' => 'Audio Database', 'url' => ['/mediam/index']]
                ] 
                // 'url' => ['/media/index']
            ],



            // Yii::$app->user->isGuest ? (
            //     ['label' => 'Login', 'url' => ['/site/login']]
            // ) : (
            //     '<li>'
            //     . Html::beginForm(['/site/logout'], 'post')
            //     . Html::submitButton(
            //         'Logout (' . Yii::$app->user->identity->username . ')',
            //         ['class' => 'btn btn-link logout']
            //     )
            //     . Html::endForm()
            //     . '</li>'
            // )
        ],
    ]);
    NavBar::end();
    ?>
    

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Kelompok Mahathir <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
