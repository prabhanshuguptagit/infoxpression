<?php
include "core/init.php";
if(!empty($_POST["state_id"])) {
	$query ="SELECT * FROM college WHERE state_id = '" . $_POST["state_id"] . "' AND  reviewed='1'";
	$results = runQuery($query);
?>
	<option value="select" disabled selected>Select College</option>
	<?php if($_POST["state_id"] == 30) 
	{echo "<option value=\"35\">USICT</option><option value=\"35\">USCT</option><option value=\"35\">USBT</option>"; }?>
<?php
	foreach($results as $college) {
?>
	<option value="<?php echo $college["college_id"]; ?>"><?php echo $college["college"]; ?></option>
<?php
	}?>
	<option value="0">Other</option>
<?php	
}
?>`