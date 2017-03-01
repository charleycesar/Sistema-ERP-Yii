<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pessoas_juridicas".
 *
 * @property integer $id
 * @property integer $cnpj
 */
class PessoasJuridicas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pessoas_juridicas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cnpj'], 'required'],
            [['cnpj'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cnpj' => 'Cnpj',
        ];
    }
}
