<script type="text/javascript">
	$(document).ready(function(){
	
         $('#example').DataTable( 
        {
            dom: 'Bfrtip',
             buttons: [
                 'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
        });
     });

</script>


<table id="example" class="display nowrap" cellspacing="0" width="100%">
	 <thead>
		<tr>
			<th>Store Name</th>
			<th>Product Name</th>
			<th>Color</th>
			<th>Quantity</th>
			<th>Size</th>
			<th>Category</th>
			<th>Gender</th>
		</tr>
	</thead>
	 <tfoot>
		<tr>
			<th>Store Name</th>
			<th>Product Name</th>
			<th>Color</th>
			<th>Quantity</th>
			<th>Size</th>
			<th>Category</th>
			<th>Gender</th>
		</tr>
	</tfoot>
	<tbody>
		 <?php
		    foreach($products as $product){
		 ?>
		<tr>
			<td><?= $product['store_name']?></td>
			<td><?= $product['product_name']?></td>
			<td><?= $product['color_name']?></td>
			<td><?= $product['product_qty']?></td>
			<td><?= $product['size_attr']?></td>
			<td><?= $product['category_name']?></td>
			<td><?= $product['gender_name']?></td>
		</tr>
		 <?php
		    }
		 ?>
 	</tbody>
</table>
