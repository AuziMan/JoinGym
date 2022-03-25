@extends('layouts.app')
@section('content')

<html>
	<table style="width: 1300px; height:100px" cellpadding="15" border="1" align="center" id="admin">
		<thead>
			<tr align="center">
				<th>gym ID</th>
				<th>gym Name</th>
				<th>gym Description</th>
				<th>gym style</th>
				<th>View</th>
				<th>Join Gym</th>
			</tr>
		</thead>
		<tbody align="center"> 
                @foreach($gyms as $gym)
            		<tr>
                    	<td>{{$gym->getgymID()}}</td>
                    	<td>{{$gym->getgymName()}}</td>
                    	<td>{{$gym->getDescription()}}</td>
						<td>{{$gym->getStyle()}}</td>
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
