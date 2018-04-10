<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Online Bootstrap</title>
	<meta name="description" content="Hello World">
	<?php $this->load->view('includes/admin_header'); ?>
    
    <!-- Apply Styling to body -->
    <link type="text/css" rel="stylesheet"  href="<?php echo base_url();?>css/admin_style.css" >   

</head>

<body>
<br><br><br><br>
<?php $this->load->view('menu_admin'); ?>




<div class="container">
<h1>What do u want to do</h1>
<h2>Change status to:</h2>
<form action="<?php echo base_url();?>/index.php/admin/changestatus/<?php echo $data; ?>" method="post">
    <div class="form-group">
    <div class="radio">
      <label>
        <input type="radio" name="status" required value="Active">
        Active
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="status" required value="Pending">
        Pending 
      </label>
    </div>
  
    <div class="radio">
      <label>
        <input type="radio" name="status" required value="Rejected">
        Rejected
      </label>
    </div>
    <!-- <pre><?php  var_dump($data) ?></pre> -->
    <input type="submit" value="Submit" class="btn btn-primary">
  </div>
  </div>
</form>
</div>












<?php $this->load->view('includes/footer.php');?>
</body>
</html>