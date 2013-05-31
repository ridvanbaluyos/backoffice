@layout('layouts.main')
@section('content')
<button type="button" class="btn btn-info btn-small" onclick="location.href='/human-resources/employee-list/add';">Add New Employee</button> <br/><br/>
<table class="table table-condensed">
	<thead>
		<tr>
			<th>Employee #</th>
			<th>Last Name</th>
			<th>First Name</th>
			<th>Designation</th>
			<th>Department</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<tr align="">
			<td><a href="#">N-120910-0095</a></td>
			<td>Baluyos</td>
			<td>Ridvan</td>
			<td>Software Engineer</td>
			<td>Technical</td>
			<td align="center">
				<a href="#"><i class="icon-pencil"></i></a>
				<a href="#"><i class="icon-remove"></i></a>
			</td>
		</tr>
	</tbody>
</table>
@endsection