<?php

use yii\db\Migration;

/**
 * Class m210715_145912_create_general_settings_table
 */
class m210715_145912_create_general_settings_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('general_settings', [
            'id' => $this->primaryKey(),
            'site_name' => $this->string(100)->notNull(),
            'site_message' => $this->text()->notNull(),
            'status' => $this->tinyInteger(1)->notNull()->defaultValue(1),
            'requests_folio' => $this->integer(11)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('general_settings');
    }
}
