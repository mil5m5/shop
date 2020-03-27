<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order_products}}`.
 */
class m200311_113910_create_order_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order_products}}', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer(),
            'product_id' => $this->integer(),
        ]);
        $this->addForeignKey('fk_order', '{{%order_products}}', 'order_id', '{{%orders}}', 'id');
        $this->addForeignKey('fk_products', '{{%order_products}}', 'product_id', '{{%products}}', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order_products}}');
    }
}
