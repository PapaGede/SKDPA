@extends('layout.showAnnouncement')
@section('content')
<div class="col-md-2 offset-md-10">
    <a href="announcement"><button class="btn btn-primary">Create</button></a>
    <br/>
    <br/>
</div>

<div>
    @foreach ($all_announce as $item)
    <div class="jumbotron" style="padding:1em 1em">
        <div class="post">
            <div>
                <h3>{{$item['title']}}<p class="lead text-muted" style="display: inline;font-size:15px"><span style="font-weight: bold">--Porter {{$item['sender']}}</span>  Created at: {{$item['date']}} {{$item['time']}}</p></h3>
            </div>
        <p class="lead">{{$item['message']}}</p>
        </div>
    </div>

    @endforeach
</div>
@endsection
