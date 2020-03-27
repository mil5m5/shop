<?php

use yii\db\Migration;
use \common\models\User;

/**
 * Class m200324_135723_add_admin
 */
class m200324_135723_add_admin extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $user = new User();
        $user->username = 'admin';
        $user->email = 'milena.nasibyan@gmail.com';
        $user->status = 10;
        $user->setPassword('123');
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        $user->save();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200324_135723_add_admin cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200324_135723_add_admin cannot be reverted.\n";

        return false;
    }
    */
}
