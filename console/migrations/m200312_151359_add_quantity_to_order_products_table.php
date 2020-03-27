<?php

use yii\db\Migration;

/**
 * Class m200312_151359_add_quantity_to_order_products_table
 */
class m200312_151359_add_quantity_to_order_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%order_products}}', 'quantity', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200312_151359_add_quantity_to_order_products_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200312_151359_add_quantity_to_order_products_table cannot be reverted.\n";

        return false;
    }
    */
}
