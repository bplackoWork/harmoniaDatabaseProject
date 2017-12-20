<?php

$formal_form_number = $_POST['formal_form_number'];
$form_number = $_POST['form_number'];
$form_title = $_POST['form_title'];
$abolished = $_POST['abolished'];
$serialized = $_POST['serialized'];
$usage_type = $_POST['usage_type'];
$ndc_distributed = $_POST['ndc_distributed'];
$last_refresh_date = $_POST['last_refresh_date'];
$next_refresh_date = $_POST['next_refresh_date'];
$cbp_control_office = $_POST['cbp_control_office'];
$program_code = $_POST['program_code'];
$poc_email = $_POST['poc_email'];
$poc_secondary_email = $_POST['poc_secondary_email'];
$omb_control_number = $_POST['omb_control_number'];
$omb_exp_date = $_POST['omb_exp_date'];

$form_data_insert_string = "insert into Forms VALUES ('".$formal_form_number."', '".$form_number."', '".$form_title."', '".$abolished."', '".$serialized."', '".$usage_type."', '".$ndc_distributed."', '".$last_refresh_date."', '".$next_refresh_date."', '".$cbp_control_office."', '".$program_code."', '".$poc_email."', '".$poc_secondary_email."', '".$omb_control_number."', '".$omb_exp_date."')";

$form_data_insert = $conn->query($form_data_insert_string);

$aaData = $usage_type;

?>