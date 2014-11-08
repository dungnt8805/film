@extends('shareiz/frontend/layouts/place')

@section('content')
@if($errors->has())
<div class="alert alert-danger alert-block">
    <button class="close" data-dismiss="alert" type="button">×</button>
    <h4>Error</h4>
    Please check the form below for errors
</div>
@endif
<div id="main" role="main">
    <div class="col-md-6 col-md-offset-3 col-xs-12 col-xs-offset-0 centered-page">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title big">Register</h1>
            </div>
            <div class="panel-body">
                <form class="form-vertical" action="" method="post">
                    <div class="mbottom">
                        <a class="facebookConnectButton" href="#">
                            <span class="facebookLoginButton big">
                                Signup with
                                <span class="notranslate">Facebook</span>
                            </span>
                        </a>
                    </div>
                    {{Form::token()}}
                    <div class="form-group <?= ($errors->first('username')) ? 'has-error' : ''; ?>">
                        <label class="control-label" for="username">Username</label>

                        <div class="controls">
                            <?= Form::text('username', "", array('class' => 'form-control input-lg', 'id' => 'username'), ['required']); ?>
                            {{ $errors->first('username', '<span class="control-label">:message</span>') }}
                        </div>
                    </div>
                    <div class="form-group <?= ($errors->first('email')) ? 'has-error' : ''; ?>">
                        <label class="control-label" for="email">Email</label>

                        <div class="controls">
                            <?= Form::email('email', "", array('class' => 'form-control input-lg', 'id' => 'email'), ['required']); ?>
                            {{ $errors->first('email', '<span class="control-label">:message</span>') }}
                        </div>
                    </div>
                    <div class="form-group <?= ($errors->first('password')) ? 'has-error' : ''; ?>">
                        <label class="control-label" for="password">Password</label>

                        <div class="controls">
                            <?= Form::password('password', array('class' => 'form-control input-lg', 'id' => 'password'), ['required']); ?>
                            {{ $errors->first('password', '<span class="control-label">:message</span>') }}
                        </div>
                    </div>
                    <div class="form-group <?= ($errors->first('confirm_password')) ? 'has-error' : ''; ?>">
                        <label class="control-label" for="confirm_password">Password</label>

                        <div class="controls">
                            <?= Form::password('confirm_password', array('class' => 'form-control input-lg', 'id' => 'confirm_password'), ['required']); ?>
                            {{ $errors->first('confirm_password', '<span class="control-label">:message</span>') }}
                        </div>
                    </div>
                    <div class="checkbox <?= ($errors->first('agree')) ? 'has-error' : ''; ?>">
                        <label>
                            <?= Form::checkbox('agree', '1', "", array('id' => 'agree')); ?> I agree to the <a
                                target="_blank" href="">Terms Of Service</a>
                        </label>
                    </div>
                    <div class="checkbox <?= ($errors->first('agree')) ? 'has-error' : ''; ?>">
                        {{ $errors->first('agree', '<span class="control-label">:message</span>') }}
                    </div>
                    <button class="btn btn-primary" type="submit">Signup</button>
                    <a class="btn btn btn-link pull-right" href="{{route('login')}}">Login</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop