@extends('layouts.manage')
@section('content')

    <div class="flex-container">
        <div class="columns ">
            <div class="column">
                <h1 class="title">
                    Création d'un nouvel Utilisateur
                </h1>
            </div>
        </div>    
            

        <hr>
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                    <!-- Debut Card  -->
                    <div class="card">
                        <div class="card-content">
                            <h1 class="title">
                                Inscription
                            </h1>
                            <form action="{{route('users.store')}}" method="POST">
                                
                                {{csrf_field()}}
                    
                                <!-- Debut field email  -->
                                <div class="field">
                                    <label for="email" class="label">E-mail <i class="has-text-danger">(*)</i></label>
                                    <p class="control">
                                        <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" placeholder="nom@exemple.com" value="{{old('email')}}">
                                    </p>
                                    @if($errors->has('email'))
                                          <p class="help is-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                                <!-- Fin field email  -->
                    
                               <div class="columns">
                                   <div class="column">
                                        <!-- Debut field Nom / Last name  -->
                                        <div class="field">
                                            <label for="last_name" class="label">Nom <i class="has-text-danger">(*)</i></label>
                                            <p class="control">
                                                <input class="input {{$errors->has('last_name') ? 'is-danger' : ''}}" type="text" name="last_name" id="last_name" value="{{old('last_name')}}">
                                            </p>
                                            @if($errors->has('last_name'))
                                                <p class="help is-danger"{{ $errors->first('last_name') }}</p>
                                            @endif
                                        </div>
                                        <!-- Fin field Nom / Last name  -->
                                    </div>
                                   
                                   <div class="column">
                                       <!-- Debut field Prénom / First name  -->
                                       <div class="field">
                                           <label for="first_name" class="label">Prénom <i class="has-text-danger">(*)</i></label>
                                           <p class="control">
                                               <input class="input {{$errors->has('first_name') ? 'is-danger' : ''}}" type="text" name="first_name" id="first_name" value="{{old('first_name')}}">
                                           </p>
                                           @if($errors->has('first_name'))
                                                 <p class="help is-danger">{{ $errors->first('first_name') }}</p>
                                           @endif
                                       </div>
                                       <!-- Fin field Prénom / First name  -->
                                    </div>
                                </div>
                    
                                <!-- Debut field Companie  -->
                                <div class="field">
                                    <label for="compagnie" class="label">Compagnie <i class="has-text-danger">(*)</i></label>
                                    <p class="control">
                                        <input class="input {{$errors->has('compagnie') ? 'is-danger' : ''}}" type="text" name="compagnie" id="compagnie" value="{{old('compagnie')}}">
                                    </p>
                                    @if($errors->has('compagnie'))
                                          <p class="help is-danger">{{ $errors->first('compagnie') }}</p>
                                    @endif
                                </div>
                                <!-- Fin field Companie  -->
                    
                                <!-- Debut field adresse  -->
                                <div class="field">
                                    <label for="adresse" class="label">Adresse <i class="has-text-danger">(*)</i></label>
                                    <p class="control">
                                        <input class="input {{$errors->has('adresse') ? 'is-danger' : ''}}" type="text" name="adresse" id="adresse" value="{{old('adresse')}}">
                                    </p>
                                    @if($errors->has('adresse'))
                                          <p class="help is-danger">{{ $errors->first('adresse') }}</p>
                                    @endif
                                </div>
                                <!-- Fin field adresse  -->
                    
                                <div class="columns">
                                    <!-- Debut field wilaya  -->
                                    <div class="column">
                                        <div class="field">
                                            <label for="wilaya" class="label">Wilaya <i class="has-text-danger">(*)</i></label>
                                            <p class="control">
                                                <input class="input {{$errors->has('wilaya') ? 'is-danger' : ''}}" type="text" name="wilaya" id="wilaya" value="{{old('wilaya')}}">
                                            </p>
                                            @if($errors->has('wilaya'))
                                                  <p class="help is-danger">{{ $errors->first('wilaya') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Fin field wilaya  -->
                                                        
                                    <!-- Debut field commune  -->
                                    <div class="column">
                                        <div class="field">
                                            <label for="commune" class="label">Commune <i class="has-text-danger">(*)</i></label>
                                            <p class="control">
                                                <input class="input {{$errors->has('commune') ? 'is-danger' : ''}}" type="text" name="commune" id="commune" value="{{old('commune')}}">
                                            </p>
                                            @if($errors->has('commune'))
                                                  <p class="help is-danger">{{ $errors->first('commune') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Fin field commune  -->
                                </div>
                    
                                <!-- Debut field tel  -->
                                <div class="field">
                                    <label for="phone" class="label">Téléphone</label>
                                    <p class="control">
                                        <input class="input {{$errors->has('phone') ? 'is-danger' : ''}}" type="text" name="phone" id="phone" value="{{old('phone')}}">
                                    </p>
                                    @if($errors->has('phone'))
                                          <p class="help is-danger">{{ $errors->first('phone') }}</p>
                                    @endif
                                </div>
                                <!-- Fin field tel  -->
                    
                                <!-- Checkbox generate password  -->
                                <b-checkbox  name="auto_generate" v-model="auto_password" class="m-t-10 m-b-20 has-text-centered">Générer un Mot de passe Automatiquement</b-checkbox>

                                <div class="columns" v-if="!auto_password">
                                    <div class="column">
                                        <!-- Debut field password  -->
                                        <div class="field">
                                            <label for="password" class="label" >Mot de passe <i class="has-text-danger">(*)</i></label>
                                            <p class="control">
                                                <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password">
                                            </p>
                                             
                                        </div>
                                        <!-- Fin field password  -->
                                    </div>
                                    
                                    
                                    <div class="column" >
                                        <!-- Debut field confirm password  -->
                                        <div class="field">
                                            <label for="confirm-password" class="label">Confirmer mot de passe <i class="has-text-danger">(*)</i></label>
                                            <p class="control">
                                                <input class="input {{$errors->has('confirm-password') ? 'is-danger' : ''}}" type="password" name="confirm-password" id="confirm-password">
                                            </p>
                                             
                                        </div>
                                        <!-- Fin field confirm password  -->
                                    </div>
                                </div>
                    
                    
                                <!-- Register button  -->
                                <button class="button is-primary is-fullwidth m-t-40">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                    <!-- Fin Card  -->
                </div>
            </div>
          

    </div>
@endsection

@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                auto_password: false

            }
        })
</script>
@endsection