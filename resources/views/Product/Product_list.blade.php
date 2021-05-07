<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	.right{
		float: right;
		margin-bottom: 10px;
		padding: 10px;
	}	
	</style>
</head>
<body>
	<div>
		<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
          </a>
	</div>
	<div class="right">
	<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>

    </div>

    </div>
    <div class="right">
    	<a href="{{ url('add_product')}}">Add Product</a>
    	<a href="{{ url('card_list')}}">Card List</a>
    </div>
	<table border="solid 1px" width="100%">
		<tr>
			<th>id</th>
			<td>Name</td>
			<th>Qty</th>
			<th>Price</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
		@foreach($result as $key=>$value)
		<tr>
			<td>{{ $value->id}}</td>
			<td>{{ $value->Product_name}}</td>
			<td>{{ $value->Qty}}</td>
			<td>{{ $value->Price}}</td>
			<td> <img src="{{ asset('images/product/'.$value->image)}}" width="100px" height="100px"> </td>
			<td><a href="{{ url('Product_edit/'.$value->id)}}">edit</a> <a href="{{ url('Product_delete/'.$value->id)}}">delete</a>
				<a href="{{ url('detailes/'.$value->id)}}">deatils</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>