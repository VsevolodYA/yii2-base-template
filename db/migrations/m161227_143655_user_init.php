<?php

use app\db\Migration;
use app\models\User;

class m161227_143655_user_init extends Migration
{
    public function up()
    {
        $this->createTable(
            $this->tableName,
            [
                'id' => $this->primaryKey(),
                'auth_key' => $this->string(32)->notNull(),
                'password_hash' => $this->string()->notNull(),
                'email' => $this->string()->notNull()->unique(),
                'status' => $this->smallInteger(1)->defaultValue(User::STATUS_ENABLED),
                'created_at' => $this->dateTime()->notNull(),
                'updated_at' => $this->dateTime()->notNull(),
            ],
            $this->tableOptions
        );
    }

    public function down()
    {
        $this->dropTable($this->tableName);
    }

    public function getTableName()
    {
        return User::tableName();
    }
}
