<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\property;
use App\Zone;
use App\Category;
use App\Type_Property;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $properties = property::where('state_id','<>','2')->search2($request->sale_price)->search3($request->zone_id)->search4($request->category_id)->search5($request->type_property_id)->orderBy('id', 'DESC')->paginate(3);
       //$properties = property::all();
       //dd($properties);
       $properties->each(function($properties){
            $properties->user;
            $properties->category;
            $properties->type_property;
            $properties->owner_current;
            $properties->zone;
            $properties->images;               
        });
       $zones = Zone::orderBy('name', 'ASC')->lists('name', 'id');
       $categories = Category::orderBy('name', 'ASC')->lists('name', 'id');
       $types = Type_Property::orderBy('name', 'ASC')->lists('name', 'id');
        return view('search')->with('properties', $properties)->with('zones',$zones)->with('categories', $categories)->with('types', $types);
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
        //
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
        //
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
        //
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
}
