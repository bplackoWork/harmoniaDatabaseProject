<div id="forms_info_container">
	<form id="form_info_submit" name="form_info_submit">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						<label for="">Formal Form Number: </label>
						<input type="text" class="required_input" name="formal_form_number">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label for="">Form Number: </label>
						<input type="text" class="required_input" name="form_number">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label for="">Form Title:</label>
						<input type="text" class="required_input" name="form_title">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label for="">Abolished - Yes:</label>
						<input type="radio" name="abolished" value="yes">
						<label for="">Abolished - No:</label>
						<input type="radio" name="abolished" value="no">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label for="">Serialized - Yes:</label>
						<input type="radio" name="serialized" value="yes">
						<label for="">Serialized - No:</label>
						<input type="radio" name="serialized" value="no">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label for="">Usage Type:</label>
						<select name="usage_type" class="required_input" id="usage_type">
							<option value="" disabled selected>Select Usage</option>
							<option value="public">Public</option>
							<option value="internal">Internal</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label for="">NDC Distributed - Yes:</label>
						<input type="radio" name="ndc_distributed" value="yes">
						<label for="">NDC Distributed - No:</label>
						<input type="radio" name="ndc_distributed" value="no">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label for="">Previous Refresh Date::</label>
						<input type="date" id="last_refresh_date" class="required_input" name="last_refresh_date" value="">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label for="">Next Refresh Date: </label>
						<input type="date" id="next_refresh_date" class="required_input" name="next_refresh_date" value="" readonly>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label for="">CBP Office of Control:</label>
						<select name="cbp_control_office" id="cbp_control_office" class="required_input">
							<option value="" disabled selected>Select Office</option>
							<option value="ofo">Office of the Commissioner</option>
							<option value="internal">U.S. Border Patrol</option>
							<option value="public">Air &amp; Marine Operations</option>
							<option value="internal">Office of Field Operations</option>
							<option value="public">Office of Trade</option>
							<option value="internal">Enterprise Services</option>
							<option value="internal">Operations Support</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label for="">Program Code:</label>
						<input type="text" name="program_code">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label for="">Primary Contact Email:</label>
						<input type="text" class="required_input" name="poc_email">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label for="">Secondary Contact Email:</label>
						<input type="text" name="poc_secondary_email">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label for="">OMB Control Number:</label>
						<input type="text" name="omb_control_number">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label for="">OMB Expiration Date:</label>
						<input type="date" name="omb_exp_date">
					</div>
				</div>
				<input type="hidden" name="controller_task" value="insert_data">
				<div class="row">
					<div class="col-md-12">
						<input type="submit" name="submit" id="submit_btn" value="Submit">
					</div>
				</div>
			</div>
		</div>
	</form>
</div>