<?php

namespace App\Models;

use App\Traits\FileManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory, FileManager;

    protected $fillable = [
        'title_ar',
        'title_en',
        'title_tu',
        'title_fr',
        'description_ar',
        'description_en',
        'description_tu',
        'description_fr',
        'photo',
        'video',
        'section_title',
    ];

    public function getPhotoAttribute($value)
    {
        return $this->get_file_url($value);
    }
}
