<?php
$flag=0;
if(isset($_SESSION["id"])){
		header('location:profile.php');
$flag=1;
echo $flag;
}

?>
<?php
include 'core/db/connect.php';
include 'includes/general/head.php';
?>
<?php
	
	if($flag==1){
	
		header('location:profile.php');
		
	}
	$action= $_GET['action'];
	$email=$_GET['email'];
	$emailcode=$_GET['emailcode'];
	$active=1;
	$activestate;
	if($action=='activation'){
		$sql = "SELECT active FROM user WHERE `email`='$email' AND `emailcode`='$emailcode'";
	        $query = mysqli_query($con, $sql); 
			$activation_check = mysqli_num_rows($query);
		$sqll = "SELECT active FROM user WHERE `email`='$email'";
	        $queryy = mysqli_query($con, $sqll); 
			$activation_email_check = mysqli_num_rows($queryy);
			
	if($activation_email_check<1){
		
		
		echo "We can't find you friend. Email is not registered with us";
        echo "<span style='height:36px;padding:5px;background-color: rgb(255, 156, 0);'>If you are a registered user , kindly <a href=\"login.php\"> log in</a></span>";
       ?>
				
				<?php
header('refresh: 10; url=login.php'); // redirect the user after 10 seconds
#exit; // note that exit is not required, HTML can be displayed.
?>
<p>You will be redirected in <span id="counter">10</span> second(s).</p>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'login.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>
				
				<?php
	}else if($activation_check<1){
		
		
		echo "We can't find you friend. Emailcode is not matching with your assigned code. Have you clicked correct link?";
        echo "<span style='height:36px;padding:5px;background-color: rgb(255, 156, 0);'>If you are a registered user , kindly <a href=\"login.php\"> log in</a></span>";
       ?>
				
				<?php
header('refresh: 10; url=login.php'); // redirect the user after 10 seconds
#exit; // note that exit is not required, HTML can be displayed.
?>
<p>You will be redirected in <span id="counter">10</span> second(s).</p>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'login.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>
				
				<?php
		
	}
			else{
				while($run_mem = mysqli_fetch_array($query)){
				$activestate=$run_mem['active'];
				
				}
				
			if($activestate==1){
			echo $flag;
				echo "user is already activated";
	echo "<span style='height:36px;padding:5px;background-color: rgb(255, 156, 0);'>If you are a registered user , kindly <a href=\"login.php\"> log in</a></span>";
      ?>
				
				<?php
header('refresh: 10; url=login.php'); // redirect the user after 10 seconds
#exit; // note that exit is not required, HTML can be displayed.
?>
<p>You will be redirected in <span id="counter">1</span> second.</p>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'login.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>
				
				<?php
       				}
			
			else{
				 $sql = "UPDATE user SET active='{$active}' WHERE `email`='$email' AND `emailcode`='$emailcode'";
				$user_id= user_id_from_email($email);
				$query = mysqli_query($con, $sql); 
				$sql = $con->query("INSERT INTO events_reg (user_id) Values ('{$user_id}')");
         	
				echo "account activated";
				echo "<span style='height:36px;padding:5px;background-color: rgb(255, 156, 0);'>kindly <a href=\"login.php\"> log in</a></span>";
				
header('refresh: 10; url=login.php'); // redirect the user after 10 seconds
#exit; // note that exit is not required, HTML can be displayed.
?>
<p>You will be redirected in <span id="counter">10</span> second(s).</p>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'login.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>
<?php
       
				}
				
				}
			
	}
	else {
		header('location: ../../login.php');
	}
			
	?>
	
	
			