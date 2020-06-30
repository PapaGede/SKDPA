@extends('layout.showcomplaint')
@section('content')
@foreach ($all_complaint as $item)
@if ($item['header']=="Electricity Issues")
<div class="jumbotron" style="padding:1em 1em">
        <h6><img src="images/red.png" height="22px"> {{$item['header']}} {{$item['sender']}}</h6>
        <p class="lead">{{$item['message']}}</p>
        <p style="text-align: right">{{$item['time']}}</p>

</div>
@endif

@if ($item['header']=="Water Issues")
<div class="jumbotron" style="padding:1em 1em">
        <h6><img src="images/water.png" height="22px"> {{$item['header']}} by {{$item['sender']}}</h6>
        <p class="lead">{{$item['message']}}</p>
        <p style="text-align: right">{{$item['time']}}</p>

</div>
@endif

@if ($item['header']=="Furniture Issues")
<div class="jumbotron" style="padding:1em 1em">
        <h6><img src="images/furniture.png" height="22px"> {{$item['header']}} by {{$item['sender']}}</h6>
        <p class="lead">{{$item['message']}}</p>
        <p style="text-align: right">{{$item['time']}}</p>

</div>
@endif

@if ($item['header']=="Plumbing Issues")
<div class="jumbotron" style="padding:1em 1em">
        <h6><img src="images/furniture.png" height="22px"> {{$item['header']}} by {{$item['sender']}}</h6>
        <p class="lead">{{$item['message']}}</p>
        <p style="text-align: right">{{$item['time']}}</p>

</div>
@endif

@endforeach
@endsection
