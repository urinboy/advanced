<?php

/** @var yii\web\View $this */

$this->title = Yii::t('app', 'Bosh sahifa');
?>
<div class="site-index">
    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <p><img style="width:300px" src="<?= Yii::t('app', "/logos/karsu_moodle-UZ.png") ?>" alt="<?= Yii::t('app', "Masodfaviy Ta'lim") ?>"></p>
        <h1 class="display-4"><?= Yii::t('app', "Masofaviy Ta'lim") ?></h1>

        <p class="lead"><?= Yii::t('app', 'Platformamizga hush kelibsiz!') ?></p>

        <p><a class="btn btn-lg btn-success" href="/site/about"><?= Yii::t('app', 'Biz haqimizda') ?></a></p>
    </div>
</div>
