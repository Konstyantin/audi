<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 15.10.16
 * Time: 14:15
 */

namespace tests\models;

use app\models\Admin;
use Codeception\Test\Unit;

class AdminTest extends Unit
{
    public function testFindAdminByLogin()
    {
        expect_that($admin = Admin::findByLogin('admin'));
        expect($admin->login)->equals('admin');

        expect_not(Admin::findByLogin('guest'));
    }

    public function testAdminValidPassword()
    {
        $admin = Admin::findByLogin('admin');

        expect_that($admin->validatePassword('admin'));
        expect_not($admin->validatePassword('password'));
    }
}
