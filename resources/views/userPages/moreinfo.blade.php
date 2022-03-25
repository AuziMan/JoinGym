
<style>

	.UserProfileHeader{
		text-align: center;
		font-size: 30px;
		padding: 20px;
		background: white;
		margin-bottom: 50px;
		border-radius: 15px;
	}

	.card-header{
		font-size: 25px;
		text-align: center;
		background-color: #F55C57!important;
		border-radius: 25px!important;

	}

	.card-body{
		font-size: 17px;
		border-radius: 25px!important;
		
	}

	.container{
		border-radius: 25px!important;

	}

	.card{
		border-style: dashed;
		border-radius: 25px!important;
	}



</style>


@extends('layouts.app') @section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="UserProfileHeader">
				<h1>Fill in the information below to complete your profile!</h1>
			</div>
			<div class="card">
				<div class="card-header">{{ __('Input some more info so we can find better gym partners for you! ') }}</div>

				<div class="card-body">
					<form method="POST" action="addNewInfo">
						{{csrf_field()}}

						<div class="form-group row">
							<label for="name" class="col-md-4 col-form-label text-md-right">
							{{__('Age') }}</label>

							<div class="col-md-6">
								<input id="age" type="text"
									class="form-control @error('name') is-invalid @enderror"
									name="age" value="{{ old('age') }}" required autocomplete="age"
									autofocus> @error('age') <span class="invalid-feedback"
									role="alert"> <strong>{{ $message }}</strong>
								</span> @enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>

							<div class="col-md-6">
								<select name="gender" class="form-control">
									<option selected="selected">Choose Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
						</div>
						
						<div class="form-group row">
							<label for="phonenumber" class="col-md-4 col-form-label text-md-right">
							{{__('Phone Number') }}</label>
							<div class="col-md-6">
								<input id="phonenumber" type="text"
									class="form-control @error('phonenumber') is-invalid @enderror"
									name="phonenumber" value="{{ old('phonenumber') }}" required autocomplete="phonenumber"
									autofocus> @error('phonenumber') <span class="invalid-feedback"
									role="alert"> <strong>{{ $message }}</strong>
								</span> @enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="address" class="col-md-4 col-form-label text-md-right">
							{{__('Address') }}</label>
							<div class="col-md-6">
								<input id="address" type="text"
									class="form-control @error('address') is-invalid @enderror"
									name="address" value="{{ old('address') }}" required autocomplete="address"
									autofocus> @error('address') <span class="invalid-feedback"
									role="alert"> <strong>{{ $message }}</strong>
								</span> @enderror
							</div>
						</div>
						<div class="form-group row mb-0">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="btn btn-primary">{{ __('Save')}}</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
