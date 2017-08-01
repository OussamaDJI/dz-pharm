@extends('layouts.manage')
@section('content')

    <div class="flex-container">
        <div class="columns ">
            <div class="column">
                <h1 class="title">
                    Modifications sur la Permission
                </h1>
            </div>
        </div> 

        <hr>

        <div class="columns">
            <div class="column is-10 is-offset-1">
                <div class="card">
                    <div class="card-content">
                        <form method="POST" action="{{route('permissions.update',$permission->id)}}">
                            {{method_field('PUT')}}
                            {{csrf_field()}}
                            <div class="field" v-if="permissionType == 'simple'">
                                <label for="name" class="label">Nom de la Permission</label>
                                <p class="control">
                                    <input type="text" class="input" name="name" id="name" value="{{$permission->display_name}}">
                                </p>
                            </div>
                            <div class="field" v-if="permissionType == 'simple'">
                                <label for="slug" class="label">Slug</label>
                                <p class="control">
                                    <input type="text" class="input" name="slug" id="slug" disabled value="{{$permission->name}}">
                                </p>
                            </div>
                            <div class="field" v-if="permissionType == 'simple'">
                                <label for="description" class="label">Description</label>
                                <p class="control">
                                    <input type="text" class="input" name="description" id="description" value="{{$permission->description}}">
                                </p>
                            </div>
                            
                            <button class="button is-primary m-t-20"><i class="fa fa-floppy-o m-r-10"></i>Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

            
        
    </div>

@endsection