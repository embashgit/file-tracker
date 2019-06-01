@extends('layouts.manage')

@section('content')
	
	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading">Edit Organization</div>
		                <div class="panel-body">

							{!! Form::model($organization, ['method'=> 'PATCH', 'class'=>'form-horizontal form-label-left','route' => ['organizations.update', $organization->id]]) !!}

								@include('manage.organization.partials.forms', ['submit'=>'Update'])

							{!! Form::close() !!}
						</div>
	            </div>
	        </div>
	    </div>
	</div>
@stop

