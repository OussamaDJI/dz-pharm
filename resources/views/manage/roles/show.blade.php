@extends('layouts.manage')
@section('content')

    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">{{$role->display_name}} <small><em>({{$role->name}})</em></small></h1>
                
                <p>{{$role->description}}</p>
            </div>
            <div class="column">
                <a href="{{route('roles.edit',$role->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-pencil m-r-10"></i>Modifier ce Role</a>
            </div>
        </div>

        <hr>

        <div class="columns">
            <div class="column">
                <div class="box">
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <h2 class="title">Permissions:</h2>
                                <ul>
                                    @foreach($role->permissions as $per)
                                        <li class="m-l-20">{{$per->display_name}} <em class="m-l-10">({{$per->description}})</em></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>

    </div>
@endsection