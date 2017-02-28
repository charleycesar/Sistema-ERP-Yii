<?php

use yii\db\Migration;

/**
 * Handles the creation of table `pessoas_juridicas`.
 */
class m170228_213445_create_pessoas_juridicas_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('pessoas_juridicas', [
            'id'   => $this->primaryKey(),
            'cnpj' => 'integer(14) NOT NULL',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('pessoas_juridicas');
    }
}
