<?php

use yii\db\Migration;

class m161122_204736_inspection extends Migration
{
    public function up()
    {
        $this->createTable('inspection',[
            'id' => $this->primaryKey(),
            'first_name' => $this->string(45)->notNull(),
            'last_name' => $this->string(45)->notNull(),
            'phone' => $this->string(12)->notNull(),
            'email' => $this->string(45)->notNull(),
            'dealer' => $this->integer(11)->notNull(),
            'car' => $this->string(10)->notNull(),
            'mileage' => $this->integer(11)->notNull(),
            'license_plate' => $this->integer(11)->notNull(),
            'date' => $this->timestamp()->notNull(),
        ]);

    }

    public function down()
    {
        $this->dropTable('inspection');
    }
}
