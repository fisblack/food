<?php

namespace NorthernFoodValley\Http\Controllers\BackOffice\Settings;

use Illuminate\Http\Request;
use NorthernFoodValley\Http\Requests;
use NorthernFoodValley\Http\Controllers\Controller;

class ExampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // search จาก field ไหนก็ได้ ทำเป็นแบบ OR ให้มี %search_term% ก็เจอ

        return view('back-office.settings.example.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-office.settings.example.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->route('back-office.settings.example.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('back-office.settings.example.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('back-office.settings.example.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return redirect()->route('back-office.settings.example.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect()->route('back-office.settings.example.index');
    }
    
    /**
    * Restore the specified resource back to storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function restore($id)
    {
        return redirect()->route('back-office.settings.example.index');
    }
    
    /**
    * Delete multiple resources from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function deletes($ids)
    {
        return redirect()->route('back-office.settings.example.index');
    }
    
    /**
    * Get specified image resource
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function image(Request $request)
    {
        return Image::make(storage_path('images/back-office/settings/example/88888888.png'));
    }
    
    /**
    * Generates report
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function report(Request $request)
    {
        return redirect()->route('back-office.settings.example.index');
    }
    
    /**
    * Authorise the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function authorise(Request $request)
    {
        return redirect()->route('back-office.settings.example.index');
    }
    
    /**
    * DeAuthorise the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function deAuthorisation(Request $request)
    {
        return redirect()->route('back-office.settings.example.index');
    }
}
