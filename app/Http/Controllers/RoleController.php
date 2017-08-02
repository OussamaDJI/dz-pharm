<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Permission;
use Session;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles = Role::all();
        return view('manage.roles.index')->with('roles',$roles);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $permissions = Permission::all();
        return view('manage.roles.create')->with('permissions',$permissions);
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
        $this->validate($request,[
            'display_name'=>'required|max:255',
            'description'=>'sometimes|max:255',
            'name'=>'required|max:100|alpha_dash|unique:roles,name'
        ]);

        $role = new Role();
        $role->display_name = $request->display_name;
        $role->description = $request->description;
        $role->name = $request->name;
        $role->save();

        if($request->permissions){
            $role->SyncPermissions(explode(',',$request->permissions));
        }

        Session::flash('success','Role crée avec succes!');
        return redirect()->route('roles.show',$role->id);
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
        $role = Role::findOrFail($id);
        return view('manage.roles.show')->with('role',$role);
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
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        return view('manage.roles.edit')->with('role',$role)->with('permissions',$permissions);
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
        $this->validate($request,[
            'display_name'=>'required|max:255',
            'description'=>'sometimes|max:255'
        ]);

        $role = Role::findOrFail($id);
        $role->display_name = $request->display_name;
        $role->description = $request->description;
        $role->save();

        if($request->permissions){
            $role->SyncPermissions(explode(',',$request->permissions));
        }

        Session::flash('success','Role mis à jour avec succes!');
        return redirect()->route('roles.show',$id);
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
