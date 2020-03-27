<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m200311_065233_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'sold' => $this->integer(),
            'rating' => $this->integer(),
            'title' => $this->string(),
            'price' => $this->integer(),
            'description' => $this->string(),
            'quantity' => $this->integer(),
            'available_quantity' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products}}');
    }
}
