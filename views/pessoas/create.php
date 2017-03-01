<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pessoa */

$this->title = 'Adicionar Pessoas';
$this->params['breadcrumbs'][] = ['label' => 'Pessoas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pessoa-create">

    <div class="x_title">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="clearfix"></div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
