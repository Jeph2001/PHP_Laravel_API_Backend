@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome to Pizza Shop</h1>
    <p>
        {{session('msg')}}
    </p>
    <p>
        <a href="/create">Shop a Pizza</a> <br>
        <!-- <a href="/pizza">See all Pizzas</a> -->
    </p>
</body>

</html>
@endsection