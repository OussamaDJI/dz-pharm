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
                        Récupération du mot de passe
                    </h1>
                    <form action="{{ route('password.email') }}" method="POST">
                        {{csrf_field()}}
                        <!-- Debut field email  -->
                        <div class="field m-t-40">
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

                      

                        <!-- Reset button  -->
                        <button class="button is-primary is-outlined is-fullwidth m-t-40">Envoyer lien de Récupération</button>
                    </form>
                </div>
            </div>
            <!-- Fin Card  -->
            <!-- already have logins  -->
            <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted"><i class="fa fa-caret-left m-r-10"></i> Retour à Connexion</a></h5>
        
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

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

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

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
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
