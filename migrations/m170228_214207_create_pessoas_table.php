<?php

use yii\db\Migration;

/**
 * Handles the creation of table `pessoas`.
 */
class m170228_214207_create_pessoas_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('pessoas', [
            'id' => $this->primaryKey(),
            'pessoa_fisica_id' => 'integer',
            'pessoa_juridica_id' => 'integer',
            'tipo_pessoa' => 'string(2) NOT NULL',
            'nome' => 'string NOT NULL',
            'apelido' => 'string',
            'data' => 'timestamp NOT NULL DEFAULT NOW()',
            'email' => 'string',
            'website' => 'string',
            'create_time' => 'timestamp DEFAULT NOW()',
            'update_time' => 'timestamp',
        ]);

        $this->addForeignKey('pessoa_has_pessoa_fisica', 'pessoas', 'pessoa_fisica_id', 'pessoas_fisicas','id','CASCADE','CASCADE');
		$this->addForeignKey('pessoa_has_pessoa_juridica', 'pessoas', 'pessoa_juridica_id', 'pessoas_juridicas','id','CASCADE','CASCADE');

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('pessoas');
    }
}
