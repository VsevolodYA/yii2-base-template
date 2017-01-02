<?php
/**
 * This view is used by console/controllers/MigrateController.php
 * The following variables are available in this view:
 */
/* @var $className string the new migration class name */

echo "<?php\n";
?>

use yii\db\Schema;
use app\db\Migration;

class <?= $className ?> extends Migration
{
    public function up()
    {
        $this->createTable(
            $this->tableName,
            [
                'id' => $this->primaryKey(),
                'name' => $this->string()->notNull()->unique(),

                'created_at' => $this->dateTime(),
                'updated_at' => $this->dateTime(),
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
        return '{{%table}}';
    }
}
