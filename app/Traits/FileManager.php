<?php

namespace App\Traits;

trait FileManager
{
    public function upload_file($file, $path)
    {
        $extention = $file->extension();

        $file_name = uniqid() . '_' . strtotime("now") . '.' . $extention;

        return $file->storeAs('uploads/' . $path, $file_name, 'public');
    }

    public function get_file_url($path)
    {
        return asset('storage/' . $path);
    }
}
