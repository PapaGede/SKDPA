<!DOCTYPE html>
<html lang="en">
    @section('page','| Student')
    @include('partials._dashHeader')
    <body class="sb-nav-fixed">
        @section('search','Search_Student')
        @include('partials._studNav')

        @section('name','Students')
        @section('crumb','All students information')
        @include('partials._dashSidebar')

        @include('partials._dashScripts')
    </body>
</html>
