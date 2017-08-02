@extends('layouts.manage')
@section('content')

    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Modification du Role {{$role->display_name}}</h1>
                
                <p>{{$role->description}}</p>
            </div>
        </div>

        <hr>


        <form  method="POST" action="{{route('roles.update',$role->id)}}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

            <div class="columns">
                <div class="column">
                    <div class="box">
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <h2 class="title">Détails sur le Role:</h2>
                                    <div class="field">
                                        <p class="control">
                                            <label for="display_name" class="label">Nom: </label>
                                            <input id="display_name" name="display_name" type="text" class="input" value="{{$role->display_name}}">
                                        </p>
                                    </div>
                                    <div class="field">
                                        <p class="control">
                                            <label for="name" class="label">Slug: </label>
                                            <input id="name" name="name" type="text" class="input" value="{{$role->name}}" disabled>
                                        </p>
                                    </div>
                                    <div class="field">
                                        <p class="control">
                                            <label for="description" class="label">Description: </label>
                                            <input id="description" name="description" type="text" class="input" value="{{$role->description}}">
                                        </p>
                                    </div>
                                    <input type="hidden" :value="permissionsSelected" name="permissions">
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <div class="box">
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <h2 class="title">Permissions:</h2>
                                    <ul>
                                        <b-checkbox-group v-model="permissionsSelected">
                                            @foreach($permissions as $per)
                                                <div class="field">
                                                    <b-checkbox :custom-value="{{$per->id}}">{{$per->display_name}} <em>({{$per->description}})</em></b-checkbox>
                                                </div>
                                            @endforeach
                                        </b-checkbox-group>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </div>
                    <button class="button is-primary m-t-20"><i class="fa fa-floppy-o m-r-10"></i>Enregistrer les Modifications</button>
                </div>
            </div>
        </form>

    </div>
@endsection

@section('scripts')
    <script>
        var app = new Vue({
            el: "#app",
            data: {
                permissionsSelected:{!!$role->permissions->pluck('id')!!}
            }
        });
    </script>
@endsection