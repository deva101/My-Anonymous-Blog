<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blogs</title>
    <meta name="description" content="Hello World">
<?php $this->load->view('includes/import.php'); ?>
<style type="text/css">

body{
    background-color: #efefef;
    padding-left: 17%;  
}

.blogShort{ 
    border-bottom:1px solid #ddd;
}

.add{
    background: #333; 
    padding: 10%; 
    height: 300px;
}

.btn-blog {
    color: #ffffff;
    background-color: #000066;
    border-color: #000066;
    border-radius:0;
    margin-bottom:10px
}

.btn-blog:hover,
.btn-blog:focus,
.btn-blog:active,
.btn-blog.active,
.open .dropdown-toggle.btn-blog {
    color: white;
    background-color:#34ca78;
    border-color: #34ca78;
}

h1{
    color:#99cc00;
} 

.margin10{
    margin-bottom:10px; 
    margin-right:30px;
}

.not-active {
   pointer-events: none;
   cursor: default;
   color:grey;
}
 
</style>


</head>

<body>






<br><br><br><br><br>
<div class="container">

<?php if(!empty($data) ){  ?>
<?php foreach($data as $row): ?>
    <div class="col-md-9 blogShort">
        <h1><?php echo $row->title;    ?></h1>
        
        <img src="http://www.kaczmarek-photo.com/wp-content/uploads/2012/06/guinnes-150x150.jpg" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">
                     
        <em>(<?php  echo $row->date; ?>) <a href="<?php echo base_url() ?>index.php/start/postbyuser/<?php echo $row->userid ?>" target="_blank" <?php if($row->identity == 'Hidden')echo "class='not-active'"; ?> >All Posts written by the user</a></em>
        <article><p>
            <?php  echo $row->message;    ?>
        </p></article>

         <div>
            <p>by-<?php  
            if ($row->identity == 'Hidden' || $row->identity == NULL ) {
                echo "Anonymous";
            }else{
                 echo $row->username;
            }

             ?></p>

         </div>
                
        <a class="btn btn-blog pull-right marginBottom10" href="<?php echo base_url() ?>/index.php/start/readfullarticle/<?php echo $row->postid  ?>">Read Full Post Here</a> 
    </div>
    <?php   endforeach;      ?> 
    <?php }else{
        echo "<h1>no result found</h1>";
    } ?>

</div>           
     























<?php $this->load->view('includes/footer.php');?>
</body>
</html>