@extends('layout.showAnnouncement')
@section('content')
<div class="col-md-2 offset-md-10">
    <a href="announcement"><button class="btn btn-primary btn-block">Create</button></a>

</div>
<br/>

<div>
    @foreach ($all_announce as $item)
    <div class="jumbotron" style="padding:2em 1em">
        <div class="post">
            <div>
                <h4><img src="images/announcement.png" height="20px"/> {{$item['title']}}<p class="lead text-muted" style="display: inline;font-size:15px"><span style="font-weight: bold">--Porter {{$item['sender']}}</span></p></h4>
            </div>
        <p class="lead">{{$item['message']}}</p>
        <p style="text-align: right"> Created at: {{$item['date']}} {{$item['time']}}</p>
        </div>
    </div>

    @endforeach
</div>
@endsection
