@layout('layouts/main')

@section('content')
<table class="table table-hover table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Administrator</td>
			<td>
				<a href="#" class="btn btn-mini"><i class="icon-edit"></i> Edit</a>
				<a href="#" class="btn btn-mini"><i class="icon-remove"></i> Delete</a>
			</td>
		</tr>
		<tr>
			<td>Regular User</td>
			<td>
				<a href="#" class="btn btn-mini"><i class="icon-edit"></i> Edit</a>
				<a href="#" class="btn btn-mini"><i class="icon-remove"></i> Delete</a>
			</td>
		</tr>
	</tbody>
</table>

<button class="btn">Add New</button>
@endsection