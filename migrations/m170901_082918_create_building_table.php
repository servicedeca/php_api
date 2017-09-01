<?php

use yii\db\Migration;

/**
 * Handles the creation of table `building`.
 */
class m170901_082918_create_building_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('building', [
            'id' => $this->primaryKey(),
            'address' =>$this->string(),
            'coordinates' => 'POINT'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('building');
    }
}
