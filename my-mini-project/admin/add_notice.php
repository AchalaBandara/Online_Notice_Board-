<?php 
extract($_POST);
if(isset($add))
{

	if($details=="" || $sub=="" || $department=="")
	{
	$err="<font color='red'>Fill all the fileds first</font>";	
	}
	else
	{
		foreach($department as $v)
		{
mysqli_query($conn,"insert into notice values('','$v','$sub','$details',now())");
		}
		
		$err="<font color='red'>Notice added Successfully</font>";	
	}
}

?>


<h2><b><font color='green'>ADD NEW NOTICE</font></b></h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row" style="margin-top:70px">
		<div class="col-sm-4">Enter Subject</div>
		<div class="col-sm-5">
		<input type="text" name="sub" class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8"></div>	
	</div>
	
	<div class="row">
		<div class="col-sm-4">Enter Details</div>
		<div class="col-sm-5">
		<textarea name="details" class="form-control"></textarea></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8"></div>
	</div>	
	
	<div class="row">
		<div class="col-sm-4">Select Department</div>
		<div class="col-sm-5">
		<select name="department[]" multiple="multiple" class="form-control">
		
		
  <option value="C">Computing and Information Systems</option>
  <option value="P">Physical Sciences and Technologies</option>
  <option value="F">Food Science and Technology</option>
  <option value="N">Natural resourses</option>
  <option value="S">Sport Science and Physical Education</option>
  
</select>
		
		</div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8"></div>
</div>		
		
		<div class="row" style="margin-top:20px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Add New Notice" name="add" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
		
	</div>
</form>	
