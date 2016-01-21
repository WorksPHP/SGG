@extends('auth.masterlogin')

@section('title', 'Regitre-se')

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
        {!! Form::open(['route' => 'postregister', 'method' => 'post', 'class' => 'form-signin cmxform', 'novalidate' => 'novalidate', 'id' => 'form_register']) !!}

          <div class="panel periodic-login">
              <span class="atomic-number">&reg;</span>
                <div class="panel-body text-center">
                    <h1 class="atomic-symbol">SGG</h1>
                    <p class="atomic-mass">2016</p>
                    <p class="element-name">PUC MINAS</p>

                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" id="validate_name" class="form-text" name="name" value="{{ old('name') }}" required>
                    <span class="bar"></span>
                    <label>Nome</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" id="validate_email" class="form-text" name="email" value="{{ old('email') }}" required>
                    <span class="bar"></span>
                    <label>Email</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="text" id="validate_phone" class="form-text mask-phone_with_ddd" name="phone" value="{{ old('phone') }}" required>
                      <span class="bar"></span>
                      <label>Telefone</label>
                    </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" id="validate_password" class="form-text" name="password" required>
                    <span class="bar"></span>
                    <label>Senha</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                      <input type="password" id="validate_confirm_password" class="form-text" name="password_confirmation" required>
                      <span class="bar"></span>
                      <label>Confirma Senha</label>
                    </div>

                  <div class="form-group form-animate-checkbox">
                     <input type="checkbox" id="validate_agree" class="icheck pull-left" name="agree"/> &nbsp Aceito os termos de politica...
                  </div>
                  <input type="submit" class="btn col-md-12" value="SignUp"/>
              </div>
                <div class="text-center" style="padding:5px;">
                    {!! Html::link('/login', 'Já possui uma conta?') !!}
                </div>
          </div>
        {!! Form::close() !!}


@endsection

@section('assetsJs')
   @parent
{!! Html::script('js/plugins/jquery.validate.min.js') !!}

<script type="text/javascript">
$(document).ready(function() {

    $("#form_register").validate({
          errorElement: "em",
          errorPlacement: function(error, element) {
            $(element.parent("div").addClass("form-animate-error"));
            error.appendTo(element.parent("div"));
          },
          success: function(label) {
            $(label.parent("div").removeClass("form-animate-error"));
          },
           submitHandler: function( form ){
               //$('form input[type=submit]').attr('disabled', 'disabled');
            var dados = $(form).serialize();
            var action = dados.attr("action");
            alert(action);

            

            return false;
          },
          rules: {
            name: {
              required: true,
              minlength: 5
            },
            password: {
              required: true,
              minlength: 6
            },
            password_confirmation: {
              required: true,
              minlength: 6,
              equalTo: "#validate_password"
            },
            email: {
              required: true,
              email: true
            },
            phone: {
                required:true,
                minlength:10
            }
          },
          messages: {
            name: {
              required: "Favor informar o Nome",
              minlength: "O nome deve conter no minimo 5 caracteres"
            },
            password: {
              required: "Favor informar a Senha",
              minlength: "A senha deve conter no mínimo 6 caracteres"
            },
            password_confirmation: {
              required: "Favor informar a Confirmação da senha",
              minlength: "A confirmação deve ter no minimo 6 caracteres",
              equalTo: "A confirmação deve ser igual a senha"
            },
            email: "Favor inserir um e-mail válido",
            phone: {
                required: "Favor informar o Telefone",
                minlength: "O telefone deve conter no mínimo 10 caracteres"
            }
          }
      });
   });
</script>

@endsection