<?php 
$users = require __DIR__.'/../data/users.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>Id</th>
			<th>Email</th>
			<th>Date</th>	
		</tr>
		<?php foreach($users as $v){
			?><tr>
				<td><?php $v->id(); ?></td>
				<td><?php $v->email(); ?></td>
				<td><?php $v->date(); ?></td>
			</tr> 
		<?php }  ?>
	</table>
</body>
</html>