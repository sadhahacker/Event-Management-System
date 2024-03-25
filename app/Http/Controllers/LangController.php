<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;


class LangController extends Controller
{
    public function changeLanguage($locale)
    { // Default to English if locale is not specified
        App::setLocale($locale);
        Session::put('lang',$locale);
        return response()->json(['message' => 'lang changed']);
    }
}
