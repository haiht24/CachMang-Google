<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuggestController extends Controller
{
    public function index(Request $request) {
        $q = $request->all()['q'];
        return $this->getGoogleSuggestSearch($q);
    }
}
