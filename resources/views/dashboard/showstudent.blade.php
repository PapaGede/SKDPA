@extends('layout.student')


@section('content')

<div class="card mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Program Name</th>
                        <th>Reference Number</th>
                        <th>Room Number</th>
                        <th>E-mail</th>
                        <th>DOB</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Student Name</th>
                        <th>Program Name</th>
                        <th>Reference Number</th>
                        <th>Room Number</th>
                        <th>E-mail</th>
                        <th>DOB</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($all_student as $item)
                    <tr>


                        <td>{{$item['name']}}</td>
                        <td>{{$item['program_name']}}</td>
                        <td>{{$item['std_id']}}</td>
                        <td>{{$item['room_number']}}</td>
                        <td>{{$item['email']}}</td>
                        <td>{{$item['dob']}}</td>


                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
