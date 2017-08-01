@extends('layouts.manage')
@section('content')

    <div class="flex-container">
        <div class="columns ">
            <div class="column">
                <h1 class="title">
                    Création d'une nouvelle Permission
                </h1>
            </div>
        </div> 

        <hr>

        <div class="columns">
            <div class="column is-10 is-offset-1">
                <div class="card">
                    <div class="card-content">
                        <form action="{{route('permissions.store')}}" method="POST">
                        {{csrf_field()}}

                        <div class="block">
                            <b-radio-group v-model="permissionType" name="permission_type">
                                <b-radio name="permission_type" value="simple">Permission Simple</b-radio>
                                <b-radio name="permission_type" value="crud">Permission CRUD</b-radio>
                            </b-radio-group>
                        </div>
                        <div class="field" v-if="permissionType == 'simple'">
                            <label for="name" class="label">Nom de la Permission</label>
                            <p class="control">
                                <input type="text" class="input" name="name" id="name">
                            </p>
                        </div>
                        <div class="field" v-if="permissionType == 'simple'">
                            <label for="slug" class="label">Slug</label>
                            <p class="control">
                                <input type="text" class="input" name="slug" id="slug">
                            </p>
                        </div>
                        <div class="field" v-if="permissionType == 'simple'">
                            <label for="description" class="label">Description</label>
                            <p class="control">
                                <input type="text" class="input" name="description" id="description" placeholder="Description de la Permission">
                            </p>
                        </div>

                        <div class="field" v-if="permissionType == 'crud'">
                            <label for="ressource" class="label">Ressource</label>
                            <p class="control">
                                <input v-model="ressource" type="text" class="input" name="ressource" id="ressource" palceholder="Nom de la ressource">
                            </p>
                        </div>   
                        <div class="columns m-t-20" v-if="permissionType == 'crud'" >
                            <div class="column is-2 m-t-10">
                                <b-checkbox-group v-model="crudSelected">
                                    <div class="field">
                                        <b-checkbox custom-value="create" name="checkbox1">Création</b-checkbox>
                                    </div>
                                    <div class="field">
                                        <b-checkbox custom-value="read" name="checkbox2">Lecture</b-checkbox>
                                    </div>
                                    <div class="field">
                                        <b-checkbox custom-value="update" name="checkbox3">Modification</b-checkbox>
                                    </div>
                                    <div class="field">
                                        <b-checkbox custom-value="delete" name="checkbox4">Suppression</b-checkbox>
                                    </div>
                                </b-checkbox-group>
                            </div>
                            <input type="hidden" name="crud_selected" :value="crudSelected">
                            <div class="column">
                                <table class="table">
                                    <thead>
                                        <th>Nom</th>
                                        <th>Slug</th>
                                        <th>Description</th>
                                    </thead>
                                    <tbody v-if="ressource.length >= 3">
                                        <tr v-for="item in crudSelected">
                                            <td v-text="crudName(item)"></td>
                                            <td v-text="crudSlug(item)"></td>
                                            <td v-text="crudDescription(item)"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> 

                        <button class="button is-primary m-t-20"><i class="fa fa-plus-circle m-r-10"></i>Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                permissionType: 'simple',
                ressource: '',
                crudSelected: ['create','read','update','delete']
            },
            methods: {
                crudName: function(item){
                    return item.substr(0,1).toUpperCase() + item.substr(1) + " " + app.ressource.substr(0,1).toUpperCase() + app.ressource.substr(1);
                },
                crudSlug: function(item){
                    return item.toLowerCase() + "-" + app.ressource.toLowerCase();
                },
                crudDescription: function(item){
                    return "Permet a l'utilisateur de "+ item.toUpperCase() + " un(e) " + app.ressource.substr(0,1).toUpperCase() + app.ressource.substr(1);
                }

            }
        });
    </script>
@endsection