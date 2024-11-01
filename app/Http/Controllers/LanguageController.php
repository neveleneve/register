<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller {
    public function index(Request $request) {
        $language = $request->lang;
        session(['language' => $language]);

        return redirect()->back();
    }
}
