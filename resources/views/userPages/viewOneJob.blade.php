@extends('layouts.app')
@section('content')

<html>
	<table style="width: 1300px; height:100px" cellpadding="15" border="1" align="center" id="admin">
		<thead>
			<tr align="center">
				<th>Job ID </th>
				<th>Company </th>
				<th>Position</th>
				<th>Location</th>
				<th>Preferred Experience</th>
				<th>Preferred Skills</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody align="center"> 
            <tr>
            	<td>{{$job->getJobID()}}</td>
                <td>{{$job->getCompany()}}</td>
                <td>{{$job->getPosition()}}</td>
                <td>{{$job->getLocation()}}</td>
                <td>{{$job->getExperience()}}</td>
                <td>{{$job->getSkills()}}</td>
                <td>{{$job->getDescription()}}</td>
              
            </tr>
		</tbody>
	</table>
	@if($exists == false)
	<form action="applyJob" method="post" >
		{{csrf_field()}}
		<input type='hidden' name='id' value='{{$job->getJobID()}}'>
	    <input type='submit' value='Apply' style="margin-left: 900px; margin-top: 50px; height: 30px; width: 100px">
	</form>
	@endif
	@if($exists == true)
	<h4 style="margin-left: 830px; margin-top: 50px;">You're already applied!</h4>
	@endif
</html>
@endsection
