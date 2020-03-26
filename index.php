<?php 

require 'action.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
 
<script type="text/javascript" src="js/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>


	<div class="container">

		<div class="jumbotron">

			<h1>Stock Items <small>NetGuba App</small></h1>
		</div>
	</div>
<div class="container">
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6"></div>
	<div class="col-md-3"></div>


	<div class="container">

<div class="container">

	<div class="panel panel-primary">
  <div class="panel-heading">Enter Product Detail</div>
  <div class="panel-body">




<?php if(isset($_GET['edit'])){

  $id = array("id"=>$_GET['edit']);

  $where = array("id" => $_GET['edit'],);


  $row = $obj->select_record("`items`", $where);

  ?> 

<form method="post" action="action.php">
   <table class="table table-hover">
<tr>
     <td> <input type="hidden" name="id" value="<?php echo $row['ID']?>"></td>
   </tr>
   	<tr>
   		<td>Product Name</td>

   
   		<td> <input type="text" class="form-control" name="product_name" value="<?php echo $row['Product_name']?> "></td>
   	</tr>

   	<tr>
   		<td>Quantity</td>
   		<td> <input type="text" class="form-control" name="product_quantity" value="<?php echo $row['Quantity']?> "></td>
   	</tr>

   	<tr>
  <td colspan="2" align="center"><button class="btn btn-info" type="submit"  name="btn_edit_product">UPDATE PRODUCT</button></td>
   		
   	</tr>

   </table>
</form>

<?php } else { ?>

<form method="post" action="action.php">
   <table class="table table-hover">
    <tr>
      <td>Enter Product Name</td>

   
      <td> <input type="text" class="form-control" name="product_name" placeholder="Product name"></td>
    </tr>

    <tr>
      <td>Quantity</td>
      <td> <input type="text" class="form-control" name="product_quantity" placeholder="quantity"></td>
    </tr>

    <tr>
  <td colspan="2" align="center"><button class="btn btn-info" type="submit"  name="btn_add_product">ADD PRODUCT</button></td>
      
    </tr>

   </table>
</form>

<?php }?>


  </div>
</div>
	
</div>


</div> 

</div>

</div>

<div class="container">
	
	<div class="row">
		<div class="row-md-2"></div>
		<div class="row-md-8">
		<table class="table table-bordered">

 <tr>
        <th>#</th>
        <th>Product Name</th>
        <th>Available Stock</th>
        
      </tr> 
      
<?php 

foreach ($row_fetch_all_records as $row_value) {

?>

			<tr>
				<th><?php echo $row_value['id'] ?></th>
				<th><?php echo $row_value['product_name'] ?></th>
				<th><?php echo $row_value['quantity'] ?></th>
				<th><a href="index.php?edit=<?php echo $row_value['id']?>" class="btn btn-info">Edit </a></th>
        <th><a href="action.php?delete=<?php echo $row_value['id'] ?>" class="btn btn-danger">Delete</a></th>
			</tr> 


<?php  } ?>
  





     



	


		

		
		</table>
		</div>
		<div class="row-md-2"></div>
	</div>

</div>

</body>
</html>