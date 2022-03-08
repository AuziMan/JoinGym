@extends('layouts.app') 

<style>

	.GymProfileHeader{
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



@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="GymProfileHeader">
			<h1>Everyone needs goals for the gym!</h1>
			
			<h2>Fill out the questions below to find similar gym go-ers as you!</h2>

		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Fill out the questions below to find good gym partner matches!') }}</div>

				<div class="card-body">
					<form method="POST" action="addUserGymProfile">
						{{csrf_field()}}

						<div class="form-group row">
							<label for="name" class="col-md-4 col-form-label text-md-left">
							{{__('Goals for the gym') }}</label>

							<div class="col-md-6">
								<input id="gymGoals" type="text"
									class="form-control @error('name') is-invalid @enderror"
									name="gymGoals" value="{{ old('gymGoals') }}" required autocomplete="joHhistory"
									autofocus> @error('gymGoals') <span class="invalid-feedback"
									role="alert"> <strong>{{ $message }}</strong>
								</span> @enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="name" class="col-md-4 col-form-label text-md-left">
							{{__('How many years have you been working out?') }}</label>

							<div class="col-md-6">
								<input id="gymExperience" type="text"
									class="form-control @error('name') is-invalid @enderror"
									name="gymExperience" value="{{ old('gymExperience') }}" required autocomplete="jobSkills"
									autofocus> @error('gymExperience') <span class="invalid-feedback"
									role="alert"> <strong>{{ $message }}</strong>
								</span> @enderror
							</div>
						</div>
						
						<div class="form-group row">
							<label for="workoutPrefrence" class="col-md-4 col-form-label text-md-left">
							{{__('Do you prefer working out alone, or with others?') }}</label>
							<div class="col-md-6">
								<input id="workoutPrefrence" type="text"
									class="form-control @error('workoutPrefrence') is-invalid @enderror"
									name="workoutPrefrence" value="{{ old('workoutPrefrence') }}" required autocomplete="education"
									autofocus> @error('workoutPrefrence') <span class="invalid-feedback"
									role="alert"> <strong>{{ $message }}</strong>
								</span> @enderror
							</div>
						</div>

						
						<div class="form-group row mb-0">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="btn btn-primary"> {{ __('Save')}}</button>
								
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
