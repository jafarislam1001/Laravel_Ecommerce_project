<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<center>
	<h3>Customer Name: {{$data->name}}</h3>
	<h3>Customer Address: {{$data->rec_address}}</h3>
	<h3>Customer Phone: {{$data->phone}}</h3>
	<h2>Product title: {{$data->product->title}}</h2>
	<h2>Product price: {{$data->product->price}}</h2>
	<img width="300" height="250" src="products/{{$data->product->image}}">
	
</center>


</body>
</html>