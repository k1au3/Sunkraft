<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SunKraft-View Order</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css"/>
	<script src="../../js/jquery2.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="/public/assets/js/main.js"></script>
	<link rel="stylesheet" href="/public/assets/css/cart-style.css">
	<style>
		table tr td {padding:10px;}
	</style>
</head>
<body>

    <!-- nav 
     -->
     <div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a href="#" class="navbar-brand">SunKraft</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="#index.blade.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="#products.blade.php"><span class="glyphicon glyphicon-modal-window"></span>Products</a></li>
			</ul>
		</div>
	</div>
    <p><br/></p>
	<p><br/></p>
	<p><br/></p>

    <div class="container-fluid">
	
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<h1>Customer Order details</h1>
						<hr/>
						
                        <div class="row">
                            <div class="col-md-6">
                                <img style="float:right;" src="<!--product image-->" class="img-responsive img-thumbnail"/>
                            </div>
                            <div class="col-md-6">
                                <table>
                                    <tr><td>Product Name</td><td><b>...</b> </td></tr>
                                    <tr><td>Product Price</td><td><b>...</b></td></tr>
                                    <tr><td>Quantity</td><td><b>...</b></td></tr>
                                    <tr><td>Transaction Id</td><td><b>...</b></td></tr>
                                </table>
                            </div>
                        </div>
						
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>



</body>
</html>