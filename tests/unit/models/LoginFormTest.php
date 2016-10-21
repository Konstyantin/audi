<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 15.10.16
 * Time: 16:47
 */

namespace tests\models;
use Yii;
use Codeception\Test\Unit;
use app\models\LoginForm;

class LoginFormTest extends Unit
{
    private $model;

    protected function _after()
    {
        Yii::$app->user->logout();
    }

    public function testLoginNoAdmin()
    {
        $this->model = new LoginForm([
            'login' => 'not exists login',
            'password' => 'not exists password',
        ]);

        expect_not($this->model->login());
        expect_that(Yii::$app->user->isGuest);
    }
    
    public function testLoginWrongPassword()
    {
        $this->model = new LoginForm([
            'login' => 'admin',
            'password' => '123456789',
        ]);

        expect_not($this->model->login());
        expect_that(Yii::$app->user->isGuest);
        expect(Yii::$app->session)->hasKey('error');
    }

    public function testLoginCorrect()
    {
        $this->model = new LoginForm([
            'login' => 'admin',
            'password' => 'admin',
        ]);

        expect_that($this->model->login());
        expect_not(Yii::$app->user->isGuest);
        expect(Yii::$app->session)->hasntKey('error');
    }
}
