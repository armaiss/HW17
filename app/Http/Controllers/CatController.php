<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index($cat, $id, $title)
    {
        return view("$cat.index",[
            'cat'=>$cat,
            'id'=>$id,
            'title'=>$title


        ]);
    }
}
