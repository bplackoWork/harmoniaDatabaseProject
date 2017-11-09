<?php
$columns = array(
	array( 'db' => 'form_number', 'dt' => 0 ),
	array( 'db' => 'form_title', 'dt' => 1 ),
	array( 'db' => 'abolished', 'dt' => 2 ),
	array( 'db' => 'serialized', 'dt' => 3 ),
	array( 'db' => 'usage_type', 'dt' => 4 ),
	array( 'db' => 'ndc_distribution', 'dt' => 5 ),
	array( 'db' => 'last_refresh_date', 'dt' => 6 ),
	array( 'db' => 'cbp_office_control', 'dt' => 7 ),
	array( 'db' => 'program_code', 'dt' => 8 ),
	array( 'db' => 'poc_email', 'dt' => 9 ),
	array( 'db' => 'poc_secondary_email', 'dt' => 10 ),
	array( 'db' => 'omb_control_number', 'dt' => 11 ),
	array( 'db' => 'omb_expiration_date', 'dt' => 12 )
);

//processing code for retrieving data
$get_form_data_string = "select * from Forms";

$get_form_data_result = $conn->query($get_form_data_string);

if ($get_form_data_result->num_rows > 0)
{
	while($get_form_data_result_row = $get_form_data_result->fetch_assoc())
	{
		$get_forms_results[] = $get_form_data_result_row;
	}
}
else
{
	//echo "0 results";
}

$output = array(
	"draw" => intval( $_REQUEST['draw'] ),
	"recordsTotal" => intval( $totaldata ),
	"recordsFiltered" => intval( $totalfiltered ),
	"data" => $get_forms_results,
	"columns" => $columns
);

$aaData = $output;

?>