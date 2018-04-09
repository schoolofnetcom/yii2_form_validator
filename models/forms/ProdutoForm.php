<?php
// https://www.yiiframework.com/doc/guide/2.0/pt-br/tutorial-core-validators

namespace app\models\forms;

class ProdutoForm extends \yii\base\Model
{

    const PRODUTO_STATUS_ATIVO = true;
    const PRODUTO_STATUS_INATIVO = false;

    public $nome;
    public $email;
    public $url;
    public $descricao;
    public $preco;
    public $status;

    public function rules()
    {
        return [
            [['nome', 'preco', 'email'], 'required'],
            [['email'], 'email'],
            [['preco'], 'double'],
            [['url'], 'url']
        ];
    }

}