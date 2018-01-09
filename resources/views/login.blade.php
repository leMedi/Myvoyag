 <?php	$noHeader = true ?>
@extends('layouts.master')

@section('body')

<div class="container-fluid" >
	<div class="row">
		<div class="col-md-8">
			
		</div>
		<div class="col-md-4 px-0" id="loginForm">
			<div class="full-height  bg-white height-100 ">
				<div class="vertical-align full-height pdd-horizon-70">
					<div class="table-cell">
						<div class="pdd-horizon-15">
							<h2>Login</h2>
							<p class="mrg-btm-15 font-size-13 text-muted">Please enter your user name and password to login</p>
							<form>
								<div class="form-group">
									<input type="email" class="form-control" placeholder="User name">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Password">
								</div>
								<div class="checkbox font-size-12">
									<input id="agreement" name="agreement" type="checkbox">
									<label for="agreement" class="text-muted">Keep Me Signed In</label>
								</div>
								<button class="btn btn-primary px-5 mt-3">Login</button>
							</form>
						</div>
					</div>				
				</div>
				<div class="login-footer">
					<img class="img-responsive inline-block" src="http://themenate.com/espire/html/dist/assets/images/logo/logo.png" width="100" alt="">
					<span class="font-size-13 float-right pdd-top-10">Don't have an account? <a href="">Sign Up Now</a></span>
				</div>				
			</div>
		</div>      
	</div>
</div>

@endsection