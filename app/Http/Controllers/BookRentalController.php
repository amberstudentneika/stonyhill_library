<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookRentalController extends Controller
{
    public function issuedbook(){
        return view('liveIssuedBook');
    }
}
