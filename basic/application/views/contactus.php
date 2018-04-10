<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Online Bootstrap</title>
    <meta name="description" content="Hello World">
<?php $this->load->view('includes/import.php');?>  

<style type="text/css">
body, html {
    height: 100%;
}

.parallax {
    /* The image used */
    background-image: url("<?php echo base_url(); ?>images/sweet_basil.jpg");

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
h2.page-title { 
    font-family: 'brandon_grotesque_regularRg', Arial, 'sans-serif'; 
    font-size: 95px; 
    font-weight: normal; 
    text-transform: uppercase; 
    color: #FDFCF8; 
    position: relative; 
    top: -105px; 
    margin: 0 auto; 
    width: 780px;
}
</style>

</head>

<body>



<div class="parallax"></div>

<div style="height:1000px;background-color:white;">
    <h2 class="page-title">Contact Us</h2> 

<div class="container">
    <p>Lorem Ipsum</p>
    <p>111 abc</p>
    <p>Vail, CO 11111</p>
    <p>Tel: 1111111</p>
    <p>Fax: 1111111</p>
    <p>E-mail: info@abc.com</p>
</div>








</div>

<div class="parallax"></div>




































 <?php $this->load->view('includes/footer.php');?>    
</body>	
</html>