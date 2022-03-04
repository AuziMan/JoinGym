@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit User Info') }}</div>
               <div class="card-body">
                    <form method="POST" action="doEditUserGymProfile">
                        {{csrf_field()}}
						
                        <div class="form-group row">
                            <label for="gymGoals" class="col-md-4 col-form-label text-md-right">{{ __('Gym Goals') }}</label>

                            <div class="col-md-6">
                                <input id="gymGoals" type="text" class="form-control @error('gymGoals') is-invalid @enderror" 
                                name="gymGoals" value="{{$gymprofile->getgymGoals()}}" required autocomplete="name" autofocus>

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
                                <input id="gymExperience" type="text" class="form-control @error('gymExperience') is-invalid @enderror" 
                                name="gymExperience" value="{{$gymprofile->getgymExperience()}}" required autocomplete="name" autofocus>

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
                                <input id="workoutPrefrence" type="text" class="form-control @error('workoutPrefrence') is-invalid @enderror" 
                                name="workoutPrefrence" value="{{$gymprofile->getworkoutPrefrence()}}" required autocomplete="name" autofocus>

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