<?php

use yii\db\Migration;

/**
 * Class m200326_101151_add_updated_at_to_orders_table
 */
class m200326_101151_add_updated_at_to_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%orders}}', 'updated_at', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200326_101151_add_updated_at_to_orders_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200326_101151_add_updated_at_to_orders_table cannot be reverted.\n";

        return false;
    }
    */
}
