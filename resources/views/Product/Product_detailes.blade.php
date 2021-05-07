<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.div{
			padding: 20px;
		}
	</style>
<body>
<form action="{{ url('add_card')}}" method="post">
	@csrf
	<div>
		<div>
			<h1>Product Detailes</h1>
		</div>
		<input type="hidden" name="product_id" value="{{ $result->id}}">
		<div class="div">
	<img src="{{ asset('images/product/'.$result->image)}}" width="100px" height="100px"> 
	</div >
		<div class="div">
	Product name: {{ $result->Product_name}}
	</div>
	<div class="div">
	Qty:<input type="text" name="Qty">
	</div >
	<div class="div">
	Price:{{$result->Price}}	
	</div>
	
	<div class="div">
	<input type="submit" name="submit" value="Add card">
	</div>
	</div>
</form>
</body>
</html>