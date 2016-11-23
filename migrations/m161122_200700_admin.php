<?php

use yii\db\Migration;

class m161122_200700_admin extends Migration
{
    public function up()
    {
        $this->createTable('admin',[
            'id' => $this->primaryKey(),
            'login' => $this->string(45)->notNull(),
            'email' => $this->string(45)->notNull(),
            'password' => $this->string(45)->notNull(),
        ]);

        $this->batchInsert('admin',['login','email','password'],
            [
                ['admin','admin@mail.ua','admin']
            ]
        );
    }

    public function down()
    {
        $this->dropTable('admin');
    }
}
