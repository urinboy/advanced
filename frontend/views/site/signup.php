<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = Yii::t('app', "Ro'yxatdan o'tish");
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">


    <div class="row justify-content-center">
        <div class="mt-4 col-lg-5">
            <div class="card shadow p-4 mt-4">
                <div class="card-body">
                        <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
                    
                        <p class="text-center"></p>

                    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'email') ?>

                        <?= $form->field($model, 'password')->passwordInput() ?>

                        <div class="form-group">
                            <?= Html::submitButton(Yii::t('app', "Ro'yxatdan o'tish"), ['class' => 'btn btn-primary w-100', 'name' => 'signup-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
