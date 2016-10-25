<?php
include "core/init.php";
if(!empty($_POST["event_id"])) {
	$query ="SELECT * FROM event_part ";
	$resultb = runQuery($query);
?>
	<option value="">Select Part</option>
<?php
	foreach($resultb as $part) {
?>
	<option value="<?php echo $part["part_id"]; ?>"><?php echo $part["part_name"]; ?></option>
<?php
	}
}
?>`