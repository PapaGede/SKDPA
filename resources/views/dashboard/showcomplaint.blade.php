@extends('layout.showcomplaint')
@section('content')
@foreach ($all_complaint as $item)
@if ($item['header']=="Electricity Issues")
<div class="jumbotron" style="padding:2em 1em">
        <h6><img src="images/red.png" height="22px"> {{$item['header']}}</h6>
        <p class="lead">{{$item['message']}}</p>
        <p style="text-align: right">{{$item['time']}}</p>

</div>
@endif

@endforeach
@endsection
