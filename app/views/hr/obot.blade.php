@extends('layouts.main')
@section('title', 'OB/OT Application')
@section('content')
<script type="text/javascript">
$(document).ready(function(namespace)
{

});
</script>
<fieldset>
<legend>OB/OT Request - <?php echo ($values['button_submit'] === 'Save') ? 'Add' : 'Edit'; ?></legend>
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
                <label class="control-label" for="obot_type">Type:</label>
                <div class="controls">
                    <select id="leave_type" name="leave_type">
                        <option value="">[Type]</option>
                        <option value="ob">Official Business</option>
                        <option value="ot">Overtime</option>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="obot_date">Date:</label>
                <div class="controls">
                    <div class="input-append datepicker date" id="obot_date" data-date="" data-date-format="mm/dd/yyyy">
                        <input class="span2" size="16" type="text" value="" readonly>
                        <span class="add-on btn-info"><i class="icon-calendar"></i></span>
                    </div>
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
                    <button type="button" class="btn btn-small" onclick="location.href='/hrad/obot';">Cancel</button>
                </div>
            </div>
    </div>
</form>
</fieldset>


@endsection
