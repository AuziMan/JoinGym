
@extends('layouts.app')
@section('content')

<html>
	<table style="width: 1300px; height:100px" cellpadding="15" border="1" align="center" id="admin">
		<thead>
			<tr align="center">
				<th>Age</th>
				<th>Gener</th>
				<th>Phone Number</th>
				<th>Address</th>

			</tr>
		</thead>
		<tbody align="center"> 
            		<tr>
            		    <td>{{$moreInfoData->age}}</td>
            			<td>{{$moreInfoData->gender}}</td>
                    	<td>{{$moreInfoData->phonenumber}}</td>
                        <td>{{$moreInfoData->address}}</td>
                    </tr>
		</tbody>
	</table>

	<button>Edit User Info</button>
</html>
@endsection
