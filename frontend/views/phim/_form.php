<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Phim */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phim-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'ten_phim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ten_tieng_anh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nam_phat_hanh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'thoi_luong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ma_dao_dien')->textInput() ?>

    <?= $form->field($model, 'ma_quoc_gia')->textInput() ?>

    <?= $form->field($model, 'ma_danh_muc')->textInput() ?>

    <?= $form->field($model, 'mo_ta')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'poster')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <?= $form->field($model, 'luot_view')->textInput() ?>

    <?= $form->field($model, 'anh_dai_dien')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <?= $form->field($model, 'ngay_upload')->textInput() ?>

    <?= $form->field($model, 'tinh_trang')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'IMDB')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'phim_tag')->textInput() ?>

    <?= $form->field($model, 'url_trailer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_phim')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
