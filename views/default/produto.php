<?php

use yii\helpers\Html;
use \yii\widgets\ActiveForm;
use \yii\widgets\Pjax;

/* @var $this yii\web\View */
?>
<h1>Criando form com Form Widget</h1>
<?php Pjax::begin()?>
<?php $form = ActiveForm::begin([
        'options' => ['data' => ['pjax' => true]],
        'enableClientValidation' => false,
        'enableAjaxValidation' => true
])?>

    <?php echo $form->field($model, 'nome')?>

    <?php echo $form->field($model, 'email')?>

    <?php echo $form->field($model, 'url')?>

    <?php echo $form->field($model, 'preco')?>

    <?php echo $form->field($model, 'descricao')->textarea()?>

    <?php echo $form->field($model, 'status')->checkbox()?>

<?php echo Html::button('Enviar', ['type' => 'submit', 'class' => 'btn btn-primary'])?>

<?php ActiveForm::end();?>
<?php Pjax::end()?>
