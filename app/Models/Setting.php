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
        'instagram_link',
        'youtube_link',
        'telegram_link',
        'snapchat_link',
        'tiktok_link',
        'whatsapp_number',
        'address',
        'email',
        'phone',
    ];

    public function getLogoPhotoAttribute($value)
    {
        return $value ? $this->get_file_url($value) : NULL;
    }
}
