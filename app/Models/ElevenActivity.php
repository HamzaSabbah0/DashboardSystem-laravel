<?php

namespace App\Models;

use App\Traits\FileManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElevenActivity extends Model
{
    use HasFactory , FileManager;

    public function getPhotoAttribute($value)
    {
        return $this->get_file_url($value);
    }
}
