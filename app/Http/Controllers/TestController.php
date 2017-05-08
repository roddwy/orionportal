<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\property;

class TestController extends Controller
{
    public function view($id)
    {
        $property = property::find($id);
        $property->category;
        $property->zone;
        $property->owner_current;
        $property->user;
        //dd($property);

        return view('test.index', ['prueba' => $property]);
    }
}
    