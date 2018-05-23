<?php

use yii\db\Migration;

/**
 * Handles the creation of table `project`.
 */
class m180523_201103_create_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('project', [
            'id' => $this->primaryKey(),
             'project_name' => $this->string()->notNull()->unique(),
             'user_id' => $this->integer()->notNull(),
             'status' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('project');
    }
}
