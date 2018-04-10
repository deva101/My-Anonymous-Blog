<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Online Bootstrap</title>
	<meta name="description" content="Hello World">
<?php $this->load->view('includes/import.php');?>	

<style type="text/css">

</style>


</head>

<body class="jumbotron">



<br><br><br><br>








<div class="container">
	<h1>Change Pwd:</h1>

	<form action="<?php echo base_url()?>index.php/success_work/checkpassword" method="post">
	<label>
		<input type="password" name="old" placeholder="Old Password" required><br>
	</label>

	<label>
		<input type="password" name="new1" placeholder="New Password" required><br>
	</label>
	<label>
		<input type="password" name="new2" placeholder="Conform Password" required><br>
	</label>

	<input type="submit" value="Submit" class="btn btn-primary">


	</form>

<?php if(isset($msg)){echo "<pre>$msg</pre>";} ?>
<?php if(isset($validation)){echo "<pre>".validation_errors()."</pre>";  } ?>







</div>
















<?php $this->load->view('includes/footer.php');?>	

<?php if(isset($value)){
if ($value == 'yes'): ?>
	<script> $('#modal-signup').modal('show'); </script>		
<?php endif; }?>

<?php  if(isset($msg)){
if ($msg == 'either username or password is wrong'){ ?>
	<script> $('#modal-signin').modal('show'); </script>		
<?php } }?>

</body>	
</html>