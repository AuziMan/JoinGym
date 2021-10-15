@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Affinity Group') }}</div>
               <div class="card-body">
                    <form method="POST" action="editGroup">
                        {{csrf_field()}}
						<input type="hidden" name="groupID" value="{{$group->getGroupID()}}">
                       	<div class="form-group row">
                            <label for="groupName" class="col-md-4 col-form-label text-md-right">{{ __('Group Name') }}</label>

                            <div class="col-md-6">
                                <input id="groupName" value="{{$group->getGroupName()}}" type="text" class="form-control @error('groupName') is-invalid @enderror" name="groupName" required autocomplete="groupName" autofocus>

                                @error('groupName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="interest" class="col-md-4 col-form-label text-md-right">{{ __('Common Interest') }}</label>

                            <div class="col-md-6">
                                <input id="interest" value="{{$group->getInterest()}}" type="text" class="form-control @error('interest') is-invalid @enderror" name="interest"  required autocomplete="interest">

                                @error('interest')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                        	<label for="type" class="col-md-4 col-form-label text-md-right">Group Type</label>
                      		<div class="col-md-6">
                              	<select name="type" class="form-control" >
                            		<option selected="selected">Choose Group Type</option> 
                            		<option value="Business">Business</option>
									<option value="Personal">Personal</option>
								</select>
                         	</div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" value="{{$group->getDescription()}}" type="text" class="form-control @error('description') is-invalid @enderror" name="description"  required autocomplete="description">

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
                                    {{ __('Edit Group') }}
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