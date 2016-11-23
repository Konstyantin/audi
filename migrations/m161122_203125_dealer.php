<?php

use yii\db\Migration;

class m161122_203125_dealer extends Migration
{
    public function up()
    {
        $this->createTable('dealer',[
            'id' => $this->primaryKey(),
            'city' => $this->string(45)->notNull(),
            'street' => $this->string(45)->notNull(),
            'location' => $this->string(45)->notNull(),
            'description' => $this->text()->notNull(),
        ]);

        $this->batchInsert('dealer',['city','street','location','description'],[
            ['Kharkov','Shevchenko street 135','Ukraine','<p>Contacts</p>\r\n<p>Kharkov center east</p>\r\n<p>Kharkov Shevchenka street 135</p>\r\n<p>phone +38066558891</p>\r\n<p>work time 9:00 - 19:00</p>\r\n<p>test drive time 10:00 - 18:00</p>'],
            ['Kiev','Degtyarova street 54','Ukraine','<div>\r\n<p>Contacts</p>\r\n<p>Kiev center</p>\r\n<p>Kiev Degtiarivska street 54</p>\r\n<p>phone +38066558891</p>\r\n<p>work time 9:00 - 19:00</p>\r\n<p>test drive time 10:00 - 18:00</p>\r\n</div>'],
            ['Odesa','Ovidiopolska street 121','Ukraine','<div>\r\n<p>Contacts</p>\r\n<p>Odesa center south</p>\r\n<p>Odesa Ovidiopolska street 121</p>\r\n<p>phone +38066558891</p>\r\n<p>work time 9:00 - 19:00</p>\r\n<p>test drive time 10:00 - 18:00</p>\r\n</div>'],
        ]);
    }

    public function down()
    {
        $this->dropTable('dealer');
    }
}
