<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user_details`.
 */
class m181117_045749_create_user_details_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user_details', [
            'user_detail_id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'address' => $this->string(255)->notNull(),
            'phone_no' => $this->integer(13)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user_details');
    }
}
