<?php

namespace NorthernFoodValley\Http\Controllers\BackOffice\Settings;

use Illuminate\Http\Request;
use NorthernFoodValley\Http\Requests;
use NorthernFoodValley\Http\Controllers\Controller;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // search จาก field ไหนก็ได้ ทำเป็นแบบ OR ให้มี %search_term% ก็เจอ

        return view('back-office.settings.general.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-office.settings.general.create');
    }
}
