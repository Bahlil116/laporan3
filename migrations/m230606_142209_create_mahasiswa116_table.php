<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mahasiswa116}}`.
 */
class m230606_142209_create_mahasiswa116_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("mahasiswa",[
            "id" => $this->primaryKey(10),
            "nim" => $this->string(30),
            "nama" => $this->string(50),
            "kelas" => $this->string(20),
            "status" => $this->string(20),
        ]);

        $this->insert('mahasiswa', [
            'id' => 1,
            'nim' => 60200121116,
            'nama' => 'deril',
            'kelas' => 'A',
            'status' => 'baru',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa116}}');
    }
}
