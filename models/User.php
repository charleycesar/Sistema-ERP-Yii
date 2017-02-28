<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "administrador".
 *
 * @property integer $id
 * @property integer $nivel
 * @property string $nome
 * @property string $email
 * @property string $usuario
 * @property string $senha
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'administrador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nivel', 'nome', 'email', 'usuario', 'senha'], 'required'],
            [['nivel'], 'integer'],
            [['nome', 'email', 'usuario', 'senha'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nivel' => 'Nivel',
            'nome' => 'Nome',
            'email' => 'Email',
            'usuario' => 'Usuario',
            'senha' => 'Senha',
        ];
    }
}
