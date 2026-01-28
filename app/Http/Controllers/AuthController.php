<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function show_login_form()
    {
        return "Je suis la page login";
    }
}
