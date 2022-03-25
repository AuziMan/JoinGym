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
				<th>Edit</th>
				<th>Delete</th>
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
                        	<form action="viewgym" method="post">
                            	{{csrf_field()}}
                            	<input type="hidden" name='gymID' value='{{$gym->getgymID()}}'>
                    			<input type="submit" value='View'>
                			</form>
                		</td>
            			
            			<td>
                            <form action='editgymView' method="post">
                            	{{csrf_field()}}
                    			<input type='hidden' name='gymID' value='{{$gym->getgymID()}}'>
                    			<input type='submit' value='Edit'>
                			</form>
            			</td>
            			
            			<td>
                			<form action="deletegym" method="post">
                			    {{csrf_field()}}
                    			<input type='hidden' name='gymID' value='{{$gym->getgymID()}}'>
                    			<input type='submit' value='Delete'>
            		    	</form>
                		</td>
                    </tr>
            @endforeach
		</tbody>
	</table>
	<form action="addgymView" method="get">
    	<input style="margin-left: 1280px; margin-top:30px" type="submit" value="Add Affinity gym">
	</form>
</html>
@endsection
