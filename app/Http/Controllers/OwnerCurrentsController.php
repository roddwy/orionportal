<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Owner_Current;
use App\property;
use Laracasts\Flash\Flash;

class OwnerCurrentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ownercurrents = Owner_Current::search($request->phone)->orderBy('id', 'DESC')->paginate(4);
         //$ownercurrents1 = Owner_Current::searchCell($request->cell_phone)->orderBy('id', 'DESC')->paginate(4);
         $ownercurrents->each(function($ownercurrents){
            $ownercurrents->user;
            $ownercurrents->properties;
         });
         
         return view('admin.ownercurrents.index')->with('ownercurrents', $ownercurrents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ownercurrents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ownercurrent = new Owner_Current($request->all());
        $ownercurrent->user_id = \Auth::user()->id;
        //dd($ownercurrent);
        $ownercurrent->save();

        Flash::success('Se ha guardado el propietario '.$ownercurrent->first_name.' '.$ownercurrent->last_name.' con exito');
        return redirect()->route('admin.ownercurrents.index');


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
        $ownercurrent = Owner_Current::find($id);

        return view('admin.ownercurrents.edit')->with('ownercurrent', $ownercurrent);
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
        $ownercurrent = Owner_Current::find($id);
        $ownercurrent->fill($request->all());
        $ownercurrent->save();

        Flash::warning('El propietario '.$ownercurrent->first_name.' '.$ownercurrent->last_name.' ha sido actualizado con exito');
        return redirect()->route('admin.ownercurrents.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ownercurrent = Owner_Current::find($id);
        $ownercurrent->delete();

        Flash::error('El propietario '.$ownercurrent->first_name.' '.$ownercurrent->last_name.' ha sido eliminado con exito');
        return redirect()->route('admin.ownercurrents.index');
    }
}
