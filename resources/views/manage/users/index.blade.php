@extends('layouts.manage')
@section('content')

    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Gestion des Utilisateurs</h1>
            </div>
            <div class="column">
                <a href="{{route('users.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i>Créer un utilisateur</a>
            </div>
        </div>

        <hr>

       
            <div class="card">
                <div class="card-content">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Prénom</th>
                                <th>Nom</th>
                                <th>E-mail</th>
                                <th>Date création</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->first_name}}</td>
                                    <td>{{$user->last_name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at->toFormattedDateString()}}</td>
                                    <td class="has-text-right"> 
                                        <a class="button is-outlined" href="{{route('users.edit', $user->id)}}"><i class="fa fa-pencil m-r-10"></i>Modifier</a>                       
                                        <a class="button is-outlined" href="{{route('users.show', $user->id)}}"><i class="fa fa-eye m-r-10"></i>Consulter</a>
                                    </td>                        
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        {{$users->links()}}
    </div>

@endsection