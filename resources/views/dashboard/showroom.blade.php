@extends('layout.room')
@section('content')


<div class="card mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Room Number</th>
                        <th>Room Type</th>
                        <th>Floor</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Room Number</th>
                        <th>Room Type</th>
                        <th>Floor</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($all_room as $item)
                    <tr>


                        <td>{{$item['room_number']}}</td>
                        <td>{{$item['room_type']}}</td>
                        <td>{{$item['room_floor']}}</td>


                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
