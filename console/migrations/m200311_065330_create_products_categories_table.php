<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products_categories}}`.
 */
class m200311_065330_create_products_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_category}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'product_id' => $this->integer(),
        ]);
        $this->addForeignKey('fk_product_id','{{%product_category}}', 'category_id', '{{%categories}}', 'id');
        $this->addForeignKey('fk_category_id','{{%product_category}}', 'product_id', '{{%products}}', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products_categories}}');
    }
}
