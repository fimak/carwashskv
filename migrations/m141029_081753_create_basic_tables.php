<?php

use yii\db\Schema;
use yii\db\Migration;

class m141029_081753_create_basic_tables extends Migration
{
    public function up()
    {
        $this->createTable('page', [
            'id' => 'pk',
            'name' => 'string',
            'title' => 'string',
            'text' => 'text',
            'image' => 'string',
            'image_description' => 'string',
            'created_at' => 'integer',
            'updated_at' => 'integer',
        ]);

        $this->createTable('service', [
            'id' => 'pk',
            'type' => "enum('CARWASH', 'CAFFE') NOT NULL DEFAULT 'CARWASH'",
            'service' => 'string NOT NULL',
            'cost' => 'float DEFAULT 0',
            'created_at' => 'integer NOT NULL',
            'updated_at' => 'integer NOT NULL',
        ]);

        $this->createTable('discount', [
            'id' => 'pk',
            'text' => 'string NOT NULL',
            'expire_date' => 'integer',
            'created_at' => 'integer',
            'updated_at' => 'integer',
        ]);

        $this->createTable('photo_video', [
            'id' => 'pk',
            'type' => "enum('PHOTO','VIDEO') NOT NULL DEFAULT 'PHOTO'",
            'name' => 'string',
            'url' => 'string',
            'created_at' => 'integer',
            'updated_at' => 'integer',
        ]);

        $this->createTable('feedback', [
            'id' => 'pk',
            'rating' => 'float not NULL',
            'author' => 'string NOT NULL',
            'text' => 'text',
            'status' => "enum('ACTIVE', 'IDLE') NOT NULL DEFAULT 'ACTIVE'",
            'created_at' => 'integer',
            'updated_at' => 'integer',
        ]);

        $this->createTable('schedule', [
            'id' => 'pk',
            'datetime' => 'datetime',
            'services' => 'string',
            'cost' => 'integer(5)',
            'fio' => 'string',
            'phone' => 'integer(10)',
            'created_at' => 'integer',
            'updated_at' => 'integer',
        ]);
    }

    public function down()
    {
        $this->dropTable('page');
        $this->dropTable('service');
        $this->dropTable('discount');
        $this->dropTable('photo_video');
        $this->dropTable('feedback');
        $this->dropTable('schedule');
    }
}
