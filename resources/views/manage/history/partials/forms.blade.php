

<div class="form-group{{ $errors->has('item') ? ' has-error' : '' }}">
	
	{!! Form::label('item', 'item: ', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	
	<div class="col-md-6 col-sm-6 col-xs-12">
		
		{!! Form::select('item', $items, null, ['class'=>'form-control']) !!}
		
		@if ($errors->has('item'))
	    	<span class="help-block">{{ $errors->first('item') }}</span>
	    @endif

	</div>

</div>


<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
	
	{!! Form::label('status', 'status: ', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	
	<div class="col-md-6 col-sm-6 col-xs-12">
		
		{!! Form::select('status', ['dispatched' => 'dispatched', 'transit' => 'transit', 'delivered' => 'delivered', 'undelivered' => 'undelivered'], null, ['class'=>'form-control']) !!}
		
		@if ($errors->has('status'))
	    	<span class="help-block">{{ $errors->first('status') }}</span>
	    @endif

	</div>

</div>

<div class="form-group{{ $errors->has('from_location') ? ' has-error' : '' }}">
	
	{!! Form::label('from_location', 'from_location: ', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	
	<div class="col-md-6 col-sm-6 col-xs-12">
		
		{!! Form::select('from_location', $locations, null, ['class'=>'form-control']) !!}
		
		@if ($errors->has('from_location'))
	    	<span class="help-block">{{ $errors->first('from_location') }}</span>
	    @endif

	</div>

</div>

<div class="form-group{{ $errors->has('to_location') ? ' has-error' : '' }}">
	
	{!! Form::label('to_location', 'to_location: ', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	
	<div class="col-md-6 col-sm-6 col-xs-12">
		
		{!! Form::select('to_location', $locations, null, ['class'=>'form-control']) !!}
		
		@if ($errors->has('to_location'))
	    	<span class="help-block">{{ $errors->first('to_location') }}</span>
	    @endif

	</div>

</div>

<div class="form-group{{ $errors->has('dispatcher') ? ' has-error' : '' }}">
	
	{!! Form::label('dispatcher', 'dispatcher: ', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	
	<div class="col-md-6 col-sm-6 col-xs-12">
		
		{!! Form::select('dispatcher', $users, null, ['class'=>'form-control']) !!}
		
		@if ($errors->has('dispatcher'))
	    	<span class="help-block">{{ $errors->first('dispatcher') }}</span>
	    @endif

	</div>

</div>

<div class="form-group{{ $errors->has('reciever') ? ' has-error' : '' }}">
	
	{!! Form::label('reciever', 'reciever: ', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	
	<div class="col-md-6 col-sm-6 col-xs-12">
		
		{!! Form::select('reciever', $users, null, ['class'=>'form-control']) !!}
		
		@if ($errors->has('reciever'))
	    	<span class="help-block">{{ $errors->first('reciever') }}</span>
	    @endif

	</div>

</div>

<div class="form-group">

	<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

		{!! Form::submit($submit, ['class'=>'btn btn-success'])!!}

    </div>

</div>

                            
