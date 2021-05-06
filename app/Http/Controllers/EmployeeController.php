<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Models\Employee;

use App\Models\User;

use App\Models\Role;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $employees = Employee::all();
        return view('employees.index',compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $employee=new Employee();
        // personal information
        $employee->empl_dni=$request->empl_dni;
        $employee->empl_last_name=$request->empl_last_name;
        $employee->empl_maiden_name=$request->empl_maiden_name;
        $employee->empl_first_name=$request->empl_first_name;
        $employee->empl_other_name=$request->empl_other_name;
        $employee->empl_birthday=$request->empl_birthday;
        $employee->empl_cellphone=$request->empl_cellphone;
        $employee->empl_sexo=$request->empl_sexo;
        // address information
        $employee->empl_address=$request->empl_address;
        $employee->empl_homephone=$request->empl_homephone;
        $employee->empl_city=$request->empl_city;
        $employee->empl_region=$request->empl_region;
        $employee->empl_country=$request->empl_country;
        // company information
        $employee->empl_title=$request->empl_title;
        $employee->empl_ruc=$request->empl_ruc;
        $employee->empl_hireday=$request->empl_hireday;
        // state information
        $employee->empl_state='1';
        // user information
        if(User::all()->count()){
            $last=User::all()->last()->user_id+1;
        }
        else{
            $last=1; //Siguiente ID para el registro de Alumnos
        }
        $user = new User();
        $user->email= strtolower($request->empl_first_name).strtolower($request->empl_last_name).$last.'@mayorista.com';
        $user->user_name=strtolower($request->empl_first_name).strtolower($request->empl_last_name);
        $user->password=Hash::make($request->empl_dni);
        $user->user_state='1';
        $user->user_image_ruta = '/img/fotoperfil/';

        if($request->empl_title == 'Jefe')
        {
            $user->role_id ='3';
        }
        else
        {
            $user->role_id ='4';
        }
        $role = Role::findOrFail($user->role_id);
        $user->user_image_nombre = $role->role_name.'.jpg';
        $user->save();
        $employee->user_id=$last;
        $employee->save();
        return redirect()->route('employees.index')->with('datos','Registro Nuevo Guardado ...!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit',compact('employee'));
    }

    public function update(Request $request, $id)
    {
        Employee::findOrFail($id)->update($request->all());
        return redirect()->route('employees.index')->with('datos','Registro Actualizado ... !');
    }

    public function destroy($id)
    {
        //
    }
}
