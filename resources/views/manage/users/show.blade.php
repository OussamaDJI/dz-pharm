@extends('layouts.manage')
@section('content')

    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title"> Informations sur l'utilisateur </h1>
            </div>
            <div class="column">
                <a href="{{route('users.edit',$user->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-pencil m-r-10"></i>Modifier informations</a>
            </div>
        </div>
        <hr>
        <div class="columns m-t-50">
            <div class="column is-10 is-offset-1">
                <div class="card">
                    <div class="card-content">
                        <p class="subtitle"><b>Nom: </b>{{$user->last_name}} </p>
                        <p class="subtitle"><b>Prénom: </b>{{$user->first_name}} </p>
                        <p class="subtitle"><b>E-mail: </b>{{$user->email}} </p>
                        <p class="subtitle"><b>Compagnie: </b>{{$user->compagnie}} </p>
                        <p class="subtitle"><b>Wilaya: </b>{{$user->wilaya}} </p>
                        <p class="subtitle"><b>Commune: </b>{{$user->commune}} </p>
                        <p class="subtitle"><b>Tél: </b>{{$user->phone}} </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection