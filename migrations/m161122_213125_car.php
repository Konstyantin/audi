<?php

use yii\db\Migration;

class m161122_213125_car extends Migration
{
    public function up()
    {
        $this->createTable('car',[
            'id' => $this->primaryKey(),
            'name' => $this->string(45)->notNull(),
            'engine_id' => $this->integer(11)->notNull(),
            'transmission_id' => $this->integer(11)->notNull(),
            'price' => $this->integer(11)->notNull(),
            'model_id' => $this->integer(11)->notNull(),
            'body_id' => $this->integer(11)->notNull(),
            'performance_id' => $this->integer(11)->notNull(),
            'fuel_id' => $this->integer(11)->notNull(),
        ]);

        $this->addForeignKey('engine_id','car','engine_id','engine','id','CASCADE','CASCADE');
        $this->addForeignKey('transmission_id','car','transmission_id','transmission','id','CASCADE','CASCADE');
        $this->addForeignKey('body_id','car','body_id','body','id','CASCADE','CASCADE');
        $this->addForeignKey('fuel_id','car','fuel_id','fuel','id','CASCADE','CASCADE');
        $this->addForeignKey('model_id','car','model_id','models','id','CASCADE','CASCADE');

        $this->batchInsert('car',['id','name','engine_id','transmission_id','price','model_id','body_id','performance_id','fuel_id'],[
            [1,'A5',5,6,2000,4,1,1,2],
            [2,'A6_Allroad',4,5,35000,5,2,2,3],
            [3,'A8',10,13,80000,7,3,3,4],
            [4,'A1_Sportback',1,1,2000,1,4,4,8],
            [5,'A3',2,2,22000,2,5,6,10],
            [6,'A3_Saloo',5,7,25000,2,6,7,11],
            [7,'A4',2,2,20000,3,7,8,13],
            [8,'A4_Allroad',2,2,10000,3,8,9,14],
            [9,'A4_Avant',5,7,25000,3,9,10,15],
            [10,'A6',4,4,30000,5,10,11,16],
            [11,'A6_Avant',8,11,30000,5,11,12,17],
            [12,'A7',6,9,40000,6,12,13,18],
            [13,'Q3',2,2,30000,8,13,14,20],
            [14,'Q5',6,9,40000,9,14,15,21],
            [15,'Q7',9,11,50000,10,15,16,22],
            [16,'RS6',10,13,60000,5,16,17,23],
            [17,'RS7',10,13,50000,6,17,18,24],
            [18,'A8L',11,14,80000,7,18,24,30],
            [19,'S8',10,13,80000,7,19,25,31],
            [20,'TT',4,4,50000,11,20,26,32],
            [21,'R8',11,14,200000,12,198,28,34],
            [22,'A1',1,1,16000,1,206,36,36],
        ]);
    }

    public function down()
    {
        $this->dropTable('car');
    }
}
