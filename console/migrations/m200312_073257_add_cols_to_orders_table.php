<?php

use yii\db\Migration;

/**
 * Class m200312_073257_add_cols_to_orders_table
 */
class m200312_073257_add_cols_to_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%orders}}', 'address', $this->string());
        $this->addColumn('{{%orders}}', 'status', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200312_073257_add_cols_to_orders_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200312_073257_add_cols_to_orders_table cannot be reverted.\n";

        return false;
    }
    */
}
