<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
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
class User extends ActiveRecord implements IdentityInterface
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

    public static function findIdentity($id){
		return static::findOne($id);
	}

	public static function findIdentityByAccessToken($token, $type = null){
		throw new NotSupportedException();//I don't implement this method because I don't have any access token column in my database
	}

	public function getId(){
		return $this->id;
	}
	public static function findByUsername($username){
		return self::findOne(['usuario'=>$username]);
	}

	public function validatePassword($password){
		return $this->senha === $password;
	}

    public function getAuthKey()
    {
    	//throw new NotSupportedException();//You should not implement this method if you don't have authKey column in your database
    }

    public function validateAuthKey($authKey)
    {
        //throw new NotSupportedException();//You should not implement this method if you don't have authKey column in your database
    }

}
