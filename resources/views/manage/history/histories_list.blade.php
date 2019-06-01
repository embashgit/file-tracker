@extends('layouts.manage')

@section('content')
    <div class="container">
        <div class="row">
        	<table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Item Name</th>
                        <th>Source</th>
                        <th>Destination</th>
                        <th>Dispatcher</th>
                        <th>Receiver</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <tr>
                        <th>Item Name</th>
                        <th>Source</th>
                        <th>Destination</th>
                        <th>Dispatcher</th>
                        <th>Receiver</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </tr>
                </tfoot>
                <tbody>
                    @if (count($histories))
                    @foreach($histories as $history)
                    <tr>
                        <td>{{$history->item->name}}</td>
                        <td>{{$history->location_to->name}}</td>
                        <td>{{$history->location_from->name}}</td>
                        <td>{{$history->dispatcher->name}}</td>
                        <td>{{$history->reciever->name}}</td>
                        <td>{{$history->status}}</td>
                        <td>
                            <a href="{{ route('histories.edit', ['id' => $history->id]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                            <a href="{{ route('histories.show', ['id' => $history->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            {!! $histories->render() !!}
        </div>
    </div>
@stop

