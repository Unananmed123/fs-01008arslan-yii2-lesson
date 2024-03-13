<?php

namespace app\entity;

use app\repository\UserRepository;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
* Users
* @property integer id Индентификатор
* @property string password пароль
* @property string name имя
* @property integer age возраст
* @property string email эмейл
* @property boolean is_admin админ ли?
 */
class Users extends ActiveRecord implements IdentityInterface
{
    public function getCarts()
    {
        return $this->hasMany(Cart::class, ['id' => 'user_id']);
    }
    public static function findIdentity($id)
    {
        return new static(UserRepository::getUserById($id));
    }

    public function getId()
    {
       return $this->id;
    }

    public function findUserByEmail($email)
    {
        return new static(UserRepository::getUserByEmail($email));
    }

    public function validatePassword($password)
    {
        return password_verify($password, $this->password);
    }

    public static function findIdentityByAccessToken($token, $type = null){}
    public function getAuthKey(){}
    public function validateAuthKey($authKey){}
}