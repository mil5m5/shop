<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%newsletters}}`.
 */
class m200326_171143_create_newsletters_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%newsletters}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%newsletters}}');
    }
}
