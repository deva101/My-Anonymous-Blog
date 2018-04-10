<!--Header-->
<nav class="navbar navbar-transparent navbar-fixed-top" id="my-navbar">
<div class="container">
  <div class="navbar-header">

    <div type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" style="background:black;">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
    </div>

    <a href="<?php echo base_url()?>index.php/admin" class="navbar-brand">Lorem Ipsum</a>
  </div>
<!--End Of Header-->


<div class="container">
<!--Right Side-->
<div class="dropdown show">
  <ul class="nav navbar-nav navbar-right"  >
    <li><a href="" class="btn btn-secondary dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="glyphicon glyphicon-user"></span> Welcome  <?php echo $this->session->userdata('client_name'); ?> <span class="caret"></span>     
      </a>


  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="<?php  echo base_url('index.php/admin/logout');  ?>">LogOut</a><br>
    <a class="dropdown-item" href="<?php echo base_url()?>index.php/admin/changepwd">Change Password</a>    
  </div>
  </ul>

</div>
  
<!--Right Side End-->

<!--Left Side-->        
<div class="collapse navbar-collapse" id="navbar-collapse" ><!--title-->
  <ul class="nav navbar-nav">
        <li ><a href="<?php echo base_url()?>index.php/admin/users" class="hvr-radial-out">Users</a></li>
        <li ><a href="<?php echo base_url()?>index.php/admin/posts" class="hvr-radial-out">Post</a></li>        
  </ul>
</div>
<!--Left Side End-->

</div>
</nav>