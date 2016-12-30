<!DOCTYPE html>
<html lang="en">

    @include('includes.head')

    <body>
        @include('includes.header-general')


        @include('auth.register')
        <!--Start Sign up-->
        <!-- wird über Button click im header (Sign up) aufgerufen -->

        @yield('content')

        @include('includes.footer')

        <script type="text/javascript" src="{{ asset('/js/general/modal.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/general/header-footer.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/general/signup.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/general/general-mainsection.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/employer/modal_add_change_delete.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/general/modal.js') }}"></script>

    </body>

</html>

