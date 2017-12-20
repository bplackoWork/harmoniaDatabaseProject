function buildPageBody(task_clicked){
	var task_route = {
		'forms_lookup': function(){
			return renderRetrieve();
		},
		'form_entry': function(){
			return;
		},
		'default': function(){
			return renderRetrieve();
		}
	};

	if(task_clicked == "default")
	{
		task_clicked = "forms_lookup";
	}

	$.ajax({
  		url: "../pages/"+task_clicked+".php",
  		cache: false
	})
  	.done(function( html ) {
    	$( "#page_body" ).empty().append( html );
    	task_route[task_clicked]();
  	});
}

function formInsertData(db_data_obj){
	$.ajax({
		url: "../process_actions/connection_handler.php",
		type: "POST",
		data: db_data_obj.serializeArray(),
		success: function(data){
			alert("YAY!");
		}
	});
}

function futureDate(){
	var date_val = $('#last_refresh_date').val();
	
	let f_date = new Date(date_val.replace(/-/g, '\/'));

	var curr_date = ''+f_date.getDate();
	var curr_month = ''+f_date.getMonth();
	curr_month++;

	if(curr_month.length < 2)
	{
		curr_month = '0'+curr_month;
	}
	if(curr_date.length < 2)
	{
		curr_date = '0'+curr_date;
	}

	var curr_year = f_date.getFullYear();
	curr_year = curr_year + 3
	
	var future_date_val = curr_year +"-" + curr_month + "-" + curr_date;
	
	$('#next_refresh_date').val(future_date_val);
}

function renderRetrieve(){
	var data = {};
	data.controller_task = "retrieve_data";

	var table = $('#forms_db_table').DataTable({
		"processing": true,
		"serverside": true,
		"language": {
      		"zeroRecords": "No data available in table"
    	},
		"ajax": {
			"url": "../process_actions/connection_handler.php",
			"type": "POST",
			"dataSrc": function(json){
				if(!json.data){
					json.data = [];
				}
				return json.data;
			},
			"data": data
		},
		"columns": [
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
	        { data: 'omb_exp_date',
	        "defaultContent": "" }
		],
	    "columnDefs": [
	    	{
	    		"targets": [2],
	    		"visible": false,
	    		"searchable": true
	    	},
	    	{
	    		"targets": [3],
	    		"visible": false,
	    		"searchable": true
	    	},
	    	{
	    		"targets": [4],
	    		"visible": false,
	    		"searchable": true
	    	},
	    	{
	    		"targets": [5],
	    		"visible": false,
	    		"searchable": true
	    	},
	    	{
	    		"targets": [8],
	    		"visible": false,
	    		"searchable": true
	    	},
	    	{
	    		"targets": [10],
	    		"visible": false,
	    		"searchable": true
	    	},
	    	{
	    		"targets": [11],
	    		"visible": false,
	    		"searchable": true
	    	},
	    	{
	    		"targets": [12],
	    		"visible": false,
	    		"searchable": true
	    	}
	    ]
	});

	$('a.toggle-vis').on( 'click', function (e) {
        e.preventDefault();
 
        // Get the column API object
        var column = table.column( $(this).attr('data-column') );
 
        // Toggle the visibility
        column.visible( ! column.visible() );
    } );
}

function requiredValueCheck(){

	$('#form_info_submit').on('submit', function(e){
		var failed = 0;
		e.preventDefault();

		$('.required_input').each(function(){
			if($('.required_input').val() == "")
			{
				failed = 1;
				$(this).css("background-color", "red", "display", "none");
				$(this).fadeIn(5000);
				//return;
			}
		});

		if(failed == 0)
		{
			var form_info_submit = $('#form_info_submit');
			formInsertData(form_info_submit);
		}
		else
		{
			alert('SHIT!');
		}
	});
}

function colorReset(){
	
}

$( document ).ready(function() {
	buildPageBody('default');
});

$(document).ajaxComplete(function(){
	$('#last_refresh_date').change(function(){
		futureDate();
	});

	$('.required_input').on({
		focus: function(){
			if($(this).css("background-color") == 'rgb(255, 0, 0')
			{
				$(this).css("background-color", "white");
			}
		},
		blur: function(){
			if($(this).css("background-color") == 'rgb(255, 0, 0')
			{
				$(this).css("background-color", "white");
			}
		}
	});

	requiredValueCheck();
	//colorReset();
});