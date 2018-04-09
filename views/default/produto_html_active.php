<?php

use \yii\helpers\Html;

/* @var $this yii\web\View */
?>
<h1>Criando form com Model Form</h1>
<?php echo Html::errorSummary($model)?>
<?php echo Html::beginForm()?>
<?php echo Html::activeLabel($model, 'nome');?>
<?php echo Html::activeInput('text', $model, 'nome', ['class' => 'form-control']);?>

<?php echo Html::activeLabel($model, 'email');?>
<?php echo Html::activeInput('text', $model, 'email', ['class' => 'form-control']);?>

<?php echo Html::activeLabel($model, 'url');?>
<?php echo Html::activeInput('text', $model, 'url', ['class' => 'form-control']);?>

<?php echo Html::activeLabel($model, 'preco');?>
<?php echo Html::activeInput('text', $model, 'preco', ['class' => 'form-control']);?>

<?php echo Html::activeLabel($model, 'descricao');?>
<?php echo Html::activeTextarea($model, 'descricao', ['class' => 'form-control', 'rows' => 10])?>

<?php echo Html::activeCheckbox($model, 'status')?>

<hr>

<?php echo Html::button('Enviar', ['type' => 'submit', 'class' => 'btn btn-primary'])?>

<?php echo Html::endForm()?>
