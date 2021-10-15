@extends('layouts.app')
@section('content')

<html>
	<table style="width: 1300px; height:100px" cellpadding="15" border="1" align="center" id="admin">
		<thead>
			<tr align="center">
				<th>Group ID</th>
				<th>Group Name</th>
				<th>Common Interest</th>
				<th>Group Type</th>
				<th>Member Count</th>
				<th>Group Description</th>
				<th>View</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody align="center"> 
                @foreach($groups as $group)
            		<tr>
                    	<td>{{$group->getGroupID()}}</td>
                    	<td>{{$group->getGroupName()}}</td>
                    	<td>{{$group->getInterest()}}</td>
                    	<td>{{$group->getType()}}</td>
                    	<td>{{$group->getMemberCount()}}</td>
                    	<td>{{$group->getDescription()}}</td>
                		<td>
                        	<form action="viewGroup" method="post">
                            	{{csrf_field()}}
                            	<input type="hidden" name='groupID' value='{{$group->getGroupID()}}'>
                    			<input type="submit" value='View'>
                			</form>
                		</td>
            			
            			<td>
                            <form action='editGroupView' method="post">
                            	{{csrf_field()}}
                    			<input type='hidden' name='groupID' value='{{$group->getGroupID()}}'>
                    			<input type='submit' value='Edit'>
                			</form>
            			</td>
            			
            			<td>
                			<form action="deleteGroup" method="post">
                			    {{csrf_field()}}
                    			<input type='hidden' name='groupID' value='{{$group->getGroupID()}}'>
                    			<input type='submit' value='Delete'>
            		    	</form>
                		</td>
                    </tr>
            @endforeach
		</tbody>
	</table>
	<form action="addGroupView" method="get">
    	<input style="margin-left: 1280px; margin-top:30px" type="submit" value="Add Affinity Group">
	</form>
</html>
@endsection
