@extends('layouts.app')
@section('content')

<html>
	<table style="width: 1300px; height:100px" cellpadding="15" border="1" align="center" id="admin">
		<thead>
			<tr align="center">
				<th>Job History </th>
				<th>Job Skills</th>
				<th>Education</th>
			</tr>
		</thead>
		<tbody align="center"> 
            		<tr>
            		    <td>{{$portfolio->jobSkills}}</td>
            			<td>{{$portfolio->jobHistory}}</td>
                    	<td>{{$portfolio->education}}</td>
                    	
                    </tr>
		</tbody>
	</table>
</html>
@endsection
