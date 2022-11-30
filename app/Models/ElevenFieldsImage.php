<?php

namespace App\Models;

use App\Traits\FileManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElevenFieldsImage extends Model
{
    use HasFactory , FileManager;

    public function eleven_field()
    {
        return $this->belongsTo(ElevenField::class);
    }

    public function getPhotoAttribute($value)
    {
        return $this->get_file_url($value);
    }

}
