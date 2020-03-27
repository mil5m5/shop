<?php

use yii\db\Migration;

/**
 * Class m200326_172349_add_discount_to_products_table
 */
class m200326_172349_add_discount_to_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%products}}', 'discount', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200326_172349_add_discount_to_products_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200326_172349_add_discount_to_products_table cannot be reverted.\n";

        return false;
    }
    */
}
