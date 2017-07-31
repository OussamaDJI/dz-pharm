@extends('layouts.app')

@section('content')



<div class="container">
    <div class="columns">
        <div class="column is-half is-offset-one-quarter">
            <!-- Debut Card  -->
            <div class="card m-t-50">
                <div class="card-content">
                    <h1 class="title">
                        Inscription
                    </h1>
                    <form action="{{route('register')}}" method="POST">
                        
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

                        <!-- Debut field wilaya  -->
                        <div class="field">
                            <label for="wilaya" class="label">Wilaya <i class="has-text-danger">(*)</i></label>
                            <p class="control">
                                <input class="input {{$errors->has('wilaya') ? 'is-danger' : ''}}" type="text" name="wilaya" id="wilaya" value="{{old('wilaya')}}">
                            </p>
                            @if($errors->has('wilaya'))
                                  <p class="help is-danger">{{ $errors->first('wilaya') }}</p>
                            @endif
                        </div>
                        <!-- Fin field wilaya  -->

                        <!-- Debut field commune  -->
                        <div class="field">
                            <label for="commune" class="label">Commune <i class="has-text-danger">(*)</i></label>
                            <p class="control">
                                <input class="input {{$errors->has('commune') ? 'is-danger' : ''}}" type="text" name="commune" id="commune" value="{{old('commune')}}">
                            </p>
                            @if($errors->has('commune'))
                                  <p class="help is-danger">{{ $errors->first('commune') }}</p>
                            @endif
                        </div>
                        <!-- Fin field commune  -->

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

                        <div class="columns">
                            <div class="column">
                                <!-- Debut field password  -->
                                <div class="field">
                                    <label for="password" class="label">Mot de passe <i class="has-text-danger">(*)</i></label>
                                    <p class="control">
                                        <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password">
                                    </p>
                                     @if($errors->has('password'))
                                          <p class="help is-danger">{{ $errors->first('password') }}</p>
                                    @endif
                                </div>
                                <!-- Fin field password  -->
                            </div>
                            
                            
                            <div class="column">
                                <!-- Debut field confirm password  -->
                                <div class="field">
                                    <label for="confirm-password" class="label">Confirmer mot de passe <i class="has-text-danger">(*)</i></label>
                                    <p class="control">
                                        <input class="input {{$errors->has('confirm-password') ? 'is-danger' : ''}}" type="password" name="confirm-password" id="confirm-password">
                                    </p>
                                     @if($errors->has('confirm-password'))
                                          <p class="help is-danger">{{ $errors->first('confirm-password') }}</p>
                                    @endif
                                </div>
                                <!-- Fin field confirm password  -->
                            </div>
                        </div>

                        <!-- Checkbox remember me  -->
                        <b-checkbox name="remember" class="m-t-20 has-text-centered">J'ai lu et approuvé le <a href="#">Contrat d'Utilisation</a></b-checkbox>

                        <!-- Register button  -->
                        <button class="button is-primary is-outlined is-fullwidth m-t-40">Inscription</button>
                    </form>
                </div>
            </div>
            <!-- Fin Card  -->

            <!-- already have logins  -->
            <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted">déjà inscrit ?</a></h5>
        </div>
    </div>
</div>





<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
