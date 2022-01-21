<?php

namespace App\Manager;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserManager
{
    public function uploadAvatar($data)
    {
        // récupérer l'image a partir de son URL
        $content = file_get_contents($data->avatar);

        // Générer le nom de l'image et définir son path
        $path = 'users/'.$data->id.'_'.Str::random(18).'.jpg';

        // Stocker l'image en question
        Storage::disk('public')->put($path, $content);

        // Retourner le chemin
        return $path;

    }
}
