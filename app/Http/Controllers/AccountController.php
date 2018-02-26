<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function getAuthUser(Request $auth) {
        $auth->input('authorization');
        $auth->only('homeland');
    }
}
