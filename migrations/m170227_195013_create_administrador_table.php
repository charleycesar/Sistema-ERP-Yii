<?php

use yii\db\Migration;

/**
 * Handles the creation of table `administrador`.
 */
class m170227_195013_create_administrador_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('administrador', [
            'id' => $this->primaryKey(),
            'nivel' => 'integer NOT NULL',
            'nome' => 'string NOT NULL',
            'email' => 'string NOT NULL',
            'usuario' => 'string NOT NULL',
            'senha' => 'string NOT NULL',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('administrador');
    }
}
