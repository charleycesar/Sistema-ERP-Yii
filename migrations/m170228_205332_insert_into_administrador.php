<?php

use yii\db\Migration;

class m170228_205332_insert_into_administrador extends Migration
{
    public function up()
    {
		$this->insert('administrador',[
			'nivel'=>1,
			'nome'=>'Charley',
			'email'=>'charleycesar@gmail.com',
			'usuario'=>'admin',
			'senha'=>'admin'
		]);
    }

    public function down()
    {
        $this->delete('administrador',['usuario'=>'admin']);
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
