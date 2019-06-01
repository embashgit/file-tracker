@extends('layouts.manage')

@section('content')
    <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>display_name</th>
            <th>description<th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Name</th>
            <th>display_name</th>
            <th>description<th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
        <tr>
            <td>{{$organization->name}}</td>
            <td>{{$organization->display_name}}</td>
            <td>{{$organization->description}}</td>
            <td>
                <a href="{{ route('organizations.edit', ['id' => $organizations->id]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                <a href="{{ route('organizations.show', ['id' => $organizations->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
            </td>
        </tr>
    </tbody>
</table>
@stop

