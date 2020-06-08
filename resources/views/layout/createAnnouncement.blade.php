<!DOCTYPE html>
<html lang="en">
    @section('page','| Announcement')
    @include('partials._dashHeader')
    <body class="sb-nav-fixed">
        @section('search','Create an Announcement')
        @include('partials._studNav')

        @section('name','Announcement')
        @section('crumb','Create an Announcement')
        @include('partials._dashSidebar')

        @include('partials._dashScripts')
    </body>
</html>
