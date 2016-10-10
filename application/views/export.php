<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="//code.jquery.com/jquery-1.12.3.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
  <script src="//cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
  <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
  <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
  <script src="//cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
  <script src="//cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">

  <script type="text/javascript">
    
    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
    } );
  </script>
</head>

<body>


<table id="example" class="display nowrap dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
        <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 224px;">
                Store Name:
                </th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 352px;">
                Product Name:
                </th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 164px;">
                Color
                </th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 78px;">
                Quantity
                </th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 152px;">
                Size
                </th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 131px;">
                Category
                </th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 131px;">
                Gender
                </th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th rowspan="1" colspan="1">Store Name</th>
                <th rowspan="1" colspan="1">Product Name</th>
                <th rowspan="1" colspan="1">Color</th>
                <th rowspan="1" colspan="1">Quantity</th>
                <th rowspan="1" colspan="1">Size</th>
                <th rowspan="1" colspan="1">Category</th>
                <th rowspan="1" colspan="1">Gender</th>
            </tr>
        </tfoot>
        <tbody>
            
        <?php
            foreach($products as $product){
         ?>
            <tr role="row" class="odd">
                <td class="sorting_1"><?= $product['store_name']?></td>
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


</body>
</html>