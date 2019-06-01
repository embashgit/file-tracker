@extends('layouts.manage')

@section('content')
<div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Manage Organization<a href="{{route('organizations.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Create New </a></h2>
                    <div class="clearfix"></div>
                </div>
                    <div class="x_content">
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
                            @if (count($organizations))
                            @foreach($organizations as $organization)
                            <tr>
                                <td>{{$organization->name}}</td>
                                <td>{{$organization->display_name}}</td>
                                <td>{{$organization->description}}</td>
                                <td>
                                    <a href="{{ route('organizations.edit', ['id' => $organization->id]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                                    <a href="{{ route('organizations.show', ['id' => $organization->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                        
                    </table>
                    {!! $organizations->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
	
@stop

