<?php

use yii\db\Migration;

/**
 * Class m200326_213104_add_number_of_voters_to_products_table
 */
class m200326_213104_add_number_of_voters_to_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%products}}', 'number_of_voters', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200326_213104_add_number_of_voters_to_products_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200326_213104_add_number_of_voters_to_products_table cannot be reverted.\n";

        return false;
    }
    */
}
