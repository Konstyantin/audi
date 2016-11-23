<?php

use yii\db\Migration;

class m161122_202341_article_category extends Migration
{
    public function up()
    {
        $this->createTable('article_category',[
            'id' => $this->primaryKey(),
            'name' => $this->string(45)->notNull(),
        ]);

        $this->batchInsert('article_category',['name'],[
            ['news'],
            ['sport'],
        ]);
    }

    public function down()
    {
        $this->dropTable('article_category');
    }
}
