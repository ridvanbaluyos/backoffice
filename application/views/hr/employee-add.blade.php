@layout('layouts.main')
@section('content')
<fieldset>
<legend>Add Employee</legend>
<form class="form-horizontal">
	<div class="control-group">
		<label class="control-label" for="employee_nickname">Gender:</label>
		<div class="controls">
			<label class="radio inline">
			  	<input type="radio" name="gender" id="male" value="male" />Male
			</label>
			<label class="radio inline">
				<input type="radio" name="gender" id="female" value="female" />Female
			</label>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="employee_number">Employee #:</label>
		<div class="controls">
			<input type="text" id="employee_number" placeholder="" />
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="employee_lastname">Last Name:</label>
		<div class="controls">
			<input type="text" id="employee_lastname" placeholder="" />
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="employee_firstname">First Name:</label>
		<div class="controls">
			<input type="text" id="employee_firstname" placeholder="" />
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="employee_middlename">Middle Name:</label>
		<div class="controls">
			<input type="text" id="employee_middlename" placeholder="" />
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="employee_nickname">Nickname:</label>
		<div class="controls">
			<input type="text" id="employee_nickname" placeholder="" />
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="employee_number">Probationary?</label>
		<div class="controls">
			<label class="checkbox inline">
			  	<input type="checkbox" id="probationary" value="probationary">Yes
			</label>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="employee_nickname">Work Email:</label>
		<div class="controls">
			<div class="input-append">
				  <input class="span2" id="employee_email" type="text" />
				  <span class="add-on">@sulit.com.ph</span>
			</div>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="employee_number">Department:</label>
		<div class="controls">
			<select>			
			  	<option>Human Resources</option>
			  	<option>Administration</option>
			  	<option>Finance</option>
			  	<option>Business Development, Sales and Marketing</option>
			  	<option>Support</option>
			  	<option>Systems and Network Administration</option>
			  	
			</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="employee_number">Position:</label>
		<div class="controls">
			<select>			
			  	<option>Managing Director</option>
			  	<option>Head of Operations</option>
			  	<option>Assistant Vice-President</option>
			  	<option>Executive Assistant</option>
			  	<option>HR and Admin Manager</option>
			  	<option>HR Officer</option>
			  	<option>Administrative Supervisor</option>
			  	<option>Administrative Specialist</option>
			  	<option>Receptionist</option>
			  	<option>Security Officer</option>
			  	<option>Company Driver</option>
			  	<option>Utility</option>
			  	<option>Messenger</option>
			  	<option>Finance Senior Manager</option>
			  	<option>Finance Supervisor</option>
			  	<option>Finance Officer</option>
			  	<option>Sales Manager</option>
			  	<option>Marketing Manager</option>
			  	<option>Business Development Manager</option>
			  	<option>Corporate Communications Supervisor</option>
			  	<option>Corporate Communications Specialist</option>
			  	<option>Marketing Supervisor</option>
			  	<option>Marketing Officer</option>
			  	<option>Product Officer - SG</option>
			  	<option>Account Executive - Corporate Banner</option>
			  	<option>BSAM Admin Assistant</option>
			  	<option>Multimedia Designer</option>
			  	<option>Sales Supervisor - Telemarketing</option>
			  	<option>Sales Officer - Telemarketing</option>
			  	<option>Sales Specialist - Telemarketing</option>
			  	<option>Online Marketing Lead</option>
			  	<option>SEO Copywriter</option>
			  	<option>Assistant Support Manager</option>
			  	<option>Support Supervisor</option>
			  	<option>Fraud Expert</option>
			  	<option>Support Officer</option>
			  	<option>Support Specialist</option>
			  	<option>Support Supervisor - Voice</option>
			  	<option>Support Specialist - Voice</option>
			  	<option>Technical Manager</option>
			  	<option>DevOps Engineer</option>
			  	<option>Software Engineer</option>
			  	<option>Software Engineer - Mobile App</option>
			  	<option>UX Engineer</option>
			  	<option>UI Supervisor</option>
			  	<option>UI Engineer</option>
			  	<option>Test Engineer</option>
			  	<option>IT and Network Manager</option>
			  	<option>IT and Network Supervisor</option>
			  	<option>Jr. IT and Network Administrator</option>
			</select>
		</div>
	</div>
</form>
</fieldset>

@endsection