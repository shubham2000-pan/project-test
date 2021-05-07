<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.div{
			padding: 20px;
		}
	</style>
<body>
<form action="Product_store" method="post" enctype="multipart/form-data">
	@csrf
	<div>
		<div>
			<h1> Add Product</h1>
		</div>
		<div class="div">
	Product name:<input type="text" name="Product_name">
	</div>
	<div class="div">
	Qty:<input type="text" name="Qty">
	</div >
	<div class="div">
	Price:<input type="text" name="Price">	
	</div>
	<div class="div">
	Image:<input type="file" name="image">
	</div >
	<div class="div">
	<input type="submit" name="submit" value="submit">
	</div>
	</div>
</form>
</body>
</html>