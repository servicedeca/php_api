<?php

use yii\db\Migration;

/**
 * Handles the creation of table `company_category`.
 */
class m170901_083130_create_company_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('company_category', [
            'id' => $this->primaryKey(),
            'company_id' => $this->integer()->notNull(),
            'category_id' => $this->integer()->notNull(),
        ]);

        // add foreign key for table `company`
        $this->addForeignKey(
            'fk-company_category-company_id',
            'company_category',
            'company_id',
            'company',
            'id',
            'CASCADE'
        );

        // add foreign key for table `category`
        $this->addForeignKey(
            'fk-company_category-category_id',
            'company_category',
            'category_id',
            'category',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        // drops foreign key for table `company`
        $this->dropForeignKey(
            'fk-company_category-company_id',
            'company_category'
        );

        // drops foreign key for table `category`
        $this->dropForeignKey(
            'fk-company_category-category_id',
            'company_category'
        );

        $this->dropTable('company_category');
    }
}
