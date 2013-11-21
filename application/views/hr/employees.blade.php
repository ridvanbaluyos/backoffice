@layout('layouts.main')
@section('content')
<script type="text/javascript">
$(document).ready(function(namespace)
{
	$('#delete_employee').alert();
});
</script>
<!-- <div class="alert">
  <button type="button" class="close" data-dismiss="alert alert-success">&times;</button>
  <strong>Success!</strong> You have successfull added <strong>Frederick Stephen Bangug</strong> to the employee list.
</div> -->
<div class="row">
	<div class="span12">
		<div class="pull-left">
			<button type="button" class="btn btn-success btn-small" onclick="location.href='/human-resources/employees/add';">New Employee</button>
		</div>
	</div>
</div><br/>
<div class="row">
	<div class="span12">
		<table class="table table-condensed table-striped table-hover">
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
					<td><a href="/human-resources/employees/edit/N-120910-0095">N-120910-0095</a></td>
					<td>Baluyos</td>
					<td>Ridvan Lakas ng Bayan</td>
					<td>Software Engineer</td>
					<td>Technical</td>
					<td align="center">
						<a href="/human-resources/employees/edit/N-120910-0095"><i class="icon-pencil"></i></a>
						<a href="#"><i class="icon-remove"></i></a>
					</td>
				</tr>
				<tr align="">
					<td><a href="/human-resources/employees/edit/N-110516-0052">N-110516-0052</a></td>
					<td>Bangug</td>
					<td>Frederick Stephen</td>
					<td>Software Engineer</td>
					<td>Technical</td>
					<td align="center">
						<a href="/human-resources/employees/edit/N-110516-0052"><i class="icon-pencil"></i></a>
						<a href="#" id="delete_employee"><i class="icon-remove"></i></a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<div class="row">
	<div class="span6 offset6">
		<div class="pull-right">
			<div class="pagination">
			  	<ul>
				    <li><a href="#">«</a></li>
				    <li class="active"><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
				    <li><a href="#">3</a></li>
				    <li><a href="#">»</a></li>
			  	</ul>
			</div>
		</div>
	</div>
</div>
@endsection