<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\PessoasFisicas;
use app\models\PessoasJuridicas;

/* @var $this yii\web\View */
/* @var $model app\models\Pessoa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pessoa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
        $tipo_pessoa = '_form_pessoa_juridica';
        $modelInstance = new PessoasJuridicas;
        if( strtoupper($_GET['tipo']) === 'PF' ){
            $tipo_pessoa = '_form_pessoa_fisica';
            $modelInstance = new PessoasFisicas;
        }
        echo $this->render($tipo_pessoa, [ 'model' => $modelInstance, 'form' => $form ]);
    ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apelido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Salvar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
