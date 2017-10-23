<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Employee Interface</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/listSwap/listswap.css'); ?>" />
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- jQuery library -->

</head>
<body>
<div class="container">
	<h1>Employee Interface</h1>
    <hr />
	<pre>
		<?php print_r($employee_list); ?>
	</pre>
	<select name="department" id="dept">
		<?php  foreach($department_list as $department){ ?>
			<option value="<?php echo $department['dept_id']; ?>"><?php echo $department['dept_desc']; ?></option>
		<?php } ?>
	</select>
	<form method="post">
    		<select id="source_2">
                <?php  foreach($employee_list as $employee){ ?>
					<option value="<?php echo $employee['emp_id']; ?>"><?php echo $employee['name']; ?></option>
				<?php } ?>
            </select>
            <select id="destination_2">
            </select>
    </form>

</div>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-sm-6">asd</div>
		<div class="col-md-6 col-sm-6">asd</div>
	</div>
</div>
<script src="<?php echo base_url('assets/plugins/listSwap/jquery.listswap.js'); ?>"></script>
<script>
$('#source_2, #destination_2').listswap({
	truncate:true, 
	height:162,
	label_add:'', 
	label_remove:'', 
});
</script>
</body>
</html>