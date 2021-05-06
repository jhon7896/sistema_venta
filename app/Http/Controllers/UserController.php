<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use  App\Models\User;

use App\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $users = User::all();
        $roles = Role::all();
        return view('users.index',compact('users','roles'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user=new User();
        $user->user_name=$request->user_name;
        $user->email=$request->email;
        $user->role_id=$request->role_id;
        $user->password = Hash::make($request->input('password'));
        $user->user_state='1';
        $user->user_image_route = '/img/fotoperfil/';
        $role = Role::findOrFail($request->role_id);
        $user->user_image_name = $role->role_name.'.jpg';
        $user->save();
        return redirect()->route('users.index')->with('datos','Registro Nuevo Guardado ...!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $request->merge([
            'password' => Hash::make($request->input('password'))
        ]);
        User::findOrFail($id)->update($request->all());
        return redirect()->route('users.index')->with('datos','Usuario Actualizado ...!');
    }

    public function destroy($id)
    {
        //
    }
}
