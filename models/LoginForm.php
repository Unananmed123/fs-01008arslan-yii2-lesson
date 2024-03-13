<?php

namespace app\models;

use app\entity\Users;
use app\repository\UserRepository;
use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class LoginForm extends Model
{
    public $email;
    public $password;
    public $rememberMe = true;

    private $_user = false;


    public function rules()
    {
        return [
            [['email', 'password'], 'required'],
            ['rememberMe', 'boolean'],
            ['email', 'email'],
            ['password', 'validatePassword'],
        ];
    }

    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }

    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        }
        return false;
    }
    /**
    * @return ActiveRecord|null
     */

    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user =  UserRepository::getUserByEmail($this->email);
        }

        return $this->_user;
    }
}
