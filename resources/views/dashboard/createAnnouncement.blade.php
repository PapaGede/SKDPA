@extends('layout.createAnnouncement')
@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <hr>
        <form class="" method="POST" action="{{url('announcement')}}" enctype="multipart/form-data">
            @csrf

            @if(session()->has('success'))
                <div style="text-align: center;color:green">
                    {{session()->get('success')}}
            @endif

            @if(session()->has('failure'))
                <div style="text-align: center;color:red">
                    {{session()->get('failure')}}
                </div>
            @endif

            <div class="">
                <label for="title">Title:</label>
                <input class="form-control" required name="title" type="text">
            </div>

            <div class="">
                <label for="message">Messages:</label>
                <textarea class="form-control" name="message" rows="10" cols="50"></textarea>
            </div>
            <br/>
            <div >
                <input class="form-control btn btn-primary btn-block btn-h1-spacing" type="submit" name="annoumcement">
            </div>
        </form>
    </div>
</div>
@endsection
