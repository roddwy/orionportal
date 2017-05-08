<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->paginate(4);
        $users->each(function($users){
            $users->owner_currents;              
        });        
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User($request->all());
        //dd($user);
        $user->password = bcrypt($request->password);
        $user->save();
        //dd('Usuario Creado');
        Flash::success("Se ha registrado ". $user->first_name. " ". $user->last_name. " de forma exitosa");

        return redirect()->route('admin.users.index');
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
        $user = User::find($id);
        //dd($user);
        return view('admin.users.edit')->with('user', $user);
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
        //dd($request->all());
        $user = User::find($id);
        //$user->first_name = $request->first_name;
        //$user->last_name = $request->last_name;
        //$user->ci = $request->ci;
        //$user->phone = $request->phone;
        //$user->cell_phone = $request->cell_phone;
        //$user->email = $request->email;
        //$user->name_user = $request->name_user;
        //$user->password = bcrypt($request->password);
        //$user->type = $request->type;

        $user->fill($request->all());
        $user->save();

        Flash::warning('El usuario ha sido actualizado');
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        //dd($user);
        $user->delete();

        //Flash::warning('El usuario '. $user->first_name. ' ' . $user->last_name.' ha sido borrado de forma exitosa');
        Flash::error('El usuario '. $user->first_name. ' ' . $user->last_name.' ha sido borrado de forma exitosa');
        return redirect()->route('admin.users.index');
    }
}
