<?php

use yii\db\Migration;

class m161122_203436_engine extends Migration
{
    public function up()
    {
        $this->createTable('engine',[
            'id' => $this->primaryKey(),
            'name' => $this->text()->notNull(),
            'num_cylinders' => $this->integer(11)->notNull(),
            'displacment' => $this->integer(11)->notNull(),
            'power' => $this->integer(11)->notNull(),
            'rmp' => $this->integer(11)->notNull(),
            'torque' => $this->integer(11)->notNull(),
            'compression' => $this->integer(11)->notNull(),
            'description' => $this->text()->notNull(),
        ]);

        $this->batchInsert('engine',['name','num_cylinders','displacment','power','rmp','torque','compression','description'],[
            ['1.0 TFSI',3,999,100,3,3500,16,'The 1.0 TFSI, the first ever three-cylinder gasoline engine in the history of the Audi brand, has a combined fuel consumption of just 4.2 liters per 100 kilometers (56.0 US mpg), which equates to 97 grams CO2 per kilometer (156.1 g/mi). The three-cylinder diesel, the 1.4 TDI with 66 kW (90 hp), attains an NEDC fuel consumption figure of 3.6 liters of fuel per 100 kilometers (65.3 US mpg) and emits 94 grams CO2 per kilometer (151.3 g/mi). And the 1.4 TFSI COD features as a highlight the cylinder on demand system (COD), which enables temporary cylinder shut-off when the engine is operating at partial load.'],
            ['1.4 TFSI',4,1395,140,3500,250,16,'Powertrain\r\nSeven engines are available for selection – five TFSIs and two TDIs. The 1.0 TFSI, the first ever three-cylinder gasoline engine in the history of the Audi brand, has a combined fuel consumption of just 4.2 liters per 100 kilometers (56.0 US mpg), which equates to 97 grams CO2 per kilometer (156.1 g/mi). The three-cylinder diesel, the 1.4 TDI with 66 kW (90 hp), attains an NEDC fuel consumption figure of 3.6 liters of fuel per 100 kilometers (65.3 US mpg) and emits 94 grams CO2 per kilometer (151.3 g/mi). And the 1.4 TFSI COD features as a highlight the cylinder on demand system (COD), which enables temporary cylinder shut-off when the engine is operating at partial load.'],
            ['1.6 TDI',4,1395,140,6000,250,16,'\r\nAudi customers will be informed in the coming weeks and months about how their cars will be retrofitted. The cars affected are Audi models with 1.6?liter or 2.0?liter TDI diesel engines of the type EA 189 and certified according to the European emission standard EU5. These cars continue to be roadworthy and technically safe without any restrictions.\r\n\r\nThe 1.6-liter and 2.0?liter TDI engines certified according to the new EU6 emission standard are not affected. The same applies to V6 and V8 TDI engines, irrespective of whether they are certified according to EU5 or EU6. \r\n'],
            ['1.8 TFSI',4,1798,180,320,320,16,'TDI engines ranging in output from 140 kW (190 hp) comprise the engine . The 1.8 TDI ultra S tronic with 140 kW (190 hp) are the most efficient variants, with combined fuel consumption figures of 4.5 – 4.2 liters per 100 kilometers (52.3 – 56.0 US mpg) and emissions of 119 – 109 grams CO2 per kilometer (191.5 – 175.4 g/mi).'],
            ['2.0 TDI',4,1489,150,6000,250,16,'The 2.0 TDI ultra S tronic with 110 kW (150 hp) and 140 kW (190 hp) are the most efficient variants, with combined fuel consumption figures of 4.5 – 4.2 liters per 100 kilometers (52.3 – 56.0 US mpg) and emissions of 119 – 109 grams CO2 per kilometer (191.5 – 175.4 g/mi).'],
            ['2.0 TFSI',4,1984,190,4200,320,16,'The 2.0 TFSI ultra with 140 kW (190 hp) utilizes a new combustion method. It makes the car especially efficient and allows a CO2 level of 109 grams per kilometer (175.4 g/mi) and a fuel consumption level of 4.8 liters per 100 kilometers (49.0 US mpg).'],
            ['2.5 TFSI',123,123,123,123,123,123,'The new 2.5 TFSI outputs 294 kW (400 hp) – 33 hp more than its predecessor. That makes it the most powerful five-cylinder engine on the world market. Its 480 Nm (354.0 lb-ft) of torque is available at engine speeds between 1,700 and 5,850 revolutions per minute for outstanding tractive power. The compact RS model sprints from 0 to 100 km/h (62.1 mph) in just 4.1 seconds. It can attain a maximum speed of 250 km/h (155.3 mph); on request Audi will increase the electronically limited top speed to 280 km/h (174.0 mph).'],
            ['3.0 TDI',6,2000,200,6000,580,16,'The 3.0 TDI ultra boasts a combined fuel consumption of just 4.8 – 4.7 liters per 100 kilometers (49.0 – 50.0 US mpg) on average – a CO2 equivalent of 126 – 122 grams per kilometer (202.8 – 196.3 g/mi).'],
            ['3.0 TFSI',6,3330,333,6000,580,16,'New solutions in networking and assistance systems round out its features. Audi is transferring many technologies from the full-size class into the mid-size class.The powerful core of the two new S models from Audi is a newly designed 3.0 TFSI engine. The direct gasoline injection engine with turbocharging has an output of 260 kW (354 hp) and produces a hefty torque of 500 Nm (368.8 lb-ft) from 1,370 to 4,500 rpm. In terms of power and torque it surpasses the previous model, while its weight and fuel consumption are considerably lower.'],
            ['4.0 TFSI',8,3993,412,5700,570,16,'4.0 TFSI engine with 445 kW (605 hp) and – thanks to the overboost feature – up to 750 Nm (553.2 lb-ft) of torque push acceleration to the super sports car level.'],
            ['4.2 TDI',13,132,12,213,123,231,'The TFSI and the two TDI engines that are available in the Audi A8 exhibit impressive power, smooth running and efficiency. With the 4.0 TFSI, the cylinder on demand (COD) system deactivates four cylinders when under partial load. The 4.2 TDI engine delivers a mighty 850 Nm (626.9 lb-ft) of torque to the crankshaft.'],
            ['5.2 FSI',10,5204,540,8250,540,16,'V-shaped 10-cylinder gasoline engine with a combined injection of fuel into the intake manifold and direct injection into the combustion chamber'],
        ]);
    }

    public function down()
    {
        $this->dropTable('engine');
    }
}
