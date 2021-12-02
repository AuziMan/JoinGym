@extends('layouts.app')
@section('content')

<html>
	<table style="width: 1300px; height:100px" cellpadding="15" border="1" align="center" id="admin">
		<thead>
			<tr align="center">
				<th>gym ID</th>
				<th>Member ID</th>
				<th>Member Name</th>
				@if(Auth::user()->role == 'admin')
				<th>Remove</th>
				@endif
			</tr>
		</thead>
		<tbody align="center"> 
            @foreach($members as $member)
        		<tr>
                	<td>{{$member->getgymID()}}</td>
                	<td>{{$member->getMemberID()}}</td>
                	<td>{{$member->getMemberName()}}</td>
            		@if(Auth::user()->role == 'admin')
            		<td>
                    	<form action="leavegym" method="post">
                        	{{csrf_field()}}
                        	<input type="hidden" name='memberID' value='{{$member->getgymID()}}'>
                			<input type="submit" value='Remove'>
            			</form>
            		</td>
            		@endif
                </tr>
            @endforeach
		</tbody>
	</table>
</html>
@endsection
