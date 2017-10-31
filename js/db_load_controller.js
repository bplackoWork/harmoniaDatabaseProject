function buildTable(table_get_data)
{
	var table = $('#forms_db_table').DataTable( {
	    data: table_get_data,
	    columns: [
	        { data: 'form_number' },
	        { data: 'form_title' },
	        { data: 'abolished' },
	        { data: 'serialized' },
	        { data: 'usage_type' },
	        { data: 'ndc_distribution' },
	        { data: 'last_refresh_date' },
	        { data: 'cbp_office_control' },
	        { data: 'program_code' },
	        { data: 'poc_email' },
	        { data: 'poc_secondary_email',
	        "defaultContent": "" },
	        { data: 'omb_control_number',
	        "defaultContent": "" },
	        { data: 'omb_expiration_date',
	        "defaultContent": "" }
	    ],
	    "columnDefs": [
	    	{
	    		"targets": [2],
	    		"visible": false,
	    		"searchable": false
	    	},
	    	{
	    		"targets": [3],
	    		"visible": false,
	    		"searchable": false
	    	},
	    	{
	    		"targets": [4],
	    		"visible": false,
	    		"searchable": false
	    	},
	    	{
	    		"targets": [5],
	    		"visible": false,
	    		"searchable": false
	    	},
	    	{
	    		"targets": [8],
	    		"visible": false,
	    		"searchable": false
	    	},
	    	{
	    		"targets": [10],
	    		"visible": false,
	    		"searchable": false
	    	},
	    	{
	    		"targets": [11],
	    		"visible": false,
	    		"searchable": false
	    	},
	    	{
	    		"targets": [12],
	    		"visible": false,
	    		"searchable": false
	    	}
	    ]
	} );

	$('a.toggle-vis').on( 'click', function (e) {
        e.preventDefault();
 
        // Get the column API object
        var column = table.column( $(this).attr('data-column') );
 
        // Toggle the visibility
        column.visible( ! column.visible() );
    } );
}

$( document ).ready(function() {
    var query_data = {};
	query_data.controller_task = "retrieve_data";


	$.ajax({
	  method: "POST",
	  url: "../process_actions/connection_handler.php",
	  data: query_data,
	  dataType: "json",
	  success: function(data){
	  		query_return = data;
	  		//alert(query_return[0].form_number);
	  		buildTable(query_return);
	  	}
	  });
	
});