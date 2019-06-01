@extends('layouts.manage')

@section('content')
	<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>location</th>
            <th>description<th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Name</th>
            <th>location</th>
            <th>description<th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
        <tr>
            <td>{{$location->name}}</td>
            <td>{{$location->organization->display_name}}</td>
            <td>{{$location->description}}</td>
            <td>
                <a href="{{ route('locations.edit', ['id' => $location->id]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                <a href="{{ route('locations.show', ['id' => $location->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
            </td>
        </tr>
    </tbody>
</table>
@stop

