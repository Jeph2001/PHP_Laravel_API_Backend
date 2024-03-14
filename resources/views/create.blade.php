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
        <h1>Add new pizza</h1>
    </div><br>
    <form action="/pizza" method="POST">
        @csrf
        <label for="name">Your Name</label> <br>
        <input type="text" name="name"> <br>
        <label for="type">Choose Pizza type</label><br>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="hawalian">Hawalian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select> <br>
        <label for="base">Choose the base type</label><br>
        <select name="base" id="base">
            <option value="cheesy crust">Chees Crust</option>
            <option value="garlic crust">Garlic crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select><br>
        <p>
        <fieldset>
            <label> Extra toppings:</label> <br>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers <br>
            <input type="checkbox" name="toppings[]" value="garlics">Garlics <br>
            <input type="checkbox" name="toppings[]" value="olives">Olives <br>
        </fieldset>
        </p><br>
        <input type="submit" value="Order Your Pizza">
    </form>

    <p>
        <a href="/pizza">Back to all Pizzas</a>
    </p>
    <a href="/">Home</a>
</body>

</html>
@endsection