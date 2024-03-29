@extends('layouts.manage')

@section('content')
	<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Location</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Name</th>
            <th>Location</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
        @if (count($items))
        @foreach($items as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->location->name}}</td>
            <td>
                <a href="{{ route('items.edit', ['id' => $item->id]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                <a href="{{ route('items.show', ['id' => $item->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>

</table>
{!! $items->render() !!}
@stop
