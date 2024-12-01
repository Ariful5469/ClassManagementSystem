<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AlterFileDataColumnInPptFilesTable extends Migration
{
    public function up()
    {
        DB::statement('ALTER TABLE ppt_files MODIFY COLUMN file_data LONGBLOB');
    }

    public function down()
    {
        DB::statement('ALTER TABLE ppt_files MODIFY COLUMN file_data BLOB');
    }
}
