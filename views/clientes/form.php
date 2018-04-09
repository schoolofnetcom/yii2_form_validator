<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Clientes */
/* @var $form ActiveForm */
?>
<div class="clientes-form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'nome') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'salario') ?>
        <?= $form->field($model, 'data_nascimento') ?>
        <?= $form->field($model, 'cpf') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- clientes-form -->
