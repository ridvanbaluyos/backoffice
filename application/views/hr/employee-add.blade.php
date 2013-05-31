@layout('layouts.main')
@section('content')
<script type="text/javascript">
$(document).ready(function(namespace)
{
	$('#employee_datehired').datepicker();
});
</script>
<fieldset>
<legend>Add Employee</legend>
<form class="form-horizontal">
	<h4>Personal Information</h4>
	<div class="row">
		<div class="span6">
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
				<label class="control-label" for="employee_nickname">Status:</label>
				<div class="controls">
					<label class="radio inline">
					  	<input type="radio" name="status" id="single" value="single" />Single
					</label>
					<label class="radio inline">
						<input type="radio" name="status" id="married" value="married" />Maried
					</label>
					<label class="radio inline">
						<input type="radio" name="status" id="separated" value="separated" />Separated
					</label>
					<label class="radio inline">
						<input type="radio" name="status" id="widowed" value="widowed" />Widowed
					</label>
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
		</div>
		<div class="span6">
			<div class="control-group">
				<label class="control-label" for="employee_personalemail">Personal Email:</label>
				<div class="controls">
					<input type="text" id="employee_personalemail" placeholder="" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="employee_homenumber">Home #:</label>
				<div class="controls">
					<input type="text" id="employee_homenumber" placeholder="" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="employee_personalnumber">Mobile #:</label>
				<div class="controls">
					<input type="text" id="employee_personalnumber" placeholder="" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="employee_cityaddress">City Address:</label>
				<div class="controls">
					<input type="text" id="employee_cityaddress" placeholder="" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="employee_provincialaddress">Provincial Address:</label>
				<div class="controls">
					<input type="text" id="employee_provincialaddress" placeholder="" />
				</div>
			</div>
		</div>
	</div>
	<h5>In case of emergency</h5>
	<div class="row">
		<div class="span12">
			<div class="control-group">
				<label class="control-label" for="employee_emergencycontactname">Name:</label>
				<div class="controls">
					<input type="text" id="employee_emergencycontactname" placeholder="" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="employee_emergencyrelationship">Relationship:</label>
				<div class="controls">
					<input type="text" id="employee_emergencyrelationship" placeholder="" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="employee_emergencycontactnumber">Contact #:</label>
				<div class="controls">
					<input type="text" id="employee_emergencycontactnumber" placeholder="" />
				</div>
			</div>
		</div>
	</div>
	<h4>Work Information</h4>
	<div class="row">
		<div class="span6">
			<div class="control-group">
				<label class="control-label" for="employee_datehired">Date Hired:</label>
				<div class="controls">
					<div class="input-append date" id="employee_datehired" data-date="" data-date-format="mm/dd/yyyy">
						<input class="span2" size="16" type="text" value="" readonly>
						<span class="add-on btn-info"><i class="icon-calendar"></i></span>
				  	</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="employee_type">Probationary?</label>
				<div class="controls">
					<label class="checkbox inline">
					  	<input type="checkbox" id="employee_type" value="probationary">Yes
					</label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="employee_email">Work Email:</label>
				<div class="controls">
					<div class="input-append">
						  <input class="span2" id="employee_email" type="text" />
						  <span class="add-on">@sulit.com.ph</span>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="employee_worknumber">Work Phone:</label>
				<div class="controls">
				  	<input class="span2" id="employee_worknumber" type="text" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="employee_number">Department:</label>
				<div class="controls">
					<select>
						<option>[Choose Department]</option>		
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
						<option>[Choose Position]</option>
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
			<div class="control-group">
				<label class="control-label" for="employee_reportsto">Reports To:</label>
				<div class="controls">
					<select name="employee_reportsto">
						<option>[Choose Person]</option>		
					  	<option>Romelo Noel Santos</option>
					  	<option>Rey Ner</option>
					  	<option>Me-Anne Bundalian</option>
					  	<option>Nedy Roan</option>
					  	<option>Mylen Pascual</option>
					  	<option>Almer John Viloria</option>
					  	
					</select>
				</div>
			</div>
		</div>
		<div class="span6">
			<div class="control-group">
				<label class="control-label" for="employee_number">Employee #:</label>
				<div class="controls">
					<input type="text" id="employee_number" placeholder="" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="employee_biometricsnumber">Biometrics #:</label>
				<div class="controls">
					<input type="text" id="employee_biometricsnumber" placeholder="" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="employee_tin">TIN:</label>
				<div class="controls">
					<input type="text" id="employee_tin" placeholder="" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="employee_philhealth">Philhealth:</label>
				<div class="controls">
					<input type="text" id="employee_philhealth" placeholder="" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="employee_sss">SSS:</label>
				<div class="controls">
					<input type="text" id="employee_sss" placeholder="" />
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="control-group">
				<label class="control-label" for=""></label>
				<div class="controls">
					<button type="submit" class="btn btn-small btn-danger">Submit</button>
					<button type="submit" class="btn btn-small">Cancel</button>
				</div>
			</div>
	</div>
</form>
</fieldset>

@endsection