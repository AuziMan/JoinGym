@extends('layouts.app')
@section('content')

<html>
	<table style="width: 1300px; height:100px" cellpadding="15" border="1" align="center" id="admin">
		<thead>
			<tr align="center">
				<th>Group Name</th>
				<th>Common Interest</th>
				<th>Group Type</th>
				<th>Group Members</th>
				<th>Group Description</th>
				<th>View</th>
				<th>Join/Leave</th>
			</tr>
		</thead>
		<tbody align="center"> 
                @foreach($groups as $group)
            		<tr>
                    	<td>{{$group->getGroupName()}}</td>
                    	<td>{{$group->getInterest()}}</td>
                    	<td>{{$group->getType()}}</td>
                    	<td>{{$group->getMemberCount()}}</td>
                    	<td>{{$group->getDescription()}}</td>
            			<td>
            				<form action='viewGroup' method="post">
                            	{{csrf_field()}}
                    			<input type='hidden' name='groupID' value='{{$group->getGroupID()}}'>
                    			<input type='submit' value='View'>
                			</form>
                		</td>
                		@if($group->getExists() == false)
                		<td>
                            <form action='joinGroup' method="post">
                            	{{csrf_field()}}
                    			<input type='hidden' name='groupID' value='{{$group->getGroupID()}}'>
                    			<input type='submit' value='Join'>
                			</form>
            			</td>
						@endif
						@if($group->getExists() == true)
                		<td>
                            <form action='leaveGroup' method="post">
                            	{{csrf_field()}}
                    			<input type='hidden' name='groupID' value='{{$group->getGroupID()}}'>
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
