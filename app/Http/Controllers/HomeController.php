<?php

namespace App\Http\Controllers;

use Input;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

use App\Models\Customer;

use App\Models\Employee;

use App\Models\Supplier;

use \Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function home()
    {
        $customer = Customer::all();
        $employee = Employee::where('empl_title','=','Empleado');
        $supplier = Supplier::all();
        return view('home',compact('customer', 'employee', 'supplier'));
    }

    public function index()
    {
        return view('auth.profile');
    }

    public function edit($id)
    {

        $user = User::findOrFail($id);
        return view('auth.editprofile',compact('user'));
    }

    public function update(Request $request, $id)
    {
        
        if ($request->hasFile('user_image_name'))
        {
            $user = User::findOrFail($id);
            $file = $request->file('user_image_name');
            $destinationPath = 'img/fotoperfil/';
            $filename = time(). '_' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('user_image_name')->move($destinationPath, $filename);
            $user->user_image_name = $filename;
            $user->user_image_route = $destinationPath;
            $user->save();
        }
        return redirect()->route('profile.index')->with('datos','Usuario Actualizado ...!');
    }
}
