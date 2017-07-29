@extends('layouts.app')

@section('content')

@if (session('status'))
    <div class="notification is-success">
        {{ session('status') }}
    </div>
@endif

<div class="container">
    <div class="columns">
        <div class="column is-one-third is-offset-one-third">
            <!-- Debut Card  -->
            <div class="card m-t-100">
                <div class="card-content">
                    <h1 class="title">
                        Changer le mot de passe
                    </h1>
                    <form action="{{route('password.request')}}" method="POST">
                        {{csrf_field()}}
                        <!-- Debut field email  -->

                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="field">
                            <label for="email" class="label">E-mail</label>
                            <p class="control has-icons-left">
                                <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" placeholder="nom@exemple.com" value="{{old('email')}}">
                                <span class="icon is-small is-left">
                                    <i class="fa fa-envelope"></i>
                                </span>
                            </p>
                            @if($errors->has('email'))
                                  <p class="help is-danger">Le champ e-mail est obligatoire !</p>
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
                                  <p class="help is-danger">Le champs mot de passe est oblihatoire !</p>
                            @endif
                        </div>
                        <!-- Fin field password  -->

                        <!-- Debut field confirm-password  -->
                        <div class="field">
                            <label for="confirm-password" class="label">Confirmer Mot de passe</label>
                            <p class="control has-icons-left">
                                <input class="input {{$errors->has('confirm-password') ? 'is-danger' : ''}}" type="confirm-password" name="confirm-password" id="confirm-password" placeholder="Confirmer mot de passe">
                                <span class="icon is-small is-left">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </p>
                             @if($errors->has('confirm-password'))
                                  <p class="help is-danger">Le champs confirmer mot de passe est oblihatoire !</p>
                            @endif
                        </div>
                        <!-- Fin field confirm-password  -->


                        <!-- Reset button  -->
                        <button class="button is-primary is-outlined is-fullwidth m-t-20">Changer mot de passe</button>
                    </form>
                </div>
            </div>
            <!-- Fin Card  -->

            <!-- forgott password  -->
            <h5 class="has-text-centered m-t-20"><a href="{{route('password.request')}}" class="is-muted">Mot de passe oublié ?</a></h5>
        </div>
    </div>
</div>



<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

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

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
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
