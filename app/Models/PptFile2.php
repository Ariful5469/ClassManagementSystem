<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PptFile2 extends Model
{
    use HasFactory;

    protected $table = 'ppt_file2'; // Explicitly specify the table name
    protected $fillable = ['name', 'original_name', 'mime_type'];
}
