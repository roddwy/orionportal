<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Laracasts\Flash\Flash;

use App\property;
use App\Owner_Current;
use App\Zone;
use App\Category;
use App\Type_Property;
use App\image;
use App\Storage;
use App\State;
use App\Http\Requests\PropertyRequest;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function principal(Request $request){

        $states = State::where('name','vendido')->orWhere('name','inactivo')->get();
        $statesid = array();
        foreach ($states as $state) {
            $statesid[] = array('state_id'=>$state->id);
        }
        //dd($statesid);
        $properties = property::where('state_id','<>',$statesid[0])->where('state_id','<>',$statesid[1])->search($request->id)->orderBy('id', 'DESC')->paginate(4);
        //$properties = property::all();
        //dd($properties);
        $properties->each(function($properties){
            $properties->user;
            $properties->category;
            $properties->type_property;
            $properties->owner_current;
            $properties->zone;
            $properties->state;
            $properties->images;               
        });
        
        return view('welcome')->with('properties', $properties);
    }

    public function index(Request $request)
    {
        $properties = property::search($request->id)->orderBy('id', 'DESC')->paginate(5);
        //$properties = property::all();
        //dd($properties);
        $properties->each(function($properties){
            $properties->user;
            $properties->category;
            $properties->type_property;
            $properties->owner_current;
            $properties->zone;
            $properties->state;
            $properties->images;
        });
        //dd($properties);
        return view('admin.properties.index')->with('properties', $properties);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $zones = Zone::orderBy('name', 'ASC')->lists('name', 'id');
        //dd($zones);
        //$categories = Category::orderBy('name', 'ASC')->get();
        $categories = Category::orderBy('name', 'ASC')->lists('name', 'id');
        $typeproperties = Type_Property::orderBy('name', 'ASC')->lists('name', 'id');
        $states = State::orderBy('name', 'ASC')->lists('name', 'id');
        //$ownercurrent = $id;
        $ownercurrent = Owner_Current::find($id);
        return view('admin.properties.create')->with('zones', $zones)->with('categories', $categories)->with('typeproperties', $typeproperties)->with('ownercurrent', $ownercurrent)->with('states', $states);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $property = new property($request->all());
        $property->user_id = \Auth::user()->id;
        $property->save();           
        /*MANIPULACION DE IMAGENES*/
        $images = $request->file('image');
        if (!empty($images)) :

            foreach ($images as $image) :
                //$image = $request->file('image');
                $name = 'orion_' . time() . '.' . $image->getClientOriginalName();
                $path = public_path().'/images/properties';
                $image->move($path, $name);
                /*GUARDAMOS LA IMAGEN*/
                $image = new image();
                $image->name = $name;
                $image->property()->associate($property);
                $image->save();
                /*FIN DE GUARDAR IMAGEN*/
            endforeach;           
        endif;
        /*FIN DE MANIPULACION DE IMAGENES*/
        Flash::success('Se creo el inmueble con exito');
        return redirect()->route('admin.properties.index');
        /*if ($request->file('image')) 
        {
            $file = $request->file('image');
            //dd($file);
            $name = 'orion_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path().'/images/properties';
            $file->move($path, $name);
        }*/
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
        $property = property::find($id);
        $zones = Zone::orderBy('name', 'ASC')->lists('name', 'id');
        $categories = Category::orderBy('name', 'ASC')->lists('name', 'id');
        $typeproperties = Type_Property::orderBy('name', 'ASC')->lists('name', 'id');
        $states = State::orderBy('name', 'ASC')->lists('name', 'id');
        return view('admin.properties.edit')->with('property', $property)->with('zones', $zones)->with('categories', $categories)->with('typeproperties',$typeproperties)->with('states', $states);
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
        $property = property::find($id);
        $property->fill($request->all());
        $property->save();

        Flash::warning('Se actualizo el Inmueble con id: '.$property->id.' exitosamente!!!');
        return redirect()->route('admin.properties.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function infoempresa()
    {
        return view('infoempresa');
    }
}
