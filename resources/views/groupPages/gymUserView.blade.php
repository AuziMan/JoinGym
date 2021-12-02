@extends('layouts.app')
@section('content')

<html>
	<table style="width: 1300px; height:100px" cellpadding="15" border="1" align="center" id="admin">
		<thead>
			<tr align="center">
				<th>gym Name</th>
				<th>Common Interest</th>
				<th>gym Type</th>
				<th>gym Members</th>
				<th>gym Description</th>
				<th>View</th>
				<th>Join/Leave</th>
			</tr>
		</thead>
		<tbody align="center"> 
                @foreach($gyms as $gym)
            		<tr>
                    	<td>{{$gym->getgymName()}}</td>
                    	<td>{{$gym->getInterest()}}</td>
                    	<td>{{$gym->getType()}}</td>
                    	<td>{{$gym->getMemberCount()}}</td>
                    	<td>{{$gym->getDescription()}}</td>
            			<td>
            				<form action='viewgym' method="post">
                            	{{csrf_field()}}
                    			<input type='hidden' name='gymID' value='{{$gym->getgymID()}}'>
                    			<input type='submit' value='View'>
                			</form>
                		</td>
                		@if($gym->getExists() == false)
                		<td>
                            <form action='joingym' method="post">
                            	{{csrf_field()}}
                    			<input type='hidden' name='gymID' value='{{$gym->getgymID()}}'>
                    			<input type='submit' value='Join'>
                			</form>
            			</td>
						@endif
						@if($gym->getExists() == true)
                		<td>
                            <form action='leavegym' method="post">
                            	{{csrf_field()}}
                    			<input type='hidden' name='gymID' value='{{$gym->getgymID()}}'>
                    			<input type='submit' value='Leave'>
                			</form>
            			</td>
						@endif
                    </tr>
            @endforeach
		</tbody>
	</table>
</html>
@endsection
