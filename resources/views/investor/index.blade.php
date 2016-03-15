@extends('layouts.master')
@section('title', 'Statement of Account')
@section('content')
@include('layouts.nav')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="page-header">
						<h2>My Statement of Account</h2>
					</div>
					<div id="account-statement"></div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection