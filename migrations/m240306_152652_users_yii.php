<?php

use yii\db\Migration;

/**
 * Class m240306_152652_users_yii
 */
class m240306_152652_users_yii extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("users", [
           "id" => $this->primaryKey(),
            "email" => $this->string(100)->notNull(),
            "password" => $this->string(150)->notNull(),
            "name" => $this->string(50)->notNull(),
            'is_admin' => $this->boolean()->defaultValue(false)->notNull(),
            'age' => $this->string(100),
        ]);



    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240306_152652_users_yii cannot be reverted.\n";

        return false;
    }

}
