<?php

namespace App\Models;

use App\Traits\FileManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory , FileManager;

    protected $fillable = [
        'logo_photo',
        'facebook_link',
        'twitter_link',
        'instagram_link',
        'whatsapp_number',
        'address',
        'email',
        'phone',
    ];

    public function getLogoPhotoAttribute($value)
    {
        return $this->get_file_url($value);
    }
}
