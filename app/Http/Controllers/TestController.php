<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return "建物です";
    }

     public function other($room_number = "部屋番号")
    {
        return "部屋番号は" . $room_number . "です";
    }
    
}

