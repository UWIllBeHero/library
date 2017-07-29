<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- styles -->
    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet">
    <link href='{{URL::asset('css/fullcalendar.min.css')}}' rel='stylesheet' />
    <link href='{{URL::asset('css/fullcalendar.print.min.css')}}' rel='stylesheet' media='print' />

    <script src='{{URL::asset('lib/moment.min.js')}}'></script>
    <script src='{{URL::asset('lib/jquery.min.js')}}'></script>
    <script src='{{URL::asset('lib/jquery-ui.min.js')}}'></script>
    <script src='{{URL::asset('js/fullcalendar.min.js')}}'></script>
    <script src='{{URL::asset('js/locale-all.js')}}'></script>



    <style>
        /* ... */
    </style>
</head>
<body>
    @include('admin_layouts.bodies.anniversary_show_body')
</body>
</html>