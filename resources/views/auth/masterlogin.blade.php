<!DOCTYPE html>
<html lang="pt-br">
    <head>

      <meta charset="utf-8">
      <meta name="description" content="Sistema de Gestão de Gastos v.1">
      <meta name="author" content="Alexandre">
      <meta name="keyword" content="Gestão, Gastos, Despesas, Controle">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>SGG - @yield('title')</title>

      @section('assetsCss')
          <!-- start: Css -->
          {!! Html::style('css/bootstrap.min.css') !!}

          <!-- plugins -->
          {!! Html::style('css/plugins/font-awesome.min.css') !!}
          {!! Html::style('css/plugins/simple-line-icons.css') !!}
          {!! Html::style('css/plugins/animate.min.css') !!}
          {!! Html::style('css/plugins/icheck/skins/flat/aero.css') !!}
          {!! Html::style('css/style.css') !!}
          <!-- end: Css -->

          {!! Html::style('img/logomi.png', ['rel' => 'shortcut icon']) !!}
          <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
              {!! Html::script('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') !!}
              {!! Html::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') !!}
              <![endif]-->
      @show
    </head>

    <body id="mimin" class="dashboard form-signin-wrapper">

      <div class="container">

      @section('form')

      @show

      </div>

      @section('assetsJs')
          <!-- end: Content -->
          <!-- start: Javascript -->
          {!! Html::script('js/jquery.min.js') !!}
          {!! Html::script('js/jquery.ui.min.js') !!}
          {!! Html::script('js/bootstrap.min.js') !!}

          {!! Html::script('js/plugins/moment.min.js') !!}
          {!! Html::script('js/plugins/icheck.min.js') !!}
          {!! Html::script('js/plugins/jquery.mask.min.js') !!}


          <!-- custom -->
          {!! Html::script('js/main.js') !!}
      @show
          <script type="text/javascript">
           $(document).ready(function(){
             $('input').iCheck({
              checkboxClass: 'icheckbox_flat-aero',
              radioClass: 'iradio_flat-aero'
            });

            $('.mask-phone_with_ddd').mask('(00) 0000-0000');

            });
         </script>
         <!-- end: Javascript -->

   </body>
   </html>