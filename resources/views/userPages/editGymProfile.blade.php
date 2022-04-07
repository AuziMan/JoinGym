
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
				<h1>Edit your profile below to keep it up to date!</h1>
			</div>
			<div class="card">
				<div class="card-header">{{ __('Edit your gym goals, experice, and workout preference in order to find a similar gym partner! ') }}</div>

				<div class="card-body">
                    <form method="POST" action="doEditUserGymProfile">
                        {{csrf_field()}}
                        
                        <div class="form-group row">
                            <label for="gymGoals" class="col-md-4 col-form-label text-md-right">{{ __('Gym Goals') }}</label>
                    
                            <div class="col-md-6">
                                <input value="{{$gymProfile->getgymGoals()}}" id="gymGoals" type="text" class="form-control @error('gymGoals') is-invalid @enderror" 
                                name="gymGoals"  required autocomplete="name" autofocus>
                    
                                @error('gymGoals')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label for="gymExperience" class="col-md-4 col-form-label text-md-right">{{ __('Gym Experience') }}</label>
                    
                            <div class="col-md-6">
                                <input value="{{$gymProfile->getgymExperience()}}" id="gymExperience" type="text" class="form-control @error('gymExperience') is-invalid @enderror" 
                                name="gymExperience"  required autocomplete="name" autofocus>
                    
                                @error('gymExperience')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="workoutPrefrence" class="col-md-4 col-form-label text-md-right">{{ __('Workout Prefrence') }}</label>
                    
                            <div class="col-md-6">
                                <input value="{{$gymProfile->getworkoutPrefrence()}}" id="workoutPrefrence" type="text" class="form-control @error('workoutPrefrence') is-invalid @enderror" 
                                name="workoutPrefrence"  required autocomplete="name" autofocus>
                    
                                @error('workoutPrefrence')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                        <input type="hidden" name='id' value='{{Auth::user()->id}}'>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save info') }}
                                </button>
                            </div>
                        </div>
                    </form>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection





