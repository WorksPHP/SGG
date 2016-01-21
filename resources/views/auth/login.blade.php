@extends('auth.masterlogin')

@section('title', 'Login')

@section('assetsCss')
    @parent

@endsection

@section('form')

    @unless($errors->isEmpty())
        <ul>
            @foreach($errors->getMessages() as $error)
                <li>{{ $error[0] }}</li>
            @endforeach
        </ul>
    @endunless

    {!! Form::open(['route' => 'login', 'method' => 'post', 'class' => 'form-signin']) !!}

              <div class="panel periodic-login">
                  <span class="atomic-number">&reg;</span>
                  <div class="panel-body text-center">
                      <h1 class="atomic-symbol">SGG</h1>
                      <p class="atomic-mass">2016</p>
                      <p class="element-name">PUC MINAS</p>

                      <i class="icons icon-arrow-down"></i>
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" name="email" value="{{ old('email') }}" required>
                        <span class="bar"></span>
                        <label>Username - e-mail</label>
                      </div>
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="password" name="password" class="form-text" required>
                        <span class="bar"></span>
                        <label>Password</label>
                      </div>
                      <label class="pull-left">
                      <input type="checkbox" class="icheck pull-left" name="remember"/> Remember me
                      </label>
                      <input type="submit" class="btn col-md-12" value="SignIn"/>
                  </div>
                    <div class="text-center" style="padding:5px;">
                        <a href="forgotpass.html">Recuperar Senha </a>
                        {!! Html::link('/auth/register', '| Registrar') !!}
                    </div>
              </div>
            {!! Form::close() !!}
@endsection

@section('assetsJs')
   @parent
@endsection