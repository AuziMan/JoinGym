@extends('layouts.app') @section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Create Your User Portfolio To Show Potential Employers!') }}</div>

				<div class="card-body">
					<form method="POST" action="addUserPortfolio">
						{{csrf_field()}}

						<div class="form-group row">
							<label for="name" class="col-md-4 col-form-label text-md-right">
							{{__('Job History') }}</label>

							<div class="col-md-6">
								<input id="jobHistory" type="text"
									class="form-control @error('name') is-invalid @enderror"
									name="jobHistory" value="{{ old('jobHistory') }}" required autocomplete="joHhistory"
									autofocus> @error('jobHistory') <span class="invalid-feedback"
									role="alert"> <strong>{{ $message }}</strong>
								</span> @enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="name" class="col-md-4 col-form-label text-md-right">
							{{__('Job Skills') }}</label>

							<div class="col-md-6">
								<input id="jobSkills" type="text"
									class="form-control @error('name') is-invalid @enderror"
									name="jobSkills" value="{{ old('jobSkills') }}" required autocomplete="jobSkills"
									autofocus> @error('jobSkills') <span class="invalid-feedback"
									role="alert"> <strong>{{ $message }}</strong>
								</span> @enderror
							</div>
						</div>
						
						<div class="form-group row">
							<label for="education" class="col-md-4 col-form-label text-md-right">
							{{__('Education') }}</label>
							<div class="col-md-6">
								<input id="education" type="text"
									class="form-control @error('education') is-invalid @enderror"
									name="education" value="{{ old('education') }}" required autocomplete="education"
									autofocus> @error('education') <span class="invalid-feedback"
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
