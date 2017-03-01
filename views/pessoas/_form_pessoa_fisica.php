<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pessoa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pessoa-fisica-form">

    <?= $form->field($model, 'cpf')->textInput() ?>

    <?= $form->field($model, 'rg')->textInput() ?>

    <?= $form->field($model, 'sexo')->textInput() ?>

</div>
