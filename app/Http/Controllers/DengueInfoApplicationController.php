<?php

namespace App\Http\Controllers;

use App\Models\DengueInfoApplication;
use Illuminate\Http\Request;

class DengueInfoApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json( DengueInfoApplication::orderBy('id','DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dengueInfoApplication = new DengueInfoApplication;
        $dengueInfoApplication->name = $request->name;
        $dengueInfoApplication->lName = $request->lName;
        $dengueInfoApplication->deaths = $request->deaths;
        $dengueInfoApplication->recovered = $request->recovered;
        $dengueInfoApplication->month = $request->month;
        $dengueInfoApplication->save();

        return response()->json(['created'=>201]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DengueInfoApplication  $dengueInfoApplication
     * @return \Illuminate\Http\Response
     */
    public function show(DengueInfoApplication $dengueInfoApplication)
    {
        return response()->json($dengueInfoApplication);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DengueInfoApplication  $dengueInfoApplication
     * @return \Illuminate\Http\Response
     */
    public function edit(DengueInfoApplication $dengueInfoApplication)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DengueInfoApplication  $dengueInfoApplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dengueFev = DengueInfoApplication::find($id);

        $dengueFev->update($request->all());

        return response()->json(['updated'=>200]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DengueInfoApplication  $dengueInfoApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dengueFev = DengueInfoApplication::find($id);
        $dengueFev->delete();

        return response()->json(['deleted'=>200]);

    }
}
