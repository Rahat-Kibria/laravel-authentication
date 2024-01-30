<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AntispamController extends Controller
{
    public function antispam()
    {
        return "Anti-Spam Page. If you reload the page more than 3 times you will be blocked for five minutes";
    }
}
