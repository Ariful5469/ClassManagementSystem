<?php

// app/Models/PptFile.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PptFile extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'original_name', 'mime_type', 'file_data'];
}
