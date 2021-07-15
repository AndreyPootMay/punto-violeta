<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%safety_places}}`.
 */
class m210707_155702_create_safety_places_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%safety_places}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'bussiness_name' => $this->string(100)->notNull(),
            'country' => $this->string(100)->notNull(),
            'state' => $this->string(100)->notNull(),
            'address' => $this->text()->notNull(),
            'lat' => $this->string(50)->notNull(),
            'long' => $this->string(50)->notNull(),
            'details' => $this->text()->notNull(),
            'active' => $this->tinyInteger(1)->notNull()->defaultValue(1),
            'createdAt' => $this->timestamp()->notNull(),
            'updatedAt' => $this->timestamp()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%safety_places}}');
    }
}
