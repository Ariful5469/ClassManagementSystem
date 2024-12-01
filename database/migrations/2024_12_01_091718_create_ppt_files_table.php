<?php

// database/migrations/xxxx_xx_xx_create_ppt_files_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePptFilesTable extends Migration
{
    public function up()
    {
        Schema::create('ppt_files', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('original_name');
            $table->string('mime_type');
            $table->binary('file_data'); // Storing as a blob
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ppt_files');
    }
}
