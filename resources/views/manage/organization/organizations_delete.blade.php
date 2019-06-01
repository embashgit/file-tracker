@extends('layouts.manage')

@section('content')
	
	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading">Delete Organization</div>
	                <div class="panel-body">

						{!! Form::model($organization, ['method'=> 'delete', 'class'=>'form-horizontal form-label-left','route' => ['histories.update', $organization->id]])!!}
					    	<div class="form-group">

								<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

									{!! Form::submit("Delete", ['class'=>'btn btn-success'])!!}

							    </div>

							</div>

					    {!! Form::close()!!}
					</div>
	            </div>
	        </div>
	    </div>
	</div>

@stop