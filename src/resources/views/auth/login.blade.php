@extends('layouts.app')

@section ('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="card col-md-6">
			<div class="card-body">
				<h5 class="card-title">Login</h5>

				<form role="form" method="POST" action="{{ url('login') }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="mb-3">
						<label class="form-label">Select a user</label>
						<select name="email" class="form-select">
							<option value="user@forum.net">User</option>
							<option value="moderator@forum.net">Moderator</option>
							<option value="admin@forum.net">Admin</option>
						</select>
					</div>

					<input type="hidden" name="password" value="demo321">

					<div class="mb-3">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="remember" name="remember" value="1">
							<label class="form-check-label" for="remember">
							Remember Me
							</label>
						</div>
					</div>

					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
