<!DOCTYPE html>
<html lang="en">
    @section('page','| Complaints')
    @include('partials._dashHeader')
    <body class="sb-nav-fixed">
        @include('partials._studNav')

        @section('name','Complaints')
        @section('crumb','All complaints from the students')
        @include('partials._dashSidebar')

        @include('partials._dashScripts')
    </body>
</html>
