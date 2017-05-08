<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Zone;
use Laracasts\Flash\Flash;
use App\Http\Requests\ZoneRequest;

class ZonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $zones = Zone::search($request->name)->orderBy('id', 'DESC')->paginate(10);
        return view('admin.zones.index')->with('zones', $zones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.zones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ZoneRequest $request)
    {
        $zone = new Zone($request->all());
        $zone->save();

        Flash::success('Se creo la zona '.$zone->name.' con exito');
        return redirect()->route('admin.zones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $zone = Zone::find($id);
        return view('admin.zones.edit')->with('zone', $zone);
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
        $zone = Zone::find($id);
        $zone->fill($request->all());
        $zone->save();

        Flash::warning('Se actualizo la zona '.$zone->name.' exitosamente!!!');
        return redirect()->route('admin.zones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $zone = Zone::find($id);
        $zone->delete();

        Flash::error('Se elimino la zona '.$zone->name.' con exito');
        return redirect()->route('admin.zones.index');
    }
}
