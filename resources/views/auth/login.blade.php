@extends('layouts.master')
@section('title', 'Investor Login')
@section('content')
@include('layouts.gnav')
@if (count($errors) > 0)
    <div class="col-md-3 col-sm-6 col-xs-12" style="margin:50px auto 15px; float: none; vertical-align: middle;">
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
		</div>
	</div>
@else
	<div class="col-md-3 col-sm-6 col-xs-12" style="margin:30px auto 15px; float: none; vertical-align: middle; visibility: hidden;">
		<div class="alert alert-info">
			Alert Container
		</div>
	</div>
@endif


<div class="col-md-3 col-sm-6 col-xs-12" style="margin: 30px auto 20px; float: none; vertical-align: middle;">
	<div class="panel panel-default">
		<div class="panel-body">
			<div style="margin: 0 auto; width: 250px;" align="center">
				<img src="{{asset('images/sedpi_logo.png')}}" width="100%"/>
				<h5>Investor Login</h5>
			</div>
			<form action="{{url('login')}}" method="POST">
				{!! csrf_field() !!}
				<div class="form-group label-floating">
					<label class="control-label" for="input-email">Email</label>
					<input name="email" class="form-control" id="input-email" type="text" value="{{old('email')}}"/>
				</div>
				<div class="form-group label-floating">
					<label class="control-label" for="input-password">Password</label>
					<input name="password" class="form-control" id="input-password" type="password"/>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name="remember"/> Remember Me
					</label>
				</div>
				<button type="submit" class="btn btn-raised btn-primary btn-block">Login</button>
			</form>
		</div>
	</div>
</div>
@endsection