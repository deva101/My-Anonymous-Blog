<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Online Bootstrap</title>
	<meta name="description" content="Hello World">
	<?php $this->load->view('includes/admin_header'); ?>

    <!-- Apply Styling to body -->
    <link type="text/css" rel="stylesheet"  href="<?php echo base_url();?>css/admin_style.css" >   


<script type="text/javascript"></script>
</head>

<body>
<br><br><br><br>
<?php $this->load->view('menu_admin'); ?>



<div class="container">
	<h1>Admin Panel</h1>




</div>






<?php $this->load->view('includes/footer.php');?>
</body>
</html>