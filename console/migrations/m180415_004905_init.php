<?php

use yii\db\Migration;

class m180415_004905_init extends Migration
{
    public $table = '{{%machine}}';

    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable($this->table, [
            'id' => $this->primaryKey(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable($this->table);
    }
}
