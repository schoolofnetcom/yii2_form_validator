<?php

use yii\db\Migration;

/**
 * Handles the creation of table `clientes`.
 */
class m180404_145224_create_clientes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('clientes', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(60)->notNull(),
            'email' => $this->string(100)->notNull(),
            'salario' => $this->decimal(10,2)->notNull(),
            'cpf' => $this->string(11),
            'data_nascimento' => $this->date(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('clientes');
    }
}
