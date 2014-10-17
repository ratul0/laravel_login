@extends('layouts.default')

@section('content')

	<div class="row">
		<div class="col-md-10">
			@include('includes.alert')
			<div class="box box-primary">
				{{ Form::open() }}
				<input type='hidden' name='token' value="{{$token}}">
					<div class="box-body">
						<div class="form-group">
							{{ Form::label('email', 'Email *', array('class' => 'col-md-3 control-label')) }}
							<div class="col-md-9">
								{{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email Address', 'autofocus' => true]) }}
								
							</div>
						</div>

						<div class="form-group">
							{{ Form::label('password', 'New Password *', array('class' => 'col-md-3 control-label')) }}
							<div class="col-md-9">
								{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'New Password')) }}
								
							</div>
						</div>

						<div class="form-group">
							{{ Form::label('password_confirmation', 'Confirm New Password *', array('class' => 'col-md-3 control-label')) }}
							<div class="col-md-9">
								{{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm New Password')) }}
								
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-offset-3 col-md-9">
								{{ Form::submit('Change Password', array('class' => 'btn btn-primary')) }}
							</div>
						</div>
					</div>
				{{ Form::close() }}
			</div>
		</div>

	</div>

@stop