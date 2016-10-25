<?php
include "core/init.php";
if(!empty($_POST["degree_id"])) {
	$query ="SELECT * FROM branch WHERE degree_id = '" . $_POST["degree_id"] . "'";
	$resultb = runQuery($query);
?>
	<option value="">Select Branch</option>
<?php
	foreach($resultb as $branch) {
?>
	<option value="<?php echo $branch["branch_id"]; ?>"><?php echo $branch["branch_name"]; ?></option>
<?php
	}
}
?>`