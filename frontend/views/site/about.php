<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = Yii::t('app', 'Biz haqimizda');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
        <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <p><img style="width:300px" src="<?= Yii::t('app', "/logos/karsu_moodle-UZ.png") ?>" alt="<?= Yii::t('app', "Masodfaviy Ta'lim") ?>"></p>
        <h1 class="display-4"><?= Yii::t('app', "Masofaviy Ta'lim") ?></h1>
    </div>
</div>
