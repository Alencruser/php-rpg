<?php 
require_once __DIR__."/models/Client.php";
$liste=require_once __DIR__."/data/products.php";

$roger= new Client(3,"denis.brognar@gmail.com");
$jean= new Client(4,"jeanpierre@hotmail.fr");

$roger->buy($legume1);
$jean->buy($legume2);
$jean->buy($cloth1);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>Roger</th>
			<th>Liste</th>
		</tr>
		<?php foreach ($roger->carts() as $v) {
			echo "<tr>";
			echo "<td colspan='2'>";
			echo $v;
			echo "</td>";
			echo "</tr>";
		} ?>
		<tr>
			<td>Prix total :</td>
			<td><?php echo $roger->amount(); ?></td>
		</tr>
	</table>
	<table>
		<tr>
			<th>Jean</th>
			<th>Liste</th>
		</tr>
		<?php foreach ($jean->carts() as $v) {
			echo "<tr>";
			echo "<td colspan='2'>";
			echo $v;
			echo "</td>";
			echo "</tr>";
		} ?>
		<tr>
			<td>Prix total : </td>
			<td><?php echo $jean->amount(); ?></td>
		</tr>
	</table>
</body>
</html>