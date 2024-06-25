<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
?>
<div class="site-login">
    <div class="row  justify-content-center">
        <div class="mt-5 col-lg-5">

                <div class="card p-4 shadow">
                            <div class="card-body">

                                <div class="text-center">
                                    <h1><?= Html::encode($this->title) ?></h1>

                                    <p>Please fill out the following fields to login:</p>
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
                <div class="row">
                    <div class="col-lg-6">

                    </div>
                </div>

            </div>

    </div>
</div>
