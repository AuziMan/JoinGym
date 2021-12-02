@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Affinity gym') }}</div>
               <div class="card-body">
                    <form method="POST" action="addgym">
                        {{csrf_field()}}

                       	<div class="form-gym row">
                            <label for="gymName" class="col-md-4 col-form-label text-md-right">{{ __('gym Name') }}</label>

                            <div class="col-md-6">
                                <input id="gymName" type="text" class="form-control @error('gymName') is-invalid @enderror" name="gymName" required autocomplete="gymName" autofocus>

                                @error('gymName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-gym row">
                            <label for="interest" class="col-md-4 col-form-label text-md-right">{{ __('Common Interest') }}</label>

                            <div class="col-md-6">
                                <input id="interest" type="text" class="form-control @error('interest') is-invalid @enderror" name="interest"  required autocomplete="interest">

                                @error('interest')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-gym row">
                        	<label for="type" class="col-md-4 col-form-label text-md-right">gym Type</label>
                      		<div class="col-md-6">
                              	<select name="type" class="form-control" >
                            		<option selected="selected">Choose gym Type</option> 
                            		<option value="Business">Business</option>
									<option value="Personal">Personal</option>
								</select>
                         	</div>
                        </div>
                        
                        <div class="form-gym row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description"  required autocomplete="description">

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-gym row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add gym') }}
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