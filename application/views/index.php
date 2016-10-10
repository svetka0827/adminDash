<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Moris charts and bars -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <!-- Moris charts and bars -->


    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/css/shop-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 80%;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        @keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        /* The Close Button */
        .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }

        .modal-body {padding: 2px 16px;}

        .modal-footer {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }



        .right_reports{
            display: inline-block;
            vertical-align: top;
        }
        .inventory_reports ul{
            list-style-type: none;
        }

        .inventory_reports ul li{
            list-style-type: none;
            text-decoration: underline;
            color:blue;

        }

        .sales_reports ul{
            list-style-type: none;
        }

        .sales_reports ul li{
            list-style-type: none;
            text-decoration: underline;
            display: inline-block;
            vertical-align: top;
             color:blue;

        }

        #sales_reports{
            display: inline-block;
            vertical-align: top;

        }

        #sales_reports_chart{
            display: inline-block;
            vertical-align: top;
        }



    </style>

    <script type="text/javascript">
        // $(document).ready(function(){
         


        //     // to get monthly sales reports
        //     $('.monthly_sales').click(function(e)
        //     {
        //         e.preventDefault();

        //         var query_criteria=$('.monthly_sales').val();
        //         console.log(query_criteria);

        //         $.get('/Products/monthly_sales/'+query_criteria, function(res) 
        //         {
        //              $('#report').html(res);
        //         });

        //     });


        //     // to get inventory reports
        //     $('.inventory').click(function(e)
        //     {
        //         e.preventDefault();
        //         var store_id=$('.inventory').val();

        //         $.get('/Products/store_inventory/'+store_id, function(res) 
        //         {
        //              $('#report').html(res);
        //         });


        //         $('#example').DataTable( 
        //         {
        //             dom: 'Bfrtip',
        //             buttons: [
        //                 'copy', 'csv', 'excel', 'pdf', 'print'
        //             ]
        //         });
        //     });



        // });
    </script>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Admin Dashboard</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/Products/load_data_display">About</a>
                    </li>
                    <li>
                        <a href="/Products/store_inventory/1">store_inventory example</a>
                    </li>
                    <li>
                        <a href="#">Add New Order</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- ReportsLinks div -->
            <div class="col-md-9">
                <div class="thumbnail">
                    <div class="caption-full">
                        <h4><a href="#">Inventory By store </a></h4>

                        <div class="inventory_reports">
                            <ul>
                                <li class="inventory" value="1"><a href="/Products/store_inventory/1">Meadows, Seattle WA </a></li>
                                <li class="inventory" value="2"><a href="/Products/store_inventory/2">Rockrest, Seattle WA </a></li>
                                <li class="inventory" value="3"><a href="/Products/store_inventory/3">HighPoint, Lacey WA </a></li>
                            </ul>
                            <button id="myBtn">Add New Product</button>
                        </div>




                        <br>
                        <br>
                        <h4><a href="#">Monthly Sales </a></h4>
                        <!-- Sales reports and chart containter div -->
                        <div id="line-chart">   
                        </div>

                        <div class="sales_reports">
                            <ul>
                                <li value="1"><a href=""> January 2016 </a></li>
                                <li>February 2016</li>
                                <li>March 2016</li>
                                <li>April 2016</li>
                                <li>May 2016</li>
                                <li>June 2016</li>
                                <li>July 2016</li>
                                <li>August 2016</li>
                                <li>September 2016</li>
                                <li>October 2016</li>
                                <li>November 2016</li>
                                <li>December 2016</li>  
                            </ul>
                        </div>
  
                    </div>
                </div>
                <div id="bar-chart">
                    
                </div>

            </div>
        </div>
    </div>
    <!-- /.container -->


    <div class="container">
        <hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- /.container -->







    <!-- The Modal -->
    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
            <div class="modal-header">
              <span class="close">×</span>
              <h2>Modal Header</h2>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                  <form class="form-horizontal" action="/Products/add_inventory" method="POST">
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="wholeseller">Choose Wholeseller:</label>
                      <div class="col-sm-10">
                        <select  name="wholeseller" class="form-control">
                            <?php
                              foreach($wholesellers as $wholeseller){
                            ?>
                              <option value="<?= $wholeseller['id']?>"><?= $wholeseller['wholeseller_name']?></option>
                            <?php
                              }
                            ?>
                        </select>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-sm-2" for="pname">Product Name:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="product_name" placeholder="Enter product name">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-sm-2" for="style">Product Category:</label>
                      <div class="col-sm-10">
                            <select name="category" class="form-control">
                                <?php
                                  foreach($categories as $category){
                                ?>
                                  <option value="<?= $category['id']?>"><?= $category['category_name']?></option>
                                <?php
                                  }
                                ?>
                            </select>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-sm-2" for="pqty">Quantity:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="quantity" placeholder="Enter quantity">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-sm-2" for="price">Unit price for re-sale:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="price" placeholder="Enter unit price">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-sm-2" >Choose all styles:</label>
                      <div class="col-sm-10">
                            <?php
                                foreach($styles as $style){
                            ?>
                                  <input type="checkbox" name="style" value="<?= $style['id']?>"> <?= $style['style_name']?>
                            <?php
                                }
                            ?>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-sm-2" for="gender">Gender:</label>
                      <div class="col-sm-10">
                            <select name="gender" class="form-control">
                                <?php
                                  foreach($genders as $gender){
                                ?>
                                  <option value="<?= $gender['id']?>"><?= $gender['gender_name']?></option>
                                <?php
                                  }
                                ?>
                            </select>
                      </div>
                    </div>




                    <div class="form-group">
                      <label class="control-label col-sm-2" for="color">Color:</label>
                      <div class="col-sm-10">
                            <select name="color" class="form-control">
                                <?php
                                  foreach($colors as $color){
                                ?>
                                  <option value="<?= $color['id']?>"><?= $color['color_name']?></option>
                                <?php
                                  }
                                ?>
                            </select>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-sm-2" for="size">Size:</label>
                      <div class="col-sm-10">
                            <select name="size" class="form-control">
                                <?php
                                  foreach($sizes as $size){
                                ?>
                                  <option value="<?= $size['id']?>"><?= $size['size_attr']?></option>
                                <?php
                                  }
                                ?>
                            </select>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-sm-2" for="store">Choose purchasing store:</label>
                      <div class="col-sm-10">
                            <select id="store" class="form-control">
                                <?php
                                  foreach($stores as $store){
                                ?>
                                  <option value="<?= $store['id']?>"><?= $store['store_name']?></option>
                                <?php
                                  }
                                ?>
                            </select>
                      </div>
                    </div>


                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                      </div>
                    </div>
                  </form>
        </div>
        <!-- Modal body Ends -->
      </div>
      <!-- Modal content Ends-->
    </div>
    <!-- The Modal Ends -->
    

    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }


    </script>

    <!-- jQuery -->
    <script src="/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/js/bootstrap.min.js"></script>

</body>
<script type="text/javascript">

Morris.Line({
  element: 'line-chart',
  data: [
    { y: '2006', a: 100, b: 90, c: 60 },
    { y: '2007', a: 75,  b: 65, c: 60 },
    { y: '2008', a: 50,  b: 40, c: 90 },
    { y: '2009', a: 75,  b: 65, c: 90 },
    { y: '2010', a: 50,  b: 40, c: 40 },
    { y: '2011', a: 75,  b: 65, c: 70 },
    { y: '2012', a: 100, b: 90, c: 80 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b','c'],
  labels: ['Meadows Seattle', 'Rockrest Seattle','HighPoint Lacey']
});


Morris.Bar({
  element: 'bar-chart',
  data: [
    { y: '2006', a: 100, b: 65, c:70 },
    { y: '2007', a: 75,  b: 65, c:90 },
    { y: '2008', a: 50,  b: 40, c:90},
    { y: '2009', a: 75,  b: 65, c:65},
    { y: '2010', a: 50,  b: 40, c:70 },
    { y: '2011', a: 75,  b: 65, c:100 },
    { y: '2012', a: 100, b: 90, c:70 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b','c'],
  labels: ['Meadows,Seattle', 'Rockrest, Seattle','HighPoint,Lacey']
});

</script>
</html>
