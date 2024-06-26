<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use frontend\components\LanguageDropdown;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?> - <?= Yii::t('app', Yii::$app->name ) ?></title>
    <link rel="icon" href="/logos/karsu_moodle-UZ.png   " type="image/x-icon">
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php
        NavBar::begin([
        'brandLabel' => Yii::t('app', Yii::$app->name),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);

    // Left aligned brand
    echo '<div class="navbar-brand d-flex">';
//    echo Html::a(Yii::$app->name, Yii::$app->homeUrl, ['class' => 'navbar-brand']);
    echo '</div>';

    // Center aligned menu items for larger screens
    echo '<div class="navbar-collapse">';
    echo '<div class="navbar-collapse align-items-center justify-content-center">';
    $menuItems = [
        ['label' => Yii::t('app', 'Bosh sahifa'), 'url' => ['/site/index']],
        ['label' => Yii::t('app', 'Biz haqimizda'), 'url' => ['/site/about']],
//        ['label' => Yii::t('app', 'Yangiliklar'), 'url' => ['/admin/news/index']],
        ['label' => Yii::t('app', 'Bog\'lanish'), 'url' => ['/site/contact']],
        ['label' => LanguageDropdown::label(Yii::$app->language), 'items' => LanguageDropdown::widget()]
    ];

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => $menuItems,
    ]);

    echo '</div>';

    // Right aligned auth links
    echo '<ul class="navbar-nav ml-auto">';
    if (Yii::$app->user->isGuest) {
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [
                    ['label' => Yii::t('app', 'Kirish'), 'url' => ['/site/login']],
                    ['label' => Yii::t('app', "Ro'yxatdan o'tish"), 'url' => ['/site/signup']]
//                    ['label' => Yii::t('app', 'Ro\'yxatdan o\'tish'), 'url' => ['/user/register']]
            ],
        ]);
    } else {
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [
                ['label' => Yii::t('app', 'Profil'), 'url' => ['/user/profile']],
                '<li class="nav-item">'
                    . Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        Yii::t('app', 'Chiqish (') . Yii::$app->user->identity->username . ')',
                        ['class' => 'nav-link btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>',
            ],
        ]);
    }
    echo '</ul>';
    echo '</div>';

    NavBar::end();

//    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
//        ],
//    ]);
//    $menuItems = [
//        ['label' => 'Home', 'url' => ['/site/index']],
//        ['label' => 'About', 'url' => ['/site/about']],
//        ['label' => 'Contact', 'url' => ['/site/contact']],
//        ['label' => LanguageDropdown::label(Yii::$app->language), 'items' => LanguageDropdown::widget()]
//
//    ];
//    if (Yii::$app->user->isGuest) {
//        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
//    }
//
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0'],
//        'items' => $menuItems,
//    ]);
//    if (Yii::$app->user->isGuest) {
//        echo Html::tag('div',Html::a('Login',['/site/login'],['class' => ['btn btn-link login text-decoration-none']]),['class' => ['d-flex']]);
//    } else {
//        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
//            . Html::submitButton(
//                'Logout (' . Yii::$app->user->identity->username . ')',
//                ['class' => 'btn btn-link logout text-decoration-none']
//            )
//            . Html::endForm();
//    }
//    NavBar::end();

    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-start">&copy; <?= Yii::t('app', Yii::$app->name) ?> - <?= date('Y') ?></p>
        <p class="float-end"><?= Yii::t('app', "Qoraqalpoq davlat universiteti") ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
