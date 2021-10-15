@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Job Listing') }}</div>
               <div class="card-body">
                    <form method="POST" action="editJobData">
                        {{csrf_field()}}
						
						<input type="hidden" name="jobID" id="jobID" value="{{$job->getJobID()}}">
						
                       	<div class="form-group row">
                            <label for="company" class="col-md-4 col-form-label text-md-right">{{ __('Company') }}</label>

                            <div class="col-md-6">
                                <input value="{{$job->getCompany()}}" id="company" type="text" class="form-control @error('company') is-invalid @enderror" name="company" required autocomplete="company" autofocus>

                                @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>

                            <div class="col-md-6">
                                <input value="{{$job->getPosition()}}" id="position" type="text" class="form-control @error('position') is-invalid @enderror" name="position"  required autocomplete="position">

                                @error('position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                            <div class="col-md-6">
                                <input value="{{$job->getLocation()}}" id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location"  required autocomplete="location">

                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                        	<label for="role" class="col-md-4 col-form-label text-md-right">Job Experience</label>
                        
                      		<div class="col-md-6">
                              	<select name="experience" class="form-control" >
                            		<option selected="selected">{{__($job->getExperience())}}</option> 
                            		<option value="Senior/Executive">Senior/Executive</option>
									<option value="Intermediate">Intermediate</option>
                            		<option value="Mid-Level">Mid-Level</option>
									<option value="Entry-Level">Entry Level</option>
								</select>
                         	</div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="skills" class="col-md-4 col-form-label text-md-right">{{ __('Preferred Skills') }}</label>

                            <div class="col-md-6">
                                <input value="{{$job->getSkills()}}" id="skills" type="text" class="form-control @error('skills') is-invalid @enderror" name="skills"  required autocomplete="skills">

                                @error('skills')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                            <div class="col-md-6">
                                <input id="description" value="{{$job->getDescription()}}" type="text" class="form-control @error('description') is-invalid @enderror" name="description"  required autocomplete="description">
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit Job Listing') }}
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