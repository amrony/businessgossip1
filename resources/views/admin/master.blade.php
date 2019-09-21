<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/')  }}/admin/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    @yield('css')





{{--Ckeditor--}}

{{--    <script src="{{ asset('/') }}/admin/ckeditor/ckeditor.js"></script>--}}
{{--    <script src="{{ asset('/') }}/admin/ckeditor/samples/js/sample.js"></script>--}}
{{--    <link rel="stylesheet" href="{{ asset('/') }}/admin/ckeditor/samples/css/samples.css">--}}
{{--    <link rel="stylesheet" href="{{ asset('/') }}/admin/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">--}}


{{--    <script type="text/javascript" src="<your installation path>/tinymce/tinymce.min.js"></script>--}}
{{--    <script type="text/javascript">--}}
{{--        tinymce.init({--}}
{{--            selector: "#mytextarea"--}}
{{--        });--}}
{{--    </script>--}}

</head>
<body class="app sidebar-mini rtl">
<!-- Navbar-->
<header class="app-header"><a class="app-header__logo" href="{{ route('home') }}">Admin</a>
    @include('admin.includes.header')
</header>
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    @include('admin.includes.menu')
</aside>
<main class="app-content">
    @yield('body')


</main>


{{--<script>--}}
{{--    initSample();--}}
{{--</script>--}}


<!-- Essential javascripts for application to work-->
<script src="{{ asset('/')  }}admin/js/jquery-3.2.1.min.js"></script>

<script src="{{ asset('/')  }}admin/js/popper.min.js"></script>
<script src="{{ asset('/')  }}admin/js/bootstrap.min.js"></script>
<script src="{{ asset('/')  }}admin/js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{ asset('/')  }}/admin/js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<script type="text/javascript" src="{{ asset('/')  }}/admin/js/plugins/chart.js"></script>

<script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
<script>
    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error('{{ $error }}', 'Error',{
        closeButton:true,
        progressBar:true
    });
    @endforeach
    @endif
</script>
@yield('js_attach')








</body>
</html>