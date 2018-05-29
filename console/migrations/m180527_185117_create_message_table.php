<?php

use yii\db\Migration;

/**
 * Handles the creation of table `message`.
 */
class m180527_185117_create_message_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('message', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'user_id' => $this->integer(),
            'content' => $this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('message');
    }
}
