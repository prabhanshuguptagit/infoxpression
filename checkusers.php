<!DOCTYPE html>

<html class="no-js">
<?php include 'includes/general/head.php';

	
$user1=$session_user_id;		
?>


<link rel="stylesheet" href="css/profile.css">
<body id="body">
	<?php include 'includes/general/userheader.php'?>
	<div class="container">
		<div class="row">
			
			<?php
			
				$user_id=$_SESSION['user_id'];//jo logged in hai
				
			$profile_data =user_data($user_id,'name','email','username','mobile','state','batch','branch','institute','profilepic','type');
				
			$institute=profileinstitute($profile_data['institute']);
					$branch=profilebranch($profile_data['branch']);
					$batch=profilebatch($profile_data['batch']);
					$state=profilestate($profile_data['state']);
			$type=$profile_data['type'];
			
			
			$noofuser= get_no_of_user()+2;
			
			$noofactiveuser= get_no_of_active_user();
			
			 include 'includes/general/useraside.php';?>
			<div class="col-md-1"></div>
			
			
			<div class="col-md-8" id="content">
			 <div class="myevent row">

			<div class="col-xs-6"><?php echo "Search Bar Coming Soon...";
			?></div>
			<div class="col-xs-3"></div>
			
			<div class="col-xs-1">
		
			
			</div>
			
			
			<div class="col-xs-2">
			</div>
			</div>
			
			
		
   
			  <div class="myevent row">

			<div class="col-xs-6"><h4><?php echo "Number of registered users: &nbsp;".$noofuser;
			?></h4></div>
			<div class="col-xs-6"><h4>
			<?php echo "Number of Active users: &nbsp;".$noofactiveuser;
			?></h4>
			
			</div>
			
			<div class="col-xs-1">
		
			
			</div>
			<div class="col-xs-2">
			</div>
			</div>
			
			<div class="newevent text-center">
			
				  <ul class="pagination">
				    <li>
				      <a href="#" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      </a>
				    </li>
				    <li><a href="#">1</a></li>
				    <li class="active"><a href="#">2</a></li>
				    <li><a href="#">3</a></li>
				    <li><a href="#">4</a></li>
				    <li><a href="#">5</a></li>
				    <li>
				      <a href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				      </a>
				    </li>
				  </ul>
				  
				  <div class="row">
				  <div class="col-md-3"></div>
				  <div class="col-md-3 col-xs-6">
				  <h4>Type of Users</h4>
				  <select id="results" class="form-control" onchange="typesort(this.value)">
    					<option value="All" selected="selected">All</option>
    					<option value=".notgoing">Active</option>
    					<option value=".going">Inactive</option>
  				  </select>
  				  </div>
  				  
  				  <script>
				 	function typesort(sort_type){
				 		$('.notgoing').show();
				 		$('.going').show();
				 		$(sort_type).hide();
				 	}//for sorting
				  </script>
				
				<div class="col-md-3 col-xs-6">
				<h4>Number of results</h4>
				  <select id="sort" class="form-control" onchange="pagination(this.value)"> 
    					<option value="50" selected="selected">50</option>
    					<option value="100">100</option>
    					<option value="300">300</option>
    					<option value="all">All</option>
  				  </select>
  				 </div> 
  				  </div>
  				  <script>
  				  	function pagination(number_of_results){
  				  	//Do pagination stuff here.
  				  	}
  				  </script>
				  
			</div>
			 
			 <ul class="userslist col-xs-12">
			 <li class="row">
			 	<div class="col-xs-4"><h4>Name</h4></div>
			 	<div class="col-xs-6"><h4>E-mail</h4></div>
			 	<div class="col-xs-2"><h4><input id="selectall" type="checkbox" name="users" value="all">&nbsp;Select all</h4> </div>
			 	
			 </li>
			 <script>$("#selectall").change(function () {
				    $("input:checkbox").prop('checked', $(this).prop("checked"));
				});
			</script>
				
			 <?php
			 
			for($i = 1; $i <=$noofuser ; $i++){
			$user_data=user_data($i,'name','email','username','mobile','state','batch','branch','institute','profilepic','active','type');
			$is_active=$user_data['active'];
			?>
			<li class="row users <?php if($is_active ==0) echo ' notgoing '; else echo ' going '; ?>  ">
			<div class="col-xs-4"><?php  echo $i; echo "&nbsp;&nbsp;"; echo $user_data['name'];?></div>
			<div class="col-xs-6"><?php echo $user_data['email'];?></div>
			
			
			<div class="col-xs-1">
			<input type="checkbox" name="vehicle" value="Bike"><br>
			
			</div>
			<div class="col-xs-1"></div>
			
			</li>
			<?php 
			}
			
			?>
			
			</ul>
			
			
			<div class="newevent text-center">
			
				  <ul class="pagination">
				    <li>
				      <a href="#" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      </a>
				    </li>
				    <li><a href="#">1</a></li>
				    <li class="active"><a href="#">2</a></li>
				    <li><a href="#">3</a></li>
				    <li><a href="#">4</a></li>
				    <li><a href="#">5</a></li>
				    <li>
				      <a href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				      </a>
				    </li>
				  </ul>
	
			</div>
			
			
		</div>	
		
	</div>
		
	
	</div>

	<?php include'includes/general/footer.php';?>

	<script> //handle later var e=document.getElementsByClassName("add-event"); e.onmouseover = function() { alert("Add event");} 
	</script>


</body>

</html>