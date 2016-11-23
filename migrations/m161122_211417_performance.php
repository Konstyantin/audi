<?php

use yii\db\Migration;

class m161122_211417_performance extends Migration
{
    public function up()
    {
        $this->createTable('performance',[
            'id' => $this->primaryKey(),
            'speed' => $this->integer(11)->notNull(),
            'acceleration' => $this->integer(11)->notNull(),
        ]);

        $this->batchInsert('performance',['id','speed','acceleration'],[
            [1,240,6.3],
            [2,226,8.2],
            [3,250,3.9],
            [4,186,11.1],
            [5,200,20],
            [6,220,8.2],
            [7,230,8],
            [8,210,8.7],
            [9,210,10.1],
            [10,220,8.9],
            [11,233,7.9],
            [12,250,5.8],
            [13,238,7.5],
            [14,204,8.9],
            [15,210,8.5],
            [16,216,7.1],
            [17,250,3.9],
            [18,250,3.9],
            [19,250,5.3],
            [20,200,20],
            [21,200,12],
            [22,200,20],
            [23,200,12],
            [24,250,4.6],
            [25,250,4.1],
            [26,241,6.9],
            [27,200,20],
            [28,320,3.5],
            [32,200,12],
            [36,220,12],
        ]);
    }

    public function down()
    {
        $this->dropTable('performance');
    }
}
