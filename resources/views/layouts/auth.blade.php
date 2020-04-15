<!DOCTYPE html>
<html lang="en">

    @include('layouts.common.head')
    <body>
        <!-- Preloader -->
        <div class="preloader">
            <div class="cssload-speeding-wheel"></div>
        </div>

        @yield('content')

        <!-- jQuery -->
        <script src="{{ asset('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- Menu Plugin JavaScript -->
        <script src="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>

        <!--slimscroll JavaScript -->
        <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
        <!--Wave Effects -->
        <script src="{{ asset('js/waves.js') }}"></script>
        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('js/custom.min.js') }}"></script>
        <!--Style Switcher -->
        <script src="{{ asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
    </body>
</html>
