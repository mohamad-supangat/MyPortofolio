<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <meta name='license' content='Supangat'>
        <meta name='framework' content='Supangat'>
        <meta name='geo.country' content='id'/>
        <meta name='author' content='Mohamad Supangat'>
        <meta name='robots' content='index,nofollow'>
        <title>@yield('title') |  {{ config('app.name') }}</title>


        @section('css')
            <link rel="stylesheet" href="{{ asset('assets/plugin/bootstrap/css/bootstrap.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/plugin/sp/custom.css') }}">
        @show
        <meta name="csrf-token" content="{!! csrf_token() !!}">

        @stack('css')

    </head>
    @section('body')
    <body>
        @yield('header')
        <main role="main">

            @yield('content')
                <!-- FOOTER -->



        </main>
        @yield('footer')
        <div class="text-center p-5">
            <h5 class="text-muted">
                <i>
                    supangat &copy; 2019
                </i>
            </h5>
        </div>
    </body>
    @show
</html>
@section('js')
<script src="{{ asset('assets/plugin/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugin/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugin/sp/custom.js') }}"></script>    
<script type="text/javascript">
    $("[type='text']").attr('autocomplete', 'off');
</script>
@show
