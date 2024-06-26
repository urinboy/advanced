<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\captcha\Captcha;

$this->title = Yii::t('app', 'Bog\'lanish');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

    <div class="row justify-content-center">
        <div class="col-lg-12 m-3">
            <h1 class="d-flex justify-content-center"> <?= Html::encode($this->title) ?></h1>
            <p class="d-flex justify-content-center"> <?= Yii::t('app',"Agar savollaringiz bo'lsa, biz bilan bog'lanish uchun quyidagi shaklni to'ldiring. Rahmat.") ?> </p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow p-3">
                <div class="card-body">
                    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                        <div class="alert alert-success text-center">
                            <?= Yii::t('app', "Biz bilan bog'langaningiz uchun tashakkur. Sizga imkon qadar tezroq javob beramiz.")?>
                        </div>

                        <p>
                            Note that if you turn on the Yii debugger, you should be able
                            to view the mail message on the mail panel of the debugger.
                            <?php if (Yii::$app->mailer->useFileTransport): ?>
                                Because the application is in development mode, the email is not sent but saved as
                                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                                application component to be false to enable email sending.
                            <?php endif; ?>
                        </p>

                    <?php else: ?>

                        <p></p>

                        <div class="row">
                            <div class="col-lg-12">

                                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                                <div class="row">
                                    <div class="col-lg-6"><?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?></div>
                                    <div class="col-lg-6"><?= $form->field($model, 'email') ?></div>
                                </div>

                                    <?= $form->field($model, 'subject') ?>

                                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                                    <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-9">{input}</div></div>',
                                    ]) ?>

                                    <div class="form-group">
                                        <?= Html::submitButton(Yii::t('app', 'Yuborish'), ['class' => 'btn btn-primary  w-100', 'name' => 'contact-button',]) ?>
                                    </div>

                                <?php ActiveForm::end(); ?>

                            </div>
                        </div>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<!--    <h1>--><?php //= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!--    <p>-->
<!--        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.-->
<!--    </p>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="col-lg-5">-->
<!--            --><?php //$form = ActiveForm::begin(['id' => 'contact-form']); ?>
<!---->
<!--                --><?php //= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
<!---->
<!--                --><?php //= $form->field($model, 'email') ?>
<!---->
<!--                --><?php //= $form->field($model, 'subject') ?>
<!---->
<!--                --><?php //= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
<!---->
<!--                --><?php //= $form->field($model, 'verifyCode')->widget(Captcha::class, [
//                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
//                ]) ?>
<!---->
<!--                <div class="form-group">-->
<!--                    --><?php //= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
<!--                </div>-->
<!---->
<!--            --><?php //ActiveForm::end(); ?>
<!--        </div>-->
<!--    </div>-->

</div>
