<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div class="site-signup">
	<div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>


            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>