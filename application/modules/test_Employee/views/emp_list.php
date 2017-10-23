<ul class="listbox_round_class">
	<?php  foreach($emp_list as $employee){ ?>
	<li><input type="checkbox" name="<?php echo $flag.'_id[]'; ?>" class="employee <?php echo $flag; ?>" value="<?php echo $employee['emp_id']; ?>"><?php echo $employee['name']; ?></li>
	<?php } ?>
<ul>