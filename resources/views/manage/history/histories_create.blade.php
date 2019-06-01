@extends('layouts.manage')

@section('content')

	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading">Create a new History</div>
		                <div class="panel-body">
							
							<h1></h1>

							<hr>

							{!! Form::open(['route'=>'histories.store', 'class'=>'form-horizontal form-label-left']) !!}

								@include('manage.history.partials.forms', ['submit'=>'Create History'])

							{!! Form::close() !!}
						</div>
	            </div>
	        </div>
	    </div>
	</div>
@stop