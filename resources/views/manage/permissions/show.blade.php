@extends('layouts.manage')
@section('content')

    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title"> Informations sur la Permission </h1>
            </div>
            <div class="column">
                <a href="{{route('permissions.edit',$permission->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-pencil m-r-10"></i>Modifier informations</a>
            </div>
        </div>
        <hr>
        <div class="columns m-t-50">
            <div class="column is-10 is-offset-1">
                <div class="card">
                    <div class="card-content">
                        <p class="subtitle"><b>Nom de la Permission: </b>{{$permission->display_name}} </p>
                        <p class="subtitle"><b>Slug: </b>{{$permission->name}} </p>
                        <p class="subtitle"><b>Description: </b>{{$permission->description}} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection