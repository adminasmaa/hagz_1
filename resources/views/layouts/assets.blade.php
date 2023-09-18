
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{app()->isLocale('ar')? 'rtl' : 'ltr'}}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{MAINASSETS}}/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{MAINASSETS}}/images/favicon.png" type="image/x-icon">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{MAINASSETS}}/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{MAINASSETS}}/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{MAINASSETS}}/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{MAINASSETS}}/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{MAINASSETS}}/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{MAINASSETS}}/css/vendors/bootstrap.css">
    <!-- App css-->
    @if(app()->isLocale('ar'))
    <link href="{{MAINASSETS}}/css/style.css" rel="stylesheet" />
    @else
    <link href="{{MAINASSETS}}/css/style_en.css" rel="stylesheet" />
    @endif
    <link id="color" rel="stylesheet" href="{{MAINASSETS}}/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{MAINASSETS}}/css/responsive.css">
  </head>
{{--  @foreach (Config::get('locale') as $lang => $language)--}}
{{--      @if ($lang != App::getLocale())--}}
{{--      <!--<span class="hidden-sm hidden-xs"><a style="font-size: 14px;font-weight: ;color:#fff; " href="{{ route('lang.switch', $lang) }}">{{$language}}</a></span>-->--}}
{{--      @endif--}}
{{--      @endforeach--}}
  <body>
    <!-- login page start-->
    @yield('content')
      <!-- latest jquery-->
      <script src="{{MAINASSETS}}/js/jquery-3.5.1.min.js"></script>
      <!-- Bootstrap js-->
      <script src="{{MAINASSETS}}/js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="{{MAINASSETS}}/js/icons/feather-icon/feather.min.js"></script>
      <script src="{{MAINASSETS}}/js/icons/feather-icon/feather-icon.js"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="{{MAINASSETS}}/js/config.js"></script>
      <!-- Plugins JS start-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="{{MAINASSETS}}/js/script.js"></script>
      <!-- login js-->
      <!-- Plugin used-->
    </div>
  </body>
</html>
