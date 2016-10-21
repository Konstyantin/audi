<?php

namespace app\models\admin;

use Yii;
use yii\base\Model; 

/**
 * LoginForm is the model which set rules for build LoginForm and validation from input data
 */
class LoginForm extends Model
{
    /** @var string| $login contains login for the LoginForm with a max .length 45 characters*/
    public $login;
    /** @var string| $password contains password for the LoginForm with a max .length 45 characters*/
    public $password;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // login and password are both required
            [['login', 'password'], 'required'],
            //login and password should contain at least 5 and at most 45 characters
            [['login','password'],'string','min'=>5,'max'=>'45'],
        ];
    }

    /**
     * Check exists admin and input password equal is equal admin password
     *
     * @return bool
     */
    public function validateForm()
    {
        $admin = $this->getAdmin();

        if (!$this->getAdmin() || !$admin->validatePassword($this->password)) {
            return false;
        }
        return true;
    }

    /**
     * Logs in a admin using the provided login and password.
     * @return boolean whether the user is logged in successfully 
     */
    public function login()
    {
        if ($this->validateForm()) {

            return Yii::$app->user->login($this->getAdmin());
        }
        return Yii::$app->session->setFlash('error','Login or Password Invalid');
    }

    /**
     * Finds admin by [[login]]
     *
     * @return Admin|null
     */
    public function getAdmin()
    {
        return Admin::findByLogin($this->login);
    }
}
