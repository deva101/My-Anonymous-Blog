<nav class="navbar navbar-transparent navbar-fixed-top" id="my-navbar">

<div class="container">

<!--Header-->
  <div class="navbar-header">

    <div type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" style="background:black;">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
    </div>

    <a href="<?php echo base_url()?> " class="navbar-brand">Lorem Ipsum</a>
  </div>
<!--End Of Header-->



<!--Right Side-->
<?php
$login=$this->session->userdata('client_name');
if(!isset($login)){       ?>
  <ul class="nav navbar-nav navbar-right">
    <li><a href="" data-toggle="modal" data-target="#modal-signup" class="hvr-radial-out">
    <span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
    <li><a href="" data-toggle="modal" data-target="#modal-signin" class="hvr-radial-out">
    <span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
  </ul>
<?php   }else{  ?>
<div class="dropdown show">
  <ul class="nav navbar-nav navbar-right"  >
    <li><a href="" class="btn btn-secondary dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="glyphicon glyphicon-user"></span> Welcome <?php echo $login; ?><span class="caret"></span>     
      </a>


  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="<?php  echo base_url('index.php/success_work/logout');  ?>">LogOut</a><br>
    <a class="dropdown-item" href="<?php echo base_url();?>index.php/success_work/changepwd">Change Password</a>     
  </div>
  </ul>

</div>
  <?php    } ?>
<!--Right Side End-->



<!--Left Side-->        
<div class="collapse navbar-collapse" id="navbar-collapse" ><!--title-->
  <ul class="nav navbar-nav">
        <li ><a href="<?php echo base_url()?>index.php/start/aboutus" class="hvr-radial-out">About Us</a></li>
        <li><a  href="" data-toggle="modal" data-target="#modal-post" class="hvr-radial-out">Post</a></li>
        <li><a href="<?php echo base_url()?>index.php/start/blog" class="hvr-radial-out">Blog</a></li>
        <li><a href="<?php echo base_url() ?>index.php/start/contactus" class="hvr-radial-out">Contact Us</a></li>
  </ul>
</div>
<!--Left Side End-->


</div>
</nav>




<!-- Modal for signin -->
  <div class="modal fade" id="modal-signin" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        
        <div class="modal-header">
          <span type="button" class="close" data-dismiss="modal">&times;</span>
          <h4 class="modal-title">Sign In to get instant access to millions of salaries and reviews</h4>
          <a href="#">Sign In with Google</a><br>
          <a href="#">Sign In with Facebook</a><br>
          <a href="#">Sign In with Github</a>
        </div>
        
        <div class="modal-body">
<form action="<?php echo base_url();?>index.php/start/validate_user" method="post">      <!-- #####Form###### -->
      
      <div class="form-group has-success">
        
        <input class="form-control" name="signinuser" type="text" placeholder="Username"  required> <!-- or Email Address  -->
      </div>  

      <div class="form-group has-error">                            
        <input class="form-control" name="signinpassword" type="password" placeholder="Password" required>                
      </div>          

    
    <a href="#">Forgot Password</a>
    <center><button type="submit" class="btn btn-primary">Sign In</button></center>
    <pre><?php  if(isset($msg)){if ($msg=='either username or password is wrong') {
                echo $msg;
    }}        ?> </pre>
</form>
        </div>
        
        <div class="modal-footer">
                    
          Don't have an account?<a data-dismiss="modal" data-toggle="modal" href="#modal-signup">SignUp</a>          
        </div>

      </div>
    </div>
  </div>
<!-- Modal for signin end-->

<!-- for pop-up of model -->
<script type="text/javascript">
/*onclick="activate_signup()"
  function activate_signup(){
    $('#modal-signup').modal('show'); 
  }*/
</script>



<!-- Modal for signup(Register) -->
<div class="modal fade" id="modal-signup" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        
      <div class="modal-header">
         <span type="button" class="close" data-dismiss="modal">&times;</span>
         <h2 class="modal-title text-center">Register</h2>          
      </div>
        
      
      <div class="modal-body">
        <div class="container">

<form class="form-horizontal" action="<?php echo base_url();?>index.php/start/validate_register" method="post">
  <fieldset>
     
    <!-- Username-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Username">Username</label>
      <div class="col-md-3">
        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
          <input name="username" type="text" class="form-control input-md" placeholder="Enter Username" required value="<?php echo set_value('username');  ?>">
        </div>
      </div>
    </div>

    <!-- Email-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Email">Email</label>
      <div class="col-md-3">
        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
          <input name="email" type="email" placeholder="Enter Your Email" class="form-control input-md" required value="<?php  echo set_value('email');  ?>">
        </div>
      </div>
    </div>
    
    <!-- Password input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Password">Password</label>
      <div class="col-md-3">
        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
          <input name="password" type="password" placeholder="Enter Your Password" class="form-control input-md" required>
        </div>
      </div>
    </div>
    
    <!-- Password input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="ConfirmPassword">Confirm Password</label>
      <div class="col-md-3">
        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
          <input name="password2" type="password" placeholder="Enter Your Password Again" class="form-control input-md" required>
        </div>
      </div>
    </div>
    
    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Submit"></label>
      <div class="col-md-4">
        <button id="Submit" class="btn btn-success" type="Submit">Register</button>
      </div>
    </div>


  </fieldset>
</form>
<?php  echo validation_errors();   ?>


        </div>
      </div>
      
      <div class="modal-footer">
      </div>

      </div>
    </div>
  </div>
<!-- Modal for signup(Register) end-->

<!-- Posting an article -->
  <div class="modal fade" id="modal-post" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        
        <div class="modal-header">
          <span type="button" class="close" data-dismiss="modal">&times;</span>
          <h2 class="text-center">Post</h2>
        </div>
        
        <div class="modal-body">
          <form action="<?php echo base_url();?>index.php/success_work/post/" method="post">
            <h3><input style="margin:0px auto; display:block; text-align:center;" type="text" name="title" placeholder="Title(optional)" ></h3>

            <label class="pull-right">
              <input type="checkbox" data-error="Before you wreck yourself" name="anonymous" value="Y" >Anonymous
            </label>
            <textarea name="msg" class="jqte-test" placeholder="What in ur mind..." required></textarea>       
        
               <button class="btn btn-primary" type="submit">Post!</button>       
            </form>
        </div>

      </div>
    </div>
  </div>

<script>
  $('.jqte-test').jqte();
  
  // settings of status
  var jqteStatus = true;
  $(".status").click(function()
  {
    jqteStatus = jqteStatus ? false : true;
    $('.jqte-test').jqte({"status" : jqteStatus})
  });
</script>
<!-- Posting an article End -->