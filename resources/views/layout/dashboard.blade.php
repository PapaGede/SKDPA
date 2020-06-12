
<!DOCTYPE html>
<html lang="en">
    @include('partials._dashHeader')
    <body class="sb-nav-fixed">
        @include('partials._dashNav')
        @section('crumb','Dashboard')
        @include('partials._dashSidebar')

        @include('partials._dashScripts')
    </body>
</html>
