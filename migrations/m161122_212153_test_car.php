<?php

use yii\db\Migration;

class m161122_212153_test_car extends Migration
{
    public function up()
    {
        $this->createTable('test_car',[
           'id' => $this->primaryKey(),
            'name' => $this->string(45)->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('test_car');
    }

}
