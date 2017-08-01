@extends('layouts.manage')
@section('content')

    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Gestion des Permissions</h1>
            </div>
            <div class="column">
                <a href="{{route('permissions.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-plus m-r-10"></i>Créer une Permission</a>
            </div>
        </div>

        <hr>

       
            <div class="card">
                <div class="card-content">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Slug</th>
                                <th>Permission</th>
                                <th>Description</th>
                                <th> </th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($permissions as $permission)
                                <tr>
                                    <td>{{$permission->id}}</td>
                                    <td>{{$permission->name}}</td>
                                    <td>{{$permission->display_name}}</td>
                                    <td>{{$permission->description}}</td>
                                    <td><a class="button is-outlined" href="{{route('permissions.edit', $permission->id)}}"><i class="fa fa-pencil m-r-10"></i>Modifier</a></td>                        
                                    <td><a class="button is-outlined" href="{{route('permissions.show', $permission->id)}}"><i class="fa fa-eye m-r-10"></i>Consulter</a></td>                        
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        {{$permissions->links()}}
    </div>

@endsection