<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Danhmuc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="danhmuc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ten_danh_muc')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
