<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ImageHelper
{
    public static function makeProfileImage($path = null){
        if($path){
            if(Storage::disk('public')->exists($path)){
                return Storage::url($path);
            }
            return "https://ui-avatars.com/api/?name=". Auth::user()->name ."?rounded=true?background=random?bold=true";
        }else{
            if(Auth::check()){
                return "https://ui-avatars.com/api/?name=". Auth::user()->name ."?rounded=true?background=random?bold=true";
            }
            return Storage::url("default.php");
        }
    }
}
