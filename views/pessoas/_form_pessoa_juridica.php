<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pessoa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pessoa-juirdica-form">

    <?= $form->field($model, 'cnpj')->textInput(['maxlength' => true]) ?>

</div>
