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



<div class="container">
<h1>Hello 
<?php 
// echo '<pre>'; print_r($this->session->all_userdata());exit;


$val=$this->session->userdata('client_name');
echo $val;
?>
	



</h1>
</div>


































<?php $this->load->view('includes/footer.php');?>	
</body>	
</html>