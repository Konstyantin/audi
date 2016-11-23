<?php

use yii\db\Migration;

class m161122_212344_test_drive extends Migration
{
    public function up()
    {
        $this->createTable('test_drive', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(45)->notNull(),
            'last_name' => $this->string(45)->notNull(),
            'phone' => $this->string(12)->notNull(),
            'email' => $this->string(45)->notNull(),
            'dealer' => $this->integer(11)->notNull(),
            'month' => $this->integer(11)->notNull(),
            'day' => $this->integer(11)->notNull(),
            'time' => $this->integer(11)->notNull(),
            'created_at' => $this->timestamp()->notNull(),
        ]);

    }

    public function down()
    {
        $this->dropTable('test_drive');
    }
}
