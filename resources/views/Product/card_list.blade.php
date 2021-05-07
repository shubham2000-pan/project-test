<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	.right{
		float: right;
		margin-bottom: 10px;
		padding: 10px;
	}	
	.btn{
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
    
   <a href="{{ url('Product_list')}}">product list</a>
   
    </div>
    
	<table border="1px" width="100%">
		<tr>
			<th>id</th>
			<th>Image</th>
			<td>Name</td>
			<th>Qty</th>
			<th>Price</th>
			<th>total amount</th>
			<th>Action</th>
		
		</tr>
		@foreach($result as $key=>$value)
		<tr>
			<td>{{ $value->card_id}}</td>
			<td> <img src="{{ asset('images/product/'.$value->image)}}" width="100px" height="100px"> </td>
			<td>{{ $value->Product_name}}</td>
			<td>{{ $value->qty}}</td>
			<td>{{ $value->Price }}</td>
			<td>{{ $value->Price*$value->qty}}</td>
			<td><a href="{{ url('card_delete/'.$value->card_id)}}">delete</a></td>
			
		</tr>
		@endforeach
	</table>
<div class="btn">
<button>Checkout</button>
</div>

</body>
</html>