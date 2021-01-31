@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
<h1>Create a new pizza</h1>
<form action="/pizzas" method="POST">
@csrf
<label for="name">Your Name:</label>
<input type="text" id="name" name="name">
<label for="type">Choose Pizza Type:</label>
<select name="type" id="type">
<option value="Margherita">Margherita</option>
<option value="Hawaiian">Hawaiian</option>
<option value="Veg Supreme">Veg Supreme</option>
<option value="BBQ Chicken">BBQ Chicken</option>
</select>

<label for="base">Choose Base Type:</label>
<select name="base" id="base">
<option value="Cheesy Crust">Cheesy Crust</option>
<option value="Garlic Crust">Garlic Crust</option>
<option value="Thin N Crispy">Thin N Crispy</option>
<option value="Thick">Thick</option>
</select>


<label for="price">Choose Price:</label>
<select name="price" id="price">
<option value="7">7</option>
<option value="12">12</option>
<option value="16">16</option>
<option value="13">13</option>
</select>
<fieldset>
<label>Extra Toppings:</label>
<input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
<input type="checkbox" name="toppings[]" value="cheese">Cheese<br />
<input type="checkbox" name="toppings[]" value="Chicken">Chicken<br />
<input type="checkbox" name="toppings[]" value="Peppers">Peppers<br />


</fieldset>
<input type="submit" value="Order Pizza">
</form>
</div>
@endsection