<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class HouseController
 * @package App\Http\Controllers\Api
 */
class HouseController extends Controller
{
    public function index(Request $request)
    {

    }

    public function show($id)
    {
        return $id;
    }
}
