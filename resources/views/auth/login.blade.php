@extends('layouts.app')

@section('content')

<div class="container">
    <div class="columns">
        <div class="column is-one-third is-offset-one-third">
            <!-- Debut Card  -->
            <div class="card m-t-100">
                <div class="card-content">
                    <h1 class="title">
                        Connexion
                    </h1>
                    <form action="{{route('login')}}" method="POST">
                        {{csrf_field()}}
                        <!-- Debut field email  -->
                        <div class="field">
                            <label for="email" class="label">E-mail</label>
                            <p class="control has-icons-left">
                                <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" placeholder="nom@exemple.com" value="{{old('email')}}">
                                <span class="icon is-small is-left">
                                    <i class="fa fa-envelope"></i>
                                </span>
                            </p>
                            @if($errors->has('email'))
                                  <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <!-- Fin field email  -->

                        <!-- Debut field password  -->
                        <div class="field">
                            <label for="password" class="label">Mot de passe</label>
                            <p class="control has-icons-left">
                                <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password" placeholder="mot de passe">
                                <span class="icon is-small is-left">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </p>
                             @if($errors->has('password'))
                                  <p class="help is-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                        <!-- Fin field password  -->

                        <!-- Checkbox remember me  -->
                        <div class="field">
                            <b-checkbox name="remember" class="m-t-20">Se souvenir de moi</b-checkbox>
                        </div>

                        <!-- Login button  -->
                        <button class="button is-primary is-outlined is-fullwidth m-t-20">Se connecter</button>
                    </form>
                </div>
            </div>
            <!-- Fin Card  -->

            <!-- forgott password  -->
            <h5 class="has-text-centered m-t-20"><a href="{{route('password.request')}}" class="is-muted">Mot de passe oublié ?</a></h5>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
     var app = new Vue({
     el: '#app',
     data:{

     }
 });
</script>
@endsection