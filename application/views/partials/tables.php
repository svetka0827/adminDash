<table>
	<tr>
		<th>Product colors</th>
	</tr>
 <?php
    foreach($colors as $color){
 ?>
	<tr>
		<td><?= $color['color_name']?></td>
	</tr>
 <?php
    }
 ?>
</table>