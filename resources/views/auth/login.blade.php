@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@include('partials/error')

					<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">{{ trans('validation.attributes.username') }}</label>
							<div class="col-md-6">
						    	<input type="username" name="username" value="{{old('username')}}" class="form-control">
							    
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">{{ trans('validation.attributes.password') }}</label>
							<div class="col-md-6">
						    	<input type="password" name="password" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> {{ trans('validation.attributes.rememberme') }}
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
									Login
								</button>

								<a href="/password/email">{{trans('validation.attributes.forgotpassword')}}</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection