<?php

use \yii\helpers\Html;

/* @var $this yii\web\View */
?>
<h1>Criando form com HTML Helper</h1>

<?php echo Html::beginForm()?>
<?php echo Html::label('Nome', '')?>
<?php echo Html::input('text', 'nome', "Gilson Reis", [
        'class' => 'form-control'
])?>
<?php echo Html::label('Cidades', '')?>
<?php echo Html::dropDownList('cidade', '', [
    "São Paulo" => "São Paulo",
    "Belo Horizonte" => "Belo Horizonte",
    "Curitiba" => "Curitiba",
    "Rio de Janeiro" => "Rio de Janeiro"
], ['prompt' => "Selecione", 'class' => 'form-control']);?>

<hr>
<?php echo Html::button('Enviar', ['type' => 'submit', 'class' => 'btn btn-primary'])?>
<?php echo Html::endForm()?>
