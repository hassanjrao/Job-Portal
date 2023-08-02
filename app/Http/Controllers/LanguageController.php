<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function change(Request $request)
    {
        $lang=$request->lang;
        App::setLocale($lang);
        session()->put('locale', $lang);

        session()->put("locale_changed",true);

        return redirect()->back();
    }


}
