<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pessoas_fisicas".
 *
 * @property integer $id
 * @property integer $cpf
 * @property string $rg
 * @property string $sexo
 */
class PessoasFisicas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pessoas_fisicas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cpf', 'sexo'], 'required'],
            [['cpf'], 'integer'],
            [['rg'], 'string', 'max' => 255],
            [['sexo'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cpf' => 'Cpf',
            'rg' => 'Rg',
            'sexo' => 'Sexo',
        ];
    }
}
