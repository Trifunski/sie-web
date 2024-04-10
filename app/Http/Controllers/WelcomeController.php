<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;

class WelcomeController extends Controller
{
    public function index()
    {
        $sections = Section::all();

        $sections = $sections->toArray();

        return view('welcome')->with('sections', $sections);
    }
}
