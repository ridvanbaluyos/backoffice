@extends('layouts.main')
@section('title', 'Leave Application')
@section('content')
<script type="text/javascript">
$(document).ready(function(namespace)
{
	$('#leave_type').change(function (){
		if ($('#leave_type').val() !== '')
		{
			$('#leave_summary_type').html($('#leave_type option:selected').text());
		}
	});

	$('#leave_startdate').datepicker()
		.on('changeDate', function(ev) {
			calculateLeaveDates();

	});

	$('#leave_enddate').datepicker()
		.on('changeDate', function(ev) {
			calculateLeaveDates();

	});

	$('#start_meridian').change(function () {
		calculateLeaveDates();
	});

	$('#end_meridian').change(function () {
		calculateLeaveDates();
	});

	function calculateLeaveDates()
	{
		// Start Date
		var startdate = $("#leave_startdate").datepicker('getDate');

		// End Date
		var enddate = $("#leave_enddate").datepicker('getDate');

		// Total Leave Days
		var diff = (enddate - startdate) / (24*3600*1000);
		diff++;

		if ($('#start_meridian').val() === "pm")
		{
			diff = diff - 0.5;
		}

		if ($('#end_meridian').val() === "am")
		{
			diff = diff - 0.5;
		}

		$('#leave_summary_duration').html(diff);
		console.log(diff);

	}
});
</script>
<fieldset>
<legend>Leave Request - <?php echo ($values['button_submit'] === 'Save') ? 'Add' : 'Edit'; ?></legend>
<form class="form-horizontal">
	<div class="row">
		<div class="span7">
			<?php if ($values['reference_number']): ?>
			<div class="control-group">
				<label class="control-label" for="leave_type">Reference #:</label>
				<div class="controls">
					<input type="text" readonly="readonly" id="leave_reason" value="<?php echo $values['reference_number']; ?>" />

				</div>
			</div>
			<?php endif; ?>
			<div class="control-group">
				<label class="control-label" for="leave_type">Type:</label>
				<div class="controls">
					<select id="leave_type" name="leave_type">
				  		<option value="">[Leave Type]</option>
				 		<option value="sl">Sick Leave</option>
						<option value="vl">Vacaton Leave</option>
						<option value="el">Emergency Leave</option>
						<option value="sl_np">Sick Leave (w/o Pay)</option>
						<option value="vl_np">Vacaton Leave (w/o Pay)</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="leave_startdate">Start Date:</label>
				<div class="controls">
					<div class="input-append datepicker date" id="leave_startdate" data-date="" data-date-format="mm/dd/yyyy">
						<input class="span2" size="16" type="text" value="" readonly>
						<span class="add-on btn-info"><i class="icon-calendar"></i></span>
				  	</div>
				  	<select id="start_meridian" name="start_meridian" class="span1">
				  		<option>--</option>
				 		<option value="am">AM</option>
						<option value="pm">PM</option>
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
				  	<select id="end_meridian" name="end_meridian" class="span1">
				  		<option>--</option>
				 		<option value="am">AM</option>
						<option value="pm">PM</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="leave_reason">Reason(s):</label>
				<div class="controls">
					<input type="text" class="span4" id="leave_reason" placeholder="" />
				</div>
			</div>
		</div>
		<div class="span4 well">
			<h4>Summary Details</h4>
			<dl class="dl-horizontal">
			  	<dt class="text-info">Sick Leaves:</dt>
			  	<dd>8/15 remaining</dd>
			  	<dt class="text-info">Vacation Leaves:</dt>
			  	<dd>8/15 remaining</dd>
			  	<hr class="divider-horizontal" />
			  	<dt class="text-success">Leave Type:</dt>
			  	<dd id="leave_summary_type">Vacation Leave</dd>
			  	<dt class="text-success">Total # of Days:</dt>
			  	<dd id="leave_summary_duration">0</dd>
			  	<dt class="text-success">Approver:</dt>
			  	<dd>Mylene Pascual</dd>
			</dl>

		</div>
	</div>
	<div class="row">
		<div class="control-group">
				<label class="control-label" for=""></label>
				<div class="controls">
					<button type="submit" class="btn btn-small btn-success"><?php echo $values['button_submit']; ?></button>
					<button type="button" class="btn btn-small" onclick="location.href='/human-resources/leaves';">Cancel</button>
				</div>
			</div>
	</div>
</form>
</fieldset>


@endsection
