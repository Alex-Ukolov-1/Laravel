<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $req)
    {
     dd($reg->input('subject'));
     $validation=$reg->validate(['subject'=>'required|min:5|max:50'])
    }
}
