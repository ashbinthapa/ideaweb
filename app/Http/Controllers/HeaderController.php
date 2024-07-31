<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

class HeaderController extends Controller
{
    public function getLiveDate()
    {
        return Carbon::now()->format('l, F j, Y');
    }
}
