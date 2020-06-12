<!DOCTYPE html>
<html lang="en">
    @section('page','| Announcement')
    @include('partials._dashHeader')
    <body class="sb-nav-fixed">
        @include('partials._studNav')

        @section('name','Announcement')
        @section('crumb','Announcements')

        @include('partials._dashSidebar')

        @include('partials._dashScripts')
    </body>
</html>
