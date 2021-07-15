<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Requests */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requests-form">

    <?php $form = ActiveForm::begin([
        'id' => 'requests',
    ]); ?>

    <?= $form->errorSummary($model, ['class' => 'alert alert-danger']) ?>

    <?= $form->field($model, 'safety_place_id')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'user_id')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age_old')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'folio')->hiddenInput(['maxlength' => true])->label(false) ?>

    <?= $form->field($model, 'lat')->hiddenInput(['maxlength' => true])->label(false) ?>

    <?= $form->field($model, 'long')->hiddenInput(['maxlength' => true])->label(false) ?>

    <?= $form->field($model, 'details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cancelled')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'active')->hiddenInput()->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Enviar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
