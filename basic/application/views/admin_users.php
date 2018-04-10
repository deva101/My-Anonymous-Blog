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
#myInput {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
    border-collapse: collapse; /* Collapse borders */
    width: 100%; /* Full-width */
    border: 1px solid #ddd; /* Add a grey border */
    font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
    text-align: left; /* Left-align text */
    padding: 12px; /* Add padding */
}

#myTable tr {
    /* Add a bottom border to all table rows */
    border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: #f1f1f1;
}



</style>
<script type="text/javascript">
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

</script>
<script type="text/javascript"></script>
</head>

<body>
<?php $this->load->view('menu_admin'); ?>






<br><br><br><br>
<div class="container">
 <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

<table class="table table-striped " id="myTable">
  <thead>
    <tr>
      <th>#</th>
      <th>User ID</th>
      <th>User Name</th>
      <th>Email</th>
      <th>Delete User</th>
    </tr>
  </thead>
  <tbody>

<?php $i=1; foreach($data as $value):  ?>
    <tr>
      <td scope="row"><?php echo $i;$i++; ?></th>
      <td><?php echo $value->userid; ?></td>
      <td><?php echo $value->username; ?></td>
      <td><?php echo $value->email; ?></td>
      <td><a href="<?php echo base_url('index.php/admin/delete_user')."/$value->userid"?>">Delete</a></td>
    </tr>
<?php endforeach; ?>

  </tbody>
</table>









</div>
















<?php $this->load->view('includes/footer.php');?>
</body>
</html>