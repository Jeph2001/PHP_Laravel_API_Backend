<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class MagicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Pizza::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pizzaApi = new Pizza();

        $pizzaApi->name = request('name');
        $pizzaApi->type = request('type');
        $pizzaApi->base = request('base');
        $pizzaApi->toppings = request('toppings');

        $pizzaApi->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pizzaApi = Pizza::findOrFail($id);
        return [$pizzaApi];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pizzaApi = Pizza::findOrFail($id);

        if(request()->has('name')){
            $pizzaApi->name = request('name');
        }

        if(request()->has('type')){
            $pizzaApi->type = request('type');
        }

        if(request()->has('base')){
            $pizzaApi->base = request('base');
        }
        
        if(request()->has('toppings')){
            $pizzaApi->toppings = request('toppings');
        }
        

        $pizzaApi->save();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pizzaApi = Pizza::findOrFail($id);
        $pizzaApi->delete();
    }
}
