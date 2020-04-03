<?php 
extract($_POST);
if(isset($update))
{
mysqli_query($conn,"update notice set subject='$sub',Description='$details' where notice_id='".$_GET['notice_id']."'");
$err="<font color='blue'>Notice updated </font>";

}

//select old notice 

$q=mysqli_query($conn,"select * from notice where notice_id='".$_GET['notice_id']."'");
$res=mysqli_fetch_array($q);

?>
<h2><b><font color='green'>UPDATE NOTICE</font></b></h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row" style="margin-top:70px">
		<div class="col-sm-4">Enter Subject</div>
		<div class="col-sm-5">
		<input type="text" name="sub" value="<?php echo $res['subject']; ?>" class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8"></div>
	</div>	
	
	<div class="row">
		<div class="col-sm-4">Enter Details</div>
		<div class="col-sm-5">
		<textarea name="details" class="form-control"><?php echo $res['Description']; ?></textarea></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8"></div>
	</div>	
	
	<div class="row">
		<div class="col-sm-4">Select Department</div>
		<div class="col-sm-5">
		<select name="department" multiple="multiple" class=form-control>
  <option value="<?php echo $res['department']; ?>">Computing and Information Systems</option>
  <option value="<?php echo $res['department']; ?>">Physical Sciences and Technologies</option>
  <option value="<?php echo $res['department']; ?>">Food Science and Technology</option>
  <option value="<?php echo $res['department']; ?>">Natural Resources</option>
  <option value="<?php echo $res['department']; ?>">Sport Science and Physical Education</option>
</select>
		</div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Update Notice" name="update" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	
