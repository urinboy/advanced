<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = Yii::t('app', 'Kirish');
?>
<div class="site-login">
    <div class="row  justify-content-center">
        <div class="mt-5 col-lg-5">

                <div class="card p-4 shadow">
                            <div class="card-body">

                                <div class="text-center">
                                    <p><img style="width:100px" src="<?= Yii::t('app', "/logos/karsu_moodle-UZ.png") ?>" alt="<?= Yii::t('app', "Masodfaviy Ta'lim") ?>"></p>

<!--                                    <h1>--><?php //= Html::encode($this->title) ?><!--</h1>-->

                                    <p class="lead"><?= Yii::t('app', 'Platformamizga hush kelibsiz!') ?></p>
                                </div>

                                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                                    <?= $form->field($model, 'password')->passwordInput() ?>

                                    <?= $form->field($model, 'rememberMe')->checkbox() ?>

                                    <div class="form-group">
                                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block w-100', 'name' => 'login-button']) ?>
                                    </div>

                                <?php ActiveForm::end(); ?>
                            </div>
                        </div>
            </div>

    </div>
</div>
