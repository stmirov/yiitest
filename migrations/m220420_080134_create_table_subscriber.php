<?php

use yii\db\Migration;

/**
 * Class m220420_080134_create_table_subscriber
 */
class m220420_080134_create_table_subscriber extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220420_080134_create_table_subscriber cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220420_080134_create_table_subscriber cannot be reverted.\n";

        return false;
    }
    */
}
