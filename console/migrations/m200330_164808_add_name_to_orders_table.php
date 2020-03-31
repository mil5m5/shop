<?php

use yii\db\Migration;

/**
 * Class m200330_164808_add_name_to_orders_table
 */
class m200330_164808_add_name_to_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%orders}}', 'name', $this->string());
        $this->addColumn('{{%orders}}', 'phone', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200330_164808_add_name_to_orders_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200330_164808_add_name_to_orders_table cannot be reverted.\n";

        return false;
    }
    */
}
