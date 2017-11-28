<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Licoreria | @yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.0/css/ionicons.min.css" integrity="sha256-3iu9jgsy9TpTwXKb7bNQzqWekRX7pPK+2OLj3R922fo=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/AdminLTE.min.css" integrity="sha256-sZVMQjkm0Ho60NDzV4Ot0OTBAK7UcaqkQOxLkTT93kQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/skins/_all-skins.min.css" integrity="sha256-U2eKBb7w142J6PSkrsgX1d3UM57TgiErTiT9gD1X8iA=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.3/css/rowReorder.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.3/css/select.bootstrap.min.css">
    
    @yield('css')
  </head>
  <body class="skin-purple sidebar-mini" style="height: auto; min-height: 100%;" >
    <div class="wrapper" id="frontPanel">
      @include('layout.recursos.header.index')
      @include('layout.recursos.left_menu.index')
      <div class="content-wrapper">
        @include('layout.recursos.flash_message')
          <section class="content-header">
            <h1>Front Panel, <small>Hola Alan Cornejo</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-fw fa-calendar"></i> textDateServer &nbsp; <i class="fa fa-fw fa-clock-o"></i> hourServer </li>
              <li><a href="/"><i class="fa fa-dashboard"></i>Inicio</a></li>
              <li class="active" id='urlsistema'></li>
            </ol>
          </section>
          <section class="content">
            @yield('content')
          </section>
      </div>
      @include('layout.recursos.footer')
      @include('layout.recursos.right_colum')
      <div class="control-sidebar-bg"></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/js/adminlte.min.js" integrity="sha256-M/+/xbAPBtc0W7JWnReOYF+oPZq4OiOUrlP9qbv7w64=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.2.3/js/dataTables.rowReorder.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.3/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.10.16/sorting/absolute.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tinysoap@1.0.2/tinysoap-browser-min.min.js"></script>
    
    <script src="{{ URL::asset('js/app.js') }}"></script>
    @yield('scripts')
  </body>
</html>
