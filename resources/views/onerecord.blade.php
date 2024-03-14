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
        <h1>Pizzas by ID</h1>
    </div><br>
    <div>
        {{$pizza->name}}
    </div>
    <p>Base:{{$pizza->base}}</p>
    <p>Type:{{$pizza->type}}</p>
    <p>Extra toppings:</p>
    <ul>
        @foreach($pizza->toppings as $topping)
        <li>{{$topping}}</li>
        @endforeach
    </ul>
    <p>
        <a href="/pizza"> <-Back to all Pizzas</a>
    </p>
    <a href="/">Home</a>

    <form action="/pizza/{{$pizza->id}}"  method="POST">
        @csrf
        @method('DELETE')
        <button>Complete order</button>
    </form>

</body>

</html>
@endsection