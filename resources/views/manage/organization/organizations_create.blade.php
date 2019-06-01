@extends('layouts.manage')

@section('content')

	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading">Create a new Organization</div>
		                <div class="panel-body">
							
							<h1></h1>

							<hr>

							{!! Form::open(['route'=>'organizations.store', 'class'=>'form-horizontal form-label-left']) !!}

								@include('manage.organization.partials.forms', ['submit'=>'Create Organization'])

							{!! Form::close() !!}
						</div>
	            </div>
	        </div>
	    </div>
	</div>
@stop