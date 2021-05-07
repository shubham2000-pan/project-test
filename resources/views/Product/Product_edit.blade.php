<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.div{
			padding: 20px;
		}
	</style>
<body>
<form action="{{url('Product_update')}}" method="post" enctype="multipart/form-data">
	@csrf
	<div>
		<div>
			<h1>Product Edit</h1>
		</div>
		<input type="hidden" name="id" value="{{ $result->id}}">
		<div class="div">
	Product name:<input type="text" name="Product_name" value="{{ $result->Product_name }}">
	</div>
	<div class="div">
	Qty:<input type="text" name="Qty" value="{{ $result->Qty}}">
	</div >
	<div class="div">
	Price:<input type="text" name="Price" value="{{ $result->Price}}">	
	</div>
	<div class="div">
	Image:<input type="file" name="image" value="{{ $result->image}}">
	</div >
	<div class="div">
	<input type="submit" name="submit" value="submit">
	</div>
	</div>
</form>
</body>
</html>