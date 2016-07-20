<?php
include('../../../../wp-config.php');
?>
<script>
jQuery(document).ready(function()
{ 
   
  jQuery("#content-dif").mCustomScrollbar();
  	
});
</script> 
<?php

$id=$_POST['termid'];

$term = get_term( $id, 'conditions-treated-catagory' );
?>
		
<div class="neck-comp-right-inner content" id="content-dif">
	<h1><?php echo $name = $term->name ?></h1>
	<p><?php echo $des = $term->description  ?></p>
</div>

	