<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClienteApiController extends Controller
{
    public function index()
    {
        return response()->json('Deu certo!');
    }
}
