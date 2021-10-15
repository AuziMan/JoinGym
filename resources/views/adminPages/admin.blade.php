@extends('layouts.app')
@section('content')

<html>
	<table style="width: 1300px; height:100px" cellpadding="15" border="1" align="center" id="admin">
		<thead>
			<tr align="center">
				<th>Name </th>
				<th>Email</th>
				<th>Password</th>
				<th>Role</th>
				<th>Edit</th>
				<th>Suspend</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody align="center"> 
                @foreach($users as $user)
            		<tr>
                    	<td>{{$user->name}}</td>
                    	<td>{{$user->email}}</td>
                    	<td>{{$user->password}}</td>
                    	<td>{{$user->role}}</td>
                    	
                		<td>
                        	<form action="editView" method="post">
                            	{{csrf_field()}}
                            	<input type="hidden" name='id' value='{{$user->id}}'>
                    			<input type="submit" value='Edit'>
                			</form>
                		</td>
            			
            			<td>
                            <form action='suspend' method="post">
                            	{{csrf_field()}}
                    			<input type='hidden' name='id' value='{{$user->id}}'>
                    			<input type='submit' value='Suspend'>
                			</form>
            			</td>
            			
            			<td>
                			<form action="delete" method="post">
                			    {{csrf_field()}}
                    			<input type='hidden' name='id' value='{{$user->id}}'>
                    			<input type='submit' value='Delete'>
            		    	</form>
                		</td>
                    </tr>
            @endforeach
		</tbody>
	</table>
</html>
@endsection
