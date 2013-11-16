@extends('backend/layouts/default')

{{-- Page title --}}
@section('title')
Create a New Asset  ::
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>
		Create a New Asset

		<div class="pull-right">
			<a href="{{ route('assets') }}" class="btn btn-small btn-inverse"><i class="icon-circle-arrow-left icon-white"></i> Back</a>
		</div>
	</h3>
</div>


<form class="form-horizontal" method="post" action="" autocomplete="off">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	<!-- Tabs Content -->
	<div class="tab-content">

		<div class="tab-pane active" id="tab-general">
			<!-- Asset Title -->
			<div class="control-group {{ $errors->has('name') ? 'error' : '' }}">
				<label class="control-label" for="name">Asset Name</label>
				<div class="controls">
					<input class="span6" type="text" name="name" id="name" value="{{ Input::old('name') }}" />
					{{ $errors->first('name', '<span class="help-inline">:message</span>') }}
				</div>
			</div>
			<!-- Asset Tag -->
			<div class="control-group {{ $errors->has('asset_tag') ? 'error' : '' }}">
				<label class="control-label" for="asset_tag">Asset Tag</label>
				<div class="controls">
					<input class="span4" type="text" name="asset_tag" id="asset_tag" value="{{ Input::old('asset_tag') }}" />
					{{ $errors->first('asset_tag', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Serial -->
			<div class="control-group {{ $errors->has('serial') ? 'error' : '' }}">
				<label class="control-label" for="serial">Serial</label>
				<div class="controls">
					<input class="span4" type="text" name="serial" id="serial" value="{{ Input::old('serial') }}" />
					{{ $errors->first('serial', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Order Number -->
			<div class="control-group {{ $errors->has('order_number') ? 'error' : '' }}">
				<label class="control-label" for="order_number">Order Number</label>
				<div class="controls">
					<input class="span4" type="text" name="order_number" id="order_number" value="{{ Input::old('order_number') }}" />
					{{ $errors->first('order_number', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Model Number -->
			<div class="control-group {{ $errors->has('model_id') ? 'error' : '' }}">
				<label class="control-label" for="model_id">Model ID</label>
				<div class="controls">
					<input class="span2" type="text" name="model_id" id="model_id" value="{{ Input::old('model_id') }}" />
					{{ $errors->first('model_id', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Purchase Date -->
			<div class="control-group {{ $errors->has('purchase_date') ? 'error' : '' }}">
				<label class="control-label" for="purchase_date">Purchase Date (YYY-mm-dd)</label>
				<div class="controls">
					<input class="span2" type="text" name="purchase_date" id="purchase_date" value="{{ Input::old('purchase_date') }}" />
					{{ $errors->first('purchase_date', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Purchase Cost -->
			<div class="control-group {{ $errors->has('purchase_cost') ? 'error' : '' }}">
				<label class="control-label" for="purchase_cost">Purchase Cost</label>
				<div class="controls">
					$<input class="span2" type="text" name="purchase_cost" id="purchase_cost" value="{{ Input::old('purchase_cost') }}" />
					{{ $errors->first('purchase_cost', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Notes -->
			<div class="control-group {{ $errors->has('notes') ? 'error' : '' }}">
				<label class="control-label" for="notes">Notes</label>
				<div class="controls">
					<input class="span6" type="text" name="notes" id="notes" value="{{ Input::old('notes') }}" />
					{{ $errors->first('notes', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

		</div>



	<!-- Form actions -->
	<div class="control-group">
		<div class="controls">
			<a class="btn btn-link" href="{{ route('assets') }}">Cancel</a>
			<button type="submit" class="btn btn-success">Publish</button>
		</div>
	</div>
</form>
@stop
