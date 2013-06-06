@layout('layouts.main')
@section('content')
<script type="text/javascript">
$(document).ready(function(namespace)
{
	$('#leave_startdate').datepicker()
		.on('changeDate', function(ev) {
			if ($('#leave_enddate').val() !== '')
			{
				var start_date = $('#leave_startdate').child.val();
				var end_date = $('#leave_enddate').val();
			}
		
	});
	$('#leave_enddate').datepicker()
		.on('changeDate', function(ev) {
			if ($('#leave_startdate').val() !== '')
			{
				var start_date = $('#leave_startdate').val();
				var end_date = $('#leave_enddate').val();
				alert(start_date);
			}
		
	});
});
</script>
<fieldset>
<legend>Leave Request</legend>
<form class="form-horizontal">
	<div class="row">
		<div class="span7">
			<div class="control-group">
				<label class="control-label" for="leave_type">Type:</label>
				<div class="controls">
					<label class="radio inline">
					  	<input type="radio" name="leave_type" id="leave_sick" value="sick" />Sick
					</label>
					<label class="radio inline">
						<input type="radio" name="leave_type" id="leave_vacation" value="vacation" />Vacation
					</label>
					<label class="radio inline">
						<input type="radio" name="leave_type" id="leave_emergency" value="emergency" />Emergency
					</label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="leave_startdate">Start Date:</label>
				<div class="controls">
					<div class="input-append datepicker date" id="leave_startdate" data-date="" data-date-format="mm/dd/yyyy">
						<input class="span2" size="16" type="text" value="" readonly>
						<span class="add-on btn-info"><i class="icon-calendar"></i></span>
				  	</div>
				  	<select class="span1">
				  		<option>--</option>
				 		<option>AM</option>
						<option>PM</option>								  	
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="leave_enddate">End Date:</label>
				<div class="controls">
					<div class="input-append datepicker date" id="leave_enddate" data-date="" data-date-format="mm/dd/yyyy">
						<input class="span2" size="16" type="text" value="" readonly>
						<span class="add-on btn-info"><i class="icon-calendar"></i></span>
				  	</div>
				  	<select class="span1">
				  		<option>--</option>
				 		<option>AM</option>
						<option>PM</option>								  	
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="leave_reason">Reason(s):</label>
				<div class="controls">
					<input type="text" class="span5" id="leave_reason" placeholder="" />
				</div>
			</div>
		</div>
		<div class="span4 offset1">
			<h4>Summary Details</h4>
			<p class="text-info">Remaining Leaves:</p>
				asdf
			
		</div>
	</div>
	<div class="row">
		<div class="control-group">
				<label class="control-label" for=""></label>
				<div class="controls">
					<button type="submit" class="btn btn-small btn-danger">Submit</button>
					<button type="button" class="btn btn-small" onclick="location.href='/human-resources/leaves';">Cancel</button>
				</div>
			</div>
	</div>
</form>
</fieldset>


@endsection