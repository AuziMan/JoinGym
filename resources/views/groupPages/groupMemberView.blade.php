@extends('layouts.app')
@section('content')

<html>
	<table style="width: 1300px; height:100px" cellpadding="15" border="1" align="center" id="admin">
		<thead>
			<tr align="center">
				<th>Group ID</th>
				<th>Member ID</th>
				<th>Member Name</th>
				<th>Remove</th>
			</tr>
		</thead>
		<tbody align="center"> 
        	<tr>
            	<td>{{$members->getGroupID()}}</td>
            	<td>{{$members->getMemberID()}}</td>
            	<td>{{$members->getMemberName()}}</td>
        		<td>
                	<form action="leaveGroup" method="post">
                    	{{csrf_field()}}
                    	<input type="hidden" name='memberID' value='{{$members->getGroupID()}}'>
            			<input type="submit" value='Remove'>
        			</form>
        		</td>
            </tr>

		</tbody>
	</table>
</html>
@endsection
