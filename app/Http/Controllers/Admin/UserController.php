<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index');

    }

    public function edit(User $user)
    {
       /*  $roles = Role::all(); */
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        /* $user->roles()->sync($request->roles); *//* para escribir en la relacion polimorfica de la tabla roles y permisos, video 21 03 de como crear un blog auto administrable de victor arana flores, el metodo sync es para asignar un registro a esta relacion, lo explico en videso anteriores */
    
         return redirect()->route('admin.users.edit', $user)->with('info', 'se asigno los roles correctamente'); 
    }

}
