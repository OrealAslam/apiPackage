<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Apiaccess\Verifyapitoken\VerifyApiToken;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function apiData(Request $request)
    {
        $a = new VerifyApiToken;
        return $a->apiData($request);
    }
}
