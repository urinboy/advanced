<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = Yii::t('app', 'Kirish');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">


    <div class="row justify-content-center">

        <div class="mt-4 col-lg-5">

            <div class="card shadow p-4 mt-4">
                <div class="card-body">
                    <div class="text-center">
                        <p><img style="width:100px" src="<?= Yii::t('app', "/logos/karsu_moodle-UZ.png") ?>" alt="<?= Yii::t('app', "Masodfaviy Ta'lim") ?>"></p>
<!--                        <h1>--><?php //= Html::encode($this->title) ?><!--</h1>-->
                              <p class="lead"><?= Yii::t('app', 'Platformamizga hush kelibsiz!') ?></p>

                    </div>
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'password')->passwordInput() ?>

                        <?= $form->field($model, 'rememberMe')->checkbox() ?>

<!--                        <div class="my-1 mx-0" style="color:#999;">-->
<!--                            If you forgot your password you can --><?php //= Html::a('reset it', ['site/request-password-reset']) ?><!--.-->
<!--                            <br>-->
<!--                            Need new verification email? --><?php //= Html::a('Resend', ['site/resend-verification-email']) ?>
<!--                        </div>-->

                        <div class="form-group">
                            <?= Html::submitButton(Yii::t('app', 'Kirish'), ['class' => 'btn btn-primary w-100', 'name' => 'login-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
