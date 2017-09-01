<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m170901_083101_create_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'parent_id' => $this->integer()->defaultValue(NULL),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('category');
    }
}
