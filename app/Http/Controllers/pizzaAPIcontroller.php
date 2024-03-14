<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Models\Bread;

class pizzaAPIcontroller extends Controller
{
    public function getPizza(){
        $pizzaApi = Pizza::all();
        $breadApi = Bread::all();
        $bothApi = [$pizzaApi, $breadApi];
        return [$bothApi];
    }

    public function postPizza(){
        $pizzaApi = new Pizza();

        $pizzaApi->name = request('name');
        $pizzaApi->type = request('type');
        $pizzaApi->base = request('base');
        $pizzaApi->toppings = request('toppings');

        $pizzaApi->save();
        
    }

    public function getonepizza($id){
        $pizzaApi = Pizza::findOrFail($id);
        return [$pizzaApi];
    }

    public function deletepizza($id){
        $pizzaApi = Pizza::findOrFail($id);
        $pizzaApi->delete();
        
    }

    public function updatepizza($id){
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

    public function searchpizza($name){
        $pizzaApi = Pizza::where("name","like","%".$name."%")->get();
            return $pizzaApi;
        
    }

    public function uploadfile(Request $req){
        $fileupload = $req->file('provi')->store('apiDocs');
        return ["result"=>$fileupload];
    }
}
