<!DOCTYPE html>
<html lang="en">
    @section('page','| Rooms')
    @include('partials._dashHeader')
    <body class="sb-nav-fixed">
        @section('search','Search_Room')
        @include('partials._studNav')

        @section('name','Rooms')
        @section('crumb','All room information')
        @include('partials._dashSidebar')

        @include('partials._dashScripts')
    </body>
</html>
