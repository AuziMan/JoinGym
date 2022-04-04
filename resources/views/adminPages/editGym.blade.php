@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Affinity gym') }}</div>
               <div class="card-body">
                    <form method="POST" action="editgym">
                        {{csrf_field()}}
						<input type="hidden" name="gymID" value="{{$gym->getgymID()}}">
                       	<div class="form-gym row">
                            <label for="gymName" class="col-md-4 col-form-label text-md-right">{{ __('gym Name') }}</label>

                            <div class="col-md-6">
                                <input id="gymName" value="{{$gym->getgymName()}}" type="text" class="form-control @error('gymName') is-invalid @enderror" name="gymName" required autocomplete="gymName" autofocus>

                                @error('gymName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-gym row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" value="{{$gym->getDescription()}}" type="text" class="form-control @error('description') is-invalid @enderror" name="description"  required autocomplete="description">

                                @error('description')
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
                            		<option value="Beginner">Beginner</option>
									<option value="Body Building">Body Building</option>
									<option value="Athletics">Athletics</option>

								</select>
                         	</div>
                        </div>
                        
                        <div class="form-gym row">
                            <label for="style" class="col-md-4 col-form-label text-md-right">{{ __('Style') }}</label>

                            <div class="col-md-6">
                                <input id="style" value="{{$gym->getStyle()}}" type="text" class="form-control @error('style') is-invalid @enderror" name="style"  required autocomplete="style">

                                @error('style')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-gym row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit gym') }}
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