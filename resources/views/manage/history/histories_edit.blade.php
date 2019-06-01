@extends('layouts.manage')

@section('content')
	
	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading">Edit History</div>
		                <div class="panel-body">

							{!! Form::model($history, ['method'=> 'PATCH', 'class'=>'form-horizontal form-label-left','route' => ['histories.update', $history->id]]) !!}

								@include('manage.history.partials.forms', ['submit'=>'Update'])

							{!! Form::close() !!}
						</div>
	            </div>
	        </div>
	    </div>
	</div>
@stop
