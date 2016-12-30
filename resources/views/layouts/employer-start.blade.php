<!DOCTYPE html>
<html lang="en">

    @include('includes.head')

    <body>
        @include('includes.header-employer')

        @yield('content')

        @include('includes.footer')

        <script type="text/javascript" src="{{ asset('/js/general/header-footer.js') }}"></script>

    </body>

</html>