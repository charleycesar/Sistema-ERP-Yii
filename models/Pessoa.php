<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pessoas".
 *
 * @property integer $id
 * @property integer $pessoa_fisica_id
 * @property integer $pessoa_juridica_id
 * @property string $tipo_pessoa
 * @property string $nome
 * @property string $apelido
 * @property string $data
 * @property string $email
 * @property string $website
 * @property string $create_time
 * @property string $update_time
 *
 * @property PessoasFisicas $pessoaFisica
 * @property PessoasJuridicas $pessoaJuridica
 */
class Pessoa extends \yii\db\ActiveRecord
{
    //public $tipo_pessoa = [0 =>'PF',1 => 'PJ'];
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pessoas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pessoa_fisica_id', 'pessoa_juridica_id'], 'integer'],
            [['tipo_pessoa', 'nome'], 'required'],
            [['data', 'create_time', 'update_time'], 'safe'],
            [['tipo_pessoa'], 'string', 'max' => 2],
            [['nome', 'apelido', 'email', 'website'], 'string', 'max' => 255],
            [['pessoa_fisica_id'], 'exist', 'skipOnError' => true, 'targetClass' => PessoasFisicas::className(), 'targetAttribute' => ['pessoa_fisica_id' => 'id']],
            [['pessoa_juridica_id'], 'exist', 'skipOnError' => true, 'targetClass' => PessoasJuridicas::className(), 'targetAttribute' => ['pessoa_juridica_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'apelido' => 'Apelido',
            'data' => 'Data',
            'email' => 'Email',
            'website' => 'Website',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPessoaFisica()
    {
        return $this->hasOne(PessoasFisicas::className(), ['id' => 'pessoa_fisica_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPessoaJuridica()
    {
        return $this->hasOne(PessoasJuridicas::className(), ['id' => 'pessoa_juridica_id']);
    }
}
