<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Provider;

class ProviderController extends Controller
{
    public function index(){
    	$providers = Provider::orderBy('id', 'ASC')->paginate(10);
    	return view('providers.index', compact('providers'));
    }

    public function create(){
    	return view('providers.create'); // Ver formulario de registro
    }

    public function store(Request $request){
    	// Validación
    	$messages = [
    		'name.required' => 'Debe ingresar un nombre para el producto',
    		'name.min' => 'El nombre del producto debe tener al menos 3 caracteres',
    		'description.max' => 'La descripción corta solo admite asta 200 caracteres'
    		
    	];
    	$rules = [
    		'name' => 'required|min:3',
    		'description' => 'max:200'
    	];
    	$this->validate($request, $rules, $messages);

    	//registrar el nuevo producto en la bd
    	//dd($request->all());  dd() permite imprimir en la página el contenido del request y terminar la ejecución en ese instante.

    	$provider = new Provider();
    	$provider->name = $request->input('name');
    	$provider->address = $request->input('address');
    	$provider->telephone = $request->input('telephone');
    	$provider->description = $request->input('description');
    	$provider->save(); // INSERT en la tabla category

    	return redirect('/providers');

    }

    public function edit($id){
	    $provider = Provider::find($id);
	    return view('providers.edit')->with(compact('provider'));

    }
    public function update(Request $request, $id){
        $provider = Provider::find($id);
        $provider->name = $request->input('name');
        $provider->address = $request->input('address');
        $provider->telephone = $request->input('telephone');
        $provider->description = $request->input('description');
        $provider->save(); // UPDATE en la tabla provider

        return redirect('/providers');
    }

    public function destroy($id){
        $provider = Provider::find($id);

        $provider->delete(); // DELETE en la tabla provider

        return back();
    }
}
