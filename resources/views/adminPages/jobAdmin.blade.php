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
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody align="center"> 
                @foreach($jobs as $job)
            		<tr>
            			<td>{{$job->getJobID()}}</td>
                    	<td>{{$job->getCompany()}}</td>
                    	<td>{{$job->getPosition()}}</td>
                    	<td>{{$job->getLocation()}}</td>
                    	<td>{{$job->getExperience()}}</td>
                    	<td>{{$job->getSkills()}}</td>
                    	<td>{{$job->getDescription()}}</td>
                		<td>
                        	<form action="editJobView" method="post">
                            	{{csrf_field()}}
                            	<input type="hidden" name='id' value='{{$job->getJobID()}}'>
                    			<input type="submit" value='Edit'>
                			</form>
                		</td>
            			
            			<td>
                			<form action="deleteJob" method="post">
                			    {{csrf_field()}}
                    			<input type='hidden' name='id' value='{{$job->getJobID()}}'>
                    			<input type='submit' value='Delete'>
            		    	</form>
                		</td>
                    </tr>
            @endforeach
		</tbody>
	</table>
	<form action="addJob" method="get">
    	<input style="margin-left: 1300px; margin-top:30px" type="submit" value="Add Job Listing">
	</form>
</html>
@endsection
