<?php

namespace NorthernFoodValley\Http\Controllers\BackOffice;

use Illuminate\Http\Request;
use NorthernFoodValley\Http\Controllers\Controller;

class BackOfficeUIController extends Controller
{

    public function index()
    {
        return view('back-office.ui.buttons');
    }

    public function icon()
    {
        return view('back-office.ui.icons');
    }

    public function input()
    {
        return view('back-office.ui.input');
    }

    public function select()
    {
        return view('back-office.ui.select');
    }

    public function dropdown()
    {
        return view('back-office.ui.dropdown');
    }
    
    public function pagination()
    {
        return view('back-office.ui.pagination');
    }

    public function tab()
    {
        return view('back-office.ui.tab');
    }

    public function image()
    {
        return view('back-office.ui.input-image');
    }
}
