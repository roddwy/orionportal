<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Type_Property;
use Laracasts\Flash\Flash;
use App\Http\Requests\typepropertyRequest;

class TypePropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeproperties = Type_Property::orderBy('id','DESC')->paginate(2);
        return view('admin.typeproperties.index')->with('typeproperties', $typeproperties);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.typeproperties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(typepropertyRequest $request)
    {
        $typeproperties = new Type_Property($request->all());
        $typeproperties->save();

        Flash::success('Se registro el tipo de propiedad: '.$typeproperties->name.' de forma exitosa');
        return redirect()->route('admin.typeproperties.index');
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
        $typeproperty = Type_Property::find($id);
        return view('admin.typeproperties.edit')->with('typeproperty', $typeproperty);
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
        $typeproperty = Type_Property::find($id);
        $typeproperty->fill($request->all());
        $typeproperty->save();

        Flash::warning('El tipo de propiedad '.$typeproperty->name.' ha sido actualizado');
        return redirect()->route('admin.typeproperties.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $typeproperty = Type_Property::find($id);
        $typeproperty->delete();

        Flash::error('El tipo de propiedad '.$typeproperty->name.' ha sido eliminado con exito');
        return redirect()->route('admin.typeproperties.index');

    }
}
