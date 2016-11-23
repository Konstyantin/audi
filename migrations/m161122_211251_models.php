<?php

use yii\db\Migration;

class m161122_211251_models extends Migration
{
    public function up()
    {
        $this->createTable('models',[
            'id' => $this->primaryKey(),
            'name' => $this->string(45)->notNull(),
        ]);

        $this->batchInsert('models',['id','name'],[
            [1,'A1'],
            [2,'A3'],
            [3,'A4'],
            [4,'A5'],
            [5,'A6'],
            [6,'A7'],
            [7,'A8'],
            [8,'Q3'],
            [9,'Q5'],
            [10,'Q7'],
            [11,'TT'],
            [12,'R8'],
        ]);
    }

    public function down()
    {
        $this->dropTable('models');
    }
}
