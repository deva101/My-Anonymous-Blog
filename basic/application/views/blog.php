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


/*For Show More or Less */
.show {
    font:normal 15px arial;
    text-align: justify;
  padding: 15px 0 0 0;
}
.morectnt span {
display: none;
}
.showmoretxt {
    font: bold 15px tahoma;
    text-decoration: none;
}

</style>

<!-- For Show More or Less -->
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script>
$(function() {
var showTotalChar = 200, showChar = "Show (+)", hideChar = "Hide (-)";
$('.show').each(function() {
var content = $(this).text();
if (content.length > showTotalChar) {
var con = content.substr(0, showTotalChar);
var hcon = content.substr(showTotalChar, content.length - showTotalChar);
var txt= con +  '<span class="dots">...</span><span class="morectnt"><span>' + hcon + '</span>&nbsp;&nbsp;<a href="" class="showmoretxt">' + showChar + '</a></span>';
$(this).html(txt);
}
});
$(".showmoretxt").click(function() {
if ($(this).hasClass("sample")) {
$(this).removeClass("sample");
$(this).text(showChar);
} else {
$(this).addClass("sample");
$(this).text(hideChar);
}
$(this).parent().prev().toggle();
$(this).prev().toggle();
return false;
});
});
</script>

</head>

<body>






<br><br><br><br><br>
<div class="container">

<?php foreach($data as $row): ?>
    <div class="col-md-9 blogShort ">
        <h1><?php echo $row->title;    ?></h1>
        
        <img src="http://www.kaczmarek-photo.com/wp-content/uploads/2012/06/guinnes-150x150.jpg" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">
                     
        <em>(<?php  echo $row->date; ?>) <a href="<?php echo base_url() ?>index.php/start/postbyuser/<?php echo $row->userid ?>" target="_blank" <?php if($row->identity == 'Hidden')echo "class='not-active'"; ?> >All Posts written by the user</a></em>
        <article class="show"><p>
            <?php  echo $row->message;    ?>
        </p></article>

         <div>
            <p>by-<?php  
            if ($row->identity == 'Hidden') {
                echo "Anonymous";
            }else{
                 echo $row->username;
            }

             ?></p>

         </div>
         
                
        <a class="btn btn-blog pull-right marginBottom10" href="<?php echo base_url() ?>/index.php/start/readfullarticle/<?php echo $row->postid  ?>">Read Full Post Here</a> 
    </div>
    <?php   endforeach;      ?> 
</div>           
     

















<!-- For Show More or Less -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38304687-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>




<?php $this->load->view('includes/footer.php');?>
</body>
</html>