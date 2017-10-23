<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Employee Interface</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- jQuery library -->
	<style>
	
	.source_wrapper, .listboxswap .destination_wrapper {
		width: 40%;
		overflow: hidden;
	}
	.listbox_controls ul {
		list-style: none outside none;
		margin: 0;
		padding: 0;
	}
	
	.source_wrapper ul, .listboxswap .destination_wrapper ul {
    margin: 0;
    padding: 0;
    list-style: none;
    border-color: #CCCCCC;
    border-radius: 0 0 5px 5px;
    border-style: solid;
    border-width: 1px;
    overflow: hidden;
	}
	
	.listbox_round_class {
		border-radius: 5px;
	}
	
	ul{
		list-style: none outside none;
	}
	
	.listbox_controls ul li {
    background: #EEEEEE;
    border: 1px solid #CCCCCC;
    cursor: pointer;
    margin: 0 0 10px;
    padding: 5px 10px;
    text-align: center;
    overflow: hidden;
    border-radius: 50px;
    box-shadow: 0px 10px 5px -10px #CCCCCC;
    color: #333333;
	}
	.listbox_controls ul li:hover {
		background: #CCCCCC;
		border: 1px solid #CCCCCC;
	}
	

	.listbox_controls .add span.arrow:after {
		
		content: "\2192";
	}
	
	.listbox_controls .add span.arrow:before {
		content: "";
	}
	
	.listbox_controls .remove span.arrow:after {
		content: "\2190";
	}
	
	.listbox_controls .remove span.arrow:before {
		content: "";
	}
	ul.listbox_round_class {
		border-radius: 5px;
	}
	</style>
</head>
<body>
<div class="container">
	<h1>Employee Interface</h1>
    <hr />
</div>
<div class="container">
	<div class="row">
	<form action="" name="box1" id="box_1_form">
		<div class="col-md-5 col-sm-5">
			
				<select name="department" id="dept">
				<option value='' hidden>Select Department</option>
				<?php  foreach($department_list as $department){ ?>
					<option value="<?php echo $department['dept_id']; ?>"><?php echo $department['dept_desc']; ?></option>
				<?php } ?>
				</select>
				<div class="box_1 source_wrapper">
				</div>
			
		</div>
		<div class="col-md-2 col-sm-2 listbox_controls">
			<ul>
				<li class="remove"><span class="arrow"></span><span class="label"></span></li>
				<li class="add"><span class="arrow"></span><span class="label"></span></li>
			</ul>
		</div>
		<div class="col-md-5 col-sm-5">
			<select name="grade" id="grade">
				<option value='' hidden>Select Grade</option>
			<?php  foreach($grade_list as $grade){ ?>
				<option value="<?php echo $grade['grade_id']; ?>"><?php echo $grade['grade']; ?></option>
			<?php } ?>
			</select>
			<div class="box_2 source_wrapper">
			</div>
		
		</div>
	</form>
	</div>
</div>
</body>
</html>
<script>
	$(document).ready(function(){
		var base_url="<?php echo base_url(); ?>";
		$("#dept").on("change",function(e){
			var dept_id=$(this).val();
			var action=base_url+'Employee/get_department_employee';
			$.ajax({
				type: "POST",
				url: action,
				data:{dept_id:dept_id},
				success: function(response) 
				{
					$(".box_1").html(response);
				} 
			}); 
			
		})
		
		$("#grade").on("change",function(e){
			var grade_id=$(this).val();
			var action=base_url+'Employee/get_employee_under_grade';
			$.ajax({
				type: "POST",
				url: action,
				data:{grade_id:grade_id},
				success: function(response) 
				{
					$(".box_2").html(response);
				} 
			}); 
		})
		
		$(".add").click(function(){
			var dept_id=$("#dept").val();
			var grade_id=$("#grade").val();
			var update=0;
			if(dept_id && grade_id)
			{
				var $boxes = $('input[name=thename]:checked');
				$(".dept_emp").each(function(element){
					if($(this).is(':checked'))
					{
						update=1;
					}
				})
				if(update)
				{
					var formdata=new FormData($('#box_1_form')[0]);
					var action=base_url+'Employee/add_employee_to_grade';
					$.ajax({
						type: "POST",
						url: action,
						data: formdata,
						contentType: false,
						processData: false,
						success: function(response) 
						{
							console.log(response);
						} 
					}); 
				}

			}else{
				alert('Please Choose Department and grade');
			}
		})
		
		$(".remove").click(function(){
			var dept_id=$("#dept").val();
			var grade_id=$("#grade").val();
			var update=0;
			if(dept_id && grade_id)
			{
				var $boxes = $('input[name=thename]:checked');
				$(".dept_emp").each(function(element){
					if($(this).is(':checked'))
					{
						update=1;
					}
				})
				if(update)
				{
					var formdata=new FormData($('#box_1_form')[0]);
					var action=base_url+'Employee/add_employee_to_grade';
					$.ajax({
						type: "POST",
						url: action,
						data: formdata,
						contentType: false,
						processData: false,
						success: function(response) 
						{
							console.log(response);
						} 
					}); 
				}

			}else{
				alert('Please Choose Department and grade');
			}
		})
	})
</script>