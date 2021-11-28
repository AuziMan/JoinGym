
@extends('layouts.app')
@section('content')

<html>
	<table style="width: 1300px; height:100px" cellpadding="15" border="1" align="center" id="admin">
		<thead>
			<tr align="center">
				<th>Gym Goals </th>
				<th>Gym Experience</th>
				<th>Together or Alone</th>
			</tr>
		</thead>
		<tbody align="center"> 
            		<tr>
            		    <td>{{$portfolio->gymGoals}}</td>
            			<td>{{$portfolio->gymExperience}}</td>
                    	<td>{{$portfolio->workoutPrefrence}}</td>
                    	
                    </tr>
		</tbody>
	</table>
</html>
@endsection
