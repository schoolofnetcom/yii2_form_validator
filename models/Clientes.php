<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "clientes".
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property string $salario
 * @property string $cpf
 * @property string $data_nascimento
 * @property string $created_at
 * @property string $updated_at
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'email', 'salario'], 'required'],
            [['salario'], 'number'],
            [['data_nascimento', 'created_at', 'updated_at'], 'safe'],
            [['nome'], 'string', 'max' => 60],
            [['email'], 'string', 'max' => 100],
            [['cpf'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'Cód;'),
            'nome' => Yii::t('app', 'Nome'),
            'email' => Yii::t('app', 'E-mail'),
            'salario' => Yii::t('app', 'Salário'),
            'cpf' => Yii::t('app', 'CPF'),
            'data_nascimento' => Yii::t('app', 'Data de Nasc.'),
            'created_at' => Yii::t('app', 'Criado em'),
            'updated_at' => Yii::t('app', 'Alterado em'),
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className()
            ]
        ];
    }
}
