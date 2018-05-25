<?php

use yii\db\Migration;

/**
 * Handles the creation of table `telegram_offset`.
 */
class m180525_045105_create_telegram_offset_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('telegram_offset', [
            'id_offset' => $this->primaryKey(),
            'timestamp_offset' => $this->timestamp()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('telegram_offset');
    }
}
