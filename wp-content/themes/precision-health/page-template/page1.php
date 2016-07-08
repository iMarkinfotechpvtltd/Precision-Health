<?php
include('../../../../wp-config.php');
?>
<?php

$id=$_GET['termid'];

$term = get_term( $id, 'conditions-treated-catagory' );
?>

	<h1><?php echo $name = $term->name ?></h1>
	<p><?php echo $des = $term->description  ?>
	</p>
