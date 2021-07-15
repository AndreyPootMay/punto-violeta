<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%requests}}`.
 */
class m210709_141802_create_requests_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%requests}}', [
            'id' => $this->primaryKey(),
            'safety_place_id' => $this->integer(11)->notNull()->unsigned(),
            'user_id' =>  $this->integer(11)->notNull()->unsigned(),
            'full_name' => $this->string(150)->notNull(),
            'age_old' => $this->string(11)->notNull(),
            'folio' =>  $this->string(20)->notNull(),
            'lat' => $this->string(100)->notNull(),
            'long' => $this->string(100)->notNull(),
            'details' => $this->text()->notNull(),
            'cancelled' => $this->tinyInteger(1)->defaultValue(0)->notNull(),
            'active' =>  $this->tinyInteger(1)->defaultValue(1)->notNull(),
            'createdAt' => $this->timestamp()->notNull(),
            'updatedAt' => $this->timestamp()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%requests}}');
    }
}
