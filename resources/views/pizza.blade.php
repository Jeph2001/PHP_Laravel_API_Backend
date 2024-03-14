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

    <div>
        <h1>Pizzas List</h1>
    </div><br>
    @foreach($pizzas as $pizza)
    <div>
        <a href="/pizza/{{$pizza->id}}">Name:{{$pizza->name}} </a><br>
        type:{{$pizza->type}} <br>
        base:{{$pizza->base }}
        <p>Toppings</p>
        <ul>

            @foreach($pizza->toppings as $topping)
            <li>{{$topping}}</li>
            @endforeach
        </ul>
    </div>
    @endforeach

    <p>
        <a href="/create">Add new Pizza</a>
    </p>
    <a href="/">Home</a>
</body>

</html>
@endsection