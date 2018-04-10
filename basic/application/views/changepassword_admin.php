<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Online Bootstrap</title>
	<meta name="description" content="Hello World">
	<?php $this->load->view('includes/admin_header'); ?>

    <!-- Apply Styling to body -->
    <link type="text/css" rel="stylesheet"  href="<?php echo base_url();?>css/admin_style.css" >   
    
<style type="text/css">
label{
	display:block;
}
</style>

<script type="text/javascript"></script>
</head>

<body>
<br><br><br><br>
<?php $this->load->view('menu_admin'); ?>







<div class="container">
	<h1>Change Pwd:</h1>

	<form action="<?php echo base_url()?>index.php/admin/checkpassword" method="post">
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
</body>
</html>