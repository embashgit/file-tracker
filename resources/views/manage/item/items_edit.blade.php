@extends('layouts.manage')

@section('content')
	
	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading">Edit Item</div>
		                <div class="panel-body">

							{!! Form::model($item, ['method'=> 'PATCH', 'class'=>'form-horizontal form-label-left','route' => ['items.update', $item->id]]) !!}

								@include('manage.item.partials.forms', ['submit'=>'Update'])

							{!! Form::close() !!}
						</div>
	            </div>
	        </div>
	    </div>
	</div>
@stop

