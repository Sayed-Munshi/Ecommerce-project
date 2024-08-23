<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHelper;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected function user(){
        Auth::user()->photo = ImageHelper::makeProfileImage(Auth::user()->photo);
    }
}
