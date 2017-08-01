<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;
use Session;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $permissions = Permission::orderBy('id','desc')->paginate(8);
        return view('manage.permissions.index')->with('permissions',$permissions);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('manage.permissions.create');
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
        if($request->permission_type == 'simple'){
            $this->validate($request, [
                'name'=>'required|max:255',
                'slug'=>'required|max:255|alphadash|unique:permissions,name',
                'description'=>'sometimes|max:255'
            ]);

            $permission = new Permission();
            $permission->name =         $request->slug;
            $permission->display_name = $request->name;
            $permission->description =  $request->description;
            if($permission->save()){
                Session::flash('success','Permission crée avec succes');
                return redirect()->route('permissions.index');
            }else{
                Session::flash('danger','Erreur lors de la création de la permission, réessayer plus tard!');
                return redirect()->route('permissions.create')->withInput();
            }
        }else if($request->permission_type == 'crud'){
            $this->validate($request, [
                'ressource'=>'required|min:3|max:100|alpha',
                'checkbox1' => 'required_without_all: checkbox2, checkbox3,checkbox4',
                'checkbox2' => 'required_without_all: checkbox1, checkbox3,checkbox4',
                'checkbox3' => 'required_without_all: checkbox1, checkbox2,checkbox4',
                'checkbox4' => 'required_without_all: checkbox1, checkbox2,checkbox3'
            ]);

            $crud = explode(',', $request->crud_selected);
            if(count($crud)>0){
                foreach($crud as $c){
                    $slug = strtolower($c). '-' . $request->ressource;
                    $display_name = ucwords($c." ".$request->ressource);
                    $description = "Permet a l'utilisateur de ".strtoupper($c)." un(e) ".$request->ressource;

                    $permission = new Permission();
                    $permission->name =         $slug;
                    $permission->display_name = $display_name;
                    $permission->description =  $description;

                    if($permission->save()){
                        Session::flash('success','Permission crée avec succes');   
                    }else{
                        Session::flash('danger','Erreur lors de la création de la permission, réessayer plus tard!');
                    }
                }
                return redirect()->route('permissions.index');
            }else{
                return redirect()->route('permissions.create')->withInput();
            }
        }
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
        $permission = Permission::findOrFail($id);
        return view('manage.permissions.show')->with('permission',$permission);
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
        $permission = Permission::findOrFail($id);
        return view('manage.permissions.edit')->with('permission',$permission);

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
            'name'=>'required|max:255',
            'description'=>'required|max:255'
        ]);

        $permission = Permission::findOrFail($id);
        $permission->display_name = $request->name;
        $permission->description = $request->description;
        $permission->save();

        Session::flash('success','La Permission : '.$permission->display_name.' a été modifié avec succes!');
        return redirect()->route('permissions.show',$id);
    }

}
