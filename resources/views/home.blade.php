@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>You are logged in!</p>
    <div>
        <table id="potter_characters" class="table table-bordered table-hover dataTable" role="grid"
               aria-describedby="example2_info">
            <thead>
            <tr>
                <th>Name</th>
                <th>Role</th>
                <th>House</th>
                <th>School</th>
                <th>Blood Status</th>
                <th>Species</th>
            </tr>
            </thead>
            <tbody>
            @if($characters)
                @foreach($characters as $character)
                    <tr>
                        <td>{{$character->name ?? 'Not set'}}</td>
                        <td>{{$character->role ?? 'Not set'}}</td>
                        <td>{{$character->house ?? 'Not set'}}</td>
                        <td>{{$character->school ?? 'Not set'}}</td>
                        <td>{{$character->bloodStatus ?? 'Not set'}}</td>
                        <td>{{$character->species ?? 'Not set'}}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

@stop
@section('js')
    <script>
        $(document).ready(function () {
            $('#potter_characters').dataTable({
                "stateSave": true,
                "pagingType": "simple_numbers",
                "pageLength": 50
            } );
        });
    </script>
@stop