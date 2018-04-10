<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Online Bootstrap</title>
	<meta name="description" content="Hello World">
	<?php $this->load->view('includes/admin_header'); ?>
   
    <!-- Apply Styling to body -->
    <link type="text/css" rel="stylesheet"  href="<?php echo base_url();?>css/admin_style.css" >   
         
<script type="text/javascript">
	(function(document) {
    'use strict';

    var LightTableFilter = (function(Arr) {

        var _input;

        function _onInputEvent(e) {
            _input = e.target;
            var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
            Arr.forEach.call(tables, function(table) {
                Arr.forEach.call(table.tBodies, function(tbody) {
                    Arr.forEach.call(tbody.rows, _filter);
                });
            });
        }

        function _filter(row) {
            var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
            row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
        }

        return {
            init: function() {
                var inputs = document.getElementsByClassName('light-table-filter');
                Arr.forEach.call(inputs, function(input) {
                    input.oninput = _onInputEvent;
                });
            }
        };
    })(Array.prototype);

    document.addEventListener('readystatechange', function() {
        if (document.readyState === 'complete') {
            LightTableFilter.init();
        }
    });

})(document);
</script>


</head>

<body >
<br><br><br><br>
<?php $this->load->view('menu_admin'); ?>



<section class="container">
    <h2>All Posts</h2>

    <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filter">

    <table class="order-table table">
        <thead>
            <tr>
                <th>User Name</th>
                <th>Title</th>
                <th>Message</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody><?php foreach($data as $row): ?>
        	<tr><!--  -->
				<td><?php  echo $row->username;    ?></td>
				<td><?php echo $row->title;    ?></td>
				<td><?php  echo $row->message;    ?></td>
				<td><a href="<?php echo base_url();?>index.php/admin/status/<?php echo $row->postid;?>"><?php  echo $row->status;    ?></a></td>
			</tr> <?php   endforeach;      ?>    
        </tbody>
    </table>

</section>

















<?php $this->load->view('includes/footer.php');?>
</body>
</html>