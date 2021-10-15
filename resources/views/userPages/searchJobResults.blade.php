@extends('layouts.app')
@section('content')

<html>
	<table style="width: 1300px; height:100px" cellpadding="15" border="1" align="center" id="admin">
		<thead>
			<tr align="center">
				<th>Job ID</th>
				<th>Position Title</th>
				<th>Job Description</th>
				<th>View</th>
			</tr>
		</thead>
		<tbody align="center"> 
            @foreach($jobs as $job)
        		<tr>
                	<td>{{$job->getJobID()}}</td>
                	<td>{{$job->getPosition()}}</td>
                	<td>{{$job->getDescription()}}</td>
                	<td>
                    	<form action="viewOneJob" method="post">
                           	{{csrf_field()}}
                           	<input type="hidden" name='id' value='{{$job->getJobID()}}'>
                    		<input type="submit" value='View'>
                		</form>
                	</td>
                </tr>
            @endforeach
		</tbody>
	</table>
</html>
@endsection
