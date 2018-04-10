<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Online Bootstrap</title>
	<meta name="description" content="Hello World">
<?php $this->load->view('includes/import.php');?>	




<!-- For un sccessful Registration -->
<!-- <script type="text/javascript">
	function activate_signup(){
	    $('#modal-signup').modal('show');
	  }
</script>
 -->
</head>

<body class="jumbotron first_page">

<br><br><br><br><br><br>
<!-- Center Message -->
<div class="container text-center">
	<h1 style="color:#2DCC70;">Lorem Ipsum</h1>
    <p style="color:#FFFFFF;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consectetur</p>
</div>
<!-- Center Message End-->


<!-- Search -->
<div class="container">
	<div class="row">
		<center>
		<div class="input-group col-md-7">
            
            <input type="text" class="search-query form-control" placeholder="Search" />
                <span class="input-group-btn">
                    <span class="btn btn-danger" type="button"><span class=" glyphicon glyphicon-search"></span></span>
                </span>
        
        </div>
        </center>        
	</div>
</div> 
<!-- Search End -->




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
