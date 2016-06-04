<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Fileimg */

$this->title = 'Create Fileimg';
$this->params['breadcrumbs'][] = ['label' => 'Fileimgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fileimg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
