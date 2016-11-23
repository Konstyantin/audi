<?php

use yii\db\Migration;

class m161122_212556_transmission extends Migration
{
    public function up()
    {
        $this->createTable('transmission',[
            'id' => $this->primaryKey(),
            'name' => $this->string(45)->notNull(),
            'level' => $this->integer(11)->notNull(),
            'description' => $this->text()->notNull(),
        ]);

        $this->batchInsert('transmission',['id','name','level','description'],[
            [1,'1.0 TFSI S Tronic',7,'Transmission, S tronic dual-clutch transmission – tailor-made drivetrain technology is available for every engine version.'],
            [2,'1.4 TFSI S Tronic',7,'Transmission, S tronic dual-clutch transmission – tailor-made drivetrain technology is available for every engine version.'],
            [4,'1.8 TFSI S Tronic',7,'Transmission, S tronic dual-clutch transmission – tailor-made drivetrain technology is available for every engine version.'],
            [5,'1.8 TFSI TipTronic',7,'The comfortable tiptronic torque-converter transmission, and the versatile, continuously variable multitronic – at least two customized solutions are available for each model range. The common denominators among all of these transmissions are compact and light construction, high efficiency, precise functioning in extremely durable quality, and convenient and simple operation.'],
            [6,'2.0 TDI MultiTronic',6,'Multitronic – at least two customized solutions are available for each model range. The common denominators among all of these transmissions are compact and light construction, high efficiency, precise functioning in extremely durable quality, and convenient and simple operation.'],
            [7,'2.0 TDI S Tronic',7,'Transmission, S tronic dual-clutch transmission – tailor-made drivetrain technology is available for every engine version.'],
            [8,'2.0 TDI TipTronic',6,'The comfortable tiptronic torque-converter transmission, and the versatile, continuously variable multitronic – at least two customized solutions are available for each model range. The common denominators among all of these transmissions are compact and light construction, high efficiency, precise functioning in extremely durable quality, and convenient and simple operation.'],
            [9,'2.0 TFSI S Tronic',6,'Transmission, S tronic dual-clutch transmission – tailor-made drivetrain technology is available for every engine version.'],
            [10,'2.5 TFSI S Tronic',7,'Transmission, S tronic dual-clutch transmission – tailor-made drivetrain technology is available for every engine version.'],
            [11,'3.0 TDI TipTronic',7,'The comfortable tiptronic torque-converter transmission, and the versatile, continuously variable multitronic – at least two customized solutions are available for each model range. The common denominators among all of these transmissions are compact and light construction, high efficiency, precise functioning in extremely durable quality, and convenient and simple operation.'],
            [12,'3.0 TFSI S Tronic',5,'Transmission, S tronic dual-clutch transmission – tailor-made drivetrain technology is available for every engine version.'],
            [13,'4.0 TFSI S Tronic',7,'Transmission, S tronic dual-clutch transmission – tailor-made drivetrain technology is available for every engine version.'],
            [14,'4.2 TDI TipTronic',7,'The comfortable tiptronic torque-converter transmission, and the versatile, continuously variable multitronic – at least two customized solutions are available for each model range. The common denominators among all of these transmissions are compact and light construction, high efficiency, precise functioning in extremely durable quality, and convenient and simple operation.'],
        ]);
    }

    public function down()
    {
        $this->dropTable('transmission');
    }

}
