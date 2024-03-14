<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $pizzas = Pizza::all();
        return view('pizza', ['pizzas' => $pizzas]);
    }

    public function onerecord($id)
    {
        $pizza = Pizza::findorFail($id);
        return view('onerecord', ['pizza' => $pizza]);
    }

    public function create()
    {
        return view('create');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function store()
    {

        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');

        $pizza->toppings = request('toppings');

        $pizza->save();
        return redirect('/')->with('msg', 'Thanks for your Order');
    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizza');
    }
}
