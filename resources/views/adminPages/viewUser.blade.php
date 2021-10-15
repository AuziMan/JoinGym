<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</html>
@php
function inc($matches) {
    return ++$matches[1];
}
$i = 0;
$uI = "user0";
$uL = "Property 0";
$pI = "exp0";
$pL = "Experience 0";
$gI = "group0";
$gL = "Group 0";
@endphp
<!-- loop through history, assign new form group col -->
<!-- increment history, assign placeholder as history[x]->getHistory -->
@include('layouts.app')
<h1> Admin Interface </h1>
<style>
.flex {
display: flex;
   flex-direction: row;
}
.responsive {
  max-width: 100%;
  height: auto;
}
</style>
<div class= "responsive">
<form method="GET" action='admin'>



<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<!--      ------------------ USER ----------------------------- -->

<div class="card" style="margin-top:10px">
<div class="card-header">{{ __('User') }}</div>

<div class="card-body">

<!-- ----------- repeat this card ----------- -->
@if ($user == null) 
<div class="form-group row">

<label for="userid" class="col-md-4 col-form-label text-md-right">ID</label>

<div class="col-md-6">
<input id="userid" type="text" class="form-control @error('username') is-invalid @enderror" name="userid" value="{{ old('username') }}" required autocomplete="username" autofocus readonly placeholder="No Data Filed...">

</div>
</div>
<!-- ----------- load data ----------- -->
@else
@foreach ($user as $key => $value)
@php
$uL = preg_replace_callback("|(\d+)|", "inc", $uL);
$uI = preg_replace_callback("|(\d+)|", "inc", $uI);
@endphp

<div class="form-group row">

<label for=" {{ $uI }} " class="col-md-4 col-form-label text-md-right"> {{ ucfirst($key) }} </label>

<div class="col-md-6">
<input id=" {{ $uI }} " type="text" class="form-control @error('username') is-invalid @enderror" name=" {{ $uI }} " required autocomplete="username" autofocus readonly placeholder=" {{ $value }} ">

@error('username')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>

</div>

@endforeach
@endif
<!-- ----------- end card ----------- --> 
        </div>
        </div>
        
<!--     - - - - - - - - - - PORTFOLIO -- - -  - - - - -             -->
<div class="card" style="margin-top:10px">

<div class="card-header">{{ __('Portfolio') }}</div>

<div class="card-body">

<!-- ----------- repeat this card ----------- -->
@if ($portfolio == null) 
@php
$pI = preg_replace_callback("|(\d+)|", "inc", $pI);
$pL = preg_replace_callback("|(\d+)|", "inc", $pL);
@endphp
<div class="form-group row">

<label for="{{ $pL }}" class="col-md-4 col-form-label text-md-right">Portfolio</label>

<div class="col-md-6">
<input id="{{ $pI }}" type="text" class="form-control @error('username') is-invalid @enderror" name="{{ $pL }}" value="{{ old('username') }}" required autocomplete="username" autofocus readonly placeholder="No job experience filed...">

</div>
</div>
<!-- ----------- load data ----------- -->
@else
@foreach($portfolio as $key => $value)
@php
$pI = preg_replace_callback("|(\d+)|", "inc", $pI);
$pL = preg_replace_callback("|(\d+)|", "inc", $pL);
if (strpos($key, 'History') !== false){
$chain = "Job Experience";
} 
if (strpos($key, 'Skills') !== false){
$chain = "Skills";
} 
if (strpos($key, 'education') !== false){
$chain = "Education";
} 
@endphp

<div class="form-group row">

<label for="{{ $pL }}" class="col-md-4 col-form-label text-md-right">{{$chain}}</label>

<div class="col-md-6">
<input id="{{ $pI }}" type="text" class="form-control @error('username') is-invalid @enderror" name="{{ $pL }}" value="{{ old('username') }}" required autocomplete="username" autofocus readonly placeholder="{{$value}}">

@error('username')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>

</div>
@endforeach
@endif
<!-- ----------- end card ----------- --> 
        </div>
        </div>
      
		
<!--  -->



<!--      ------------------ GROUPS ----------------------------- -->

<div class="card" style="margin-top:10px">
<div class="card-header">{{ __('Groups') }}</div>

<div class="card-body">

<!-- ----------- repeat this card ----------- -->
@if ($groups == null) 
@php
$gI = preg_replace_callback("|(\d+)|", "inc", $gI);
$gL = preg_replace_callback("|(\d+)|", "inc", $gL);
@endphp
<div class="form-group row">

<label for="{{ $gL }}" class="col-md-4 col-form-label text-md-right">Groups</label>

<div class="col-md-6">
<input id="{{ $gI }}" type="text" class="form-control @error('username') is-invalid @enderror" name="{{ $gI }}" value="{{ old('username') }}" required autocomplete="username" autofocus readonly placeholder="No groups filed...">

</div>
</div>
<!-- ----------- load data ----------- -->
@else
@for ($x = 0; $x < count($groups); $x++)
@php
$gI = preg_replace_callback("|(\d+)|", "inc", $gI);
$gL = preg_replace_callback("|(\d+)|", "inc", $gL);
@endphp

<div class="form-group row">

<label for="{{ $gL }}" class="col-md-4 col-form-label text-md-right">{{ $gL }}</label>

<div class="col-md-6">
<input id="{{ $gI }}" type="text" class="form-control @error('username') is-invalid @enderror" name="{{ $gI }}" value="{{ old('username') }}" required autocomplete="username" autofocus readonly placeholder={{ $groups[$x]->getGroupName() }}>

@error('username')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>

</div>

@endfor
@endif
<!-- ----------- end card ----------- --> 
        </div>
        </div>
        

<!--  -->

          <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
        <button type="submit" name="action" value = 'return' style="margin-top:10px" class="btn btn-primary">
        {{ __('Return To Users') }}
        </button>
        </div>
        </div>
        </div>
        </div>
        </div>
        
        
        
        
        
        
    </form>
      </div>