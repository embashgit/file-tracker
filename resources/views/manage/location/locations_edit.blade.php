@extends('layouts.manage')

@section('content')
	
	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading">Edit 
	                location</div>
		                <div class="panel-body">

							{!! Form::model($location, ['method'=> 'PATCH', 'class'=>'form-horizontal form-label-left','route' => ['locations.update', $location->id]]) !!}

								@include('manage.location.partials.forms', ['submit'=>'Update'])

							{!! Form::close() !!}
						</div>
	            </div>
	        </div>
	    </div>
	</div>
@stop
