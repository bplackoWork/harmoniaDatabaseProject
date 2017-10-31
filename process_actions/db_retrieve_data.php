<?php
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


$db_obj = $get_forms_results;

?>