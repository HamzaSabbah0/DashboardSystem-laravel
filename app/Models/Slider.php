<?php

namespace App\Models;

use App\Traits\FileManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory, FileManager;

    protected $fillable = [
        'photo',
        'description_ar',
        'description_en',
        'description_tu',
        'description_fr',
        'page_title'
    ];

    public function getPhotoAttribute($value)
    {
        return $this->get_file_url($value);
    }
}
