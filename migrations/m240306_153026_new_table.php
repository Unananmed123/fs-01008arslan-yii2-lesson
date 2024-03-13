<?php

use yii\db\Migration;

/**
 * Class m240306_153026_new_table
 */
class m240306_153026_new_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('cart', [
            "id" => $this->primaryKey(),
            "name" => $this->string(100)->notNull(),
            "price" => $this->integer()->notNull(),
            "count" => $this->integer()->notNull(),
            "user_id" => $this->integer()->notNull()
        ]);
        $this->addForeignKey('users_yii_to_cart_fk', "cart", 'user_id', 'users', 'id', 'CASCADE', "CASCADE");

    }


    public function safeDown()
    {
        $this->dropTable("cart");
    }

}
