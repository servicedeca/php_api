<?php

use yii\db\Migration;

/**
 * Handles the creation of table `company`.
 */
class m170901_082949_create_company_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('company', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'phones' => $this->string(),
            'building_id' => $this->integer()
        ]);

        // add foreign key for table `building`
        $this->addForeignKey(
            'fk-company-building_id',
            'company',
            'building_id',
            'building',
            'id',
            'CASCADE'
        );

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('company');

        // drops foreign key for table `company`
        $this->dropForeignKey(
            'fk-company-building_id',
            'company'
        );
    }
}
