@extends('layouts.manage')
@section('content')

    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Gestion des Roles</h1>
            </div>
            <div class="column">
                <a href="{{route('roles.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-plus m-r-10"></i>Créer un nouveau Role</a>
            </div>
        </div>

        <hr>

        <div class="columns is-multiline">
            @foreach($roles as $role)
                <div class="column is-one-quarter">
                    <div class="box">
                        <article class="media">
                            <div class="content">
                                <h3 class="title">{{$role->display_name}}</h3>
                                <h4 class="subtitle"><em>{{$role->name}}</em></h4>
                                <p>{{$role->description}}</p>
                                <div class="columns is-mobile">
                                    <div class="column is-one-half">
                                        <a href="{{route('roles.edit',$role->id)}}" class="button is-outlined is-fullwidth"><i class="fa fa-pencil m-r-10"></i>Modifier</a>
                                    </div>
                                    <div class="column is-one-half">
                                        <a href="{{route('roles.show',$role->id)}}" class="button is-outlined is-fullwidth"><i class="fa fa-eye m-r-10"></i>Consulter</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection