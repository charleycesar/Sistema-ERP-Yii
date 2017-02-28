<?php

use yii\db\Migration;

/**
 * Handles the creation of table `pessoas_fisicas`.
 */
class m170228_210948_create_pessoas_fisicas_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('pessoas_fisicas', [
            'id'  => $this->primaryKey(),
            'cpf' => 'integer(11) NOT NULL',
            'rg'  => 'string',
            'sexo'=> 'string(1) NOT NULL',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('pessoas_fisicas');
    }
}
