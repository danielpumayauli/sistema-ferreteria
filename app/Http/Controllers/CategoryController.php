<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
    	$categories = Category::orderBy('id', 'DESC')->paginate(10);
    	// return view('products.index')->with(compact('products'));
    	return view('categories.index', compact('categories'));
    }

    public function create(){
    	return view('categories.create'); // Ver formulario de registro
    }

    public function store(Request $request){
    	// Validación
    	$messages = [
    		'name.required' => 'Debe ingresar un nombre para el producto',
    		'name.min' => 'El nombre del producto debe tener al menos 3 caracteres',
    		'description.required' => 'La descripción corta es un campo obligatorio',
    		'description.max' => 'La descripción corta solo admite asta 200 caracteres'
    		
    	];
    	$rules = [
    		'name' => 'required|min:3',
    		'description' => 'required|max:200'
    	];
    	$this->validate($request, $rules, $messages);

    	//registrar el nuevo producto en la bd
    	//dd($request->all());  dd() permite imprimir en la página el contenido del request y terminar la ejecución en ese instante.

    	$category = new Category();
    	$category->name = $request->input('name');
    	$category->description = $request->input('description');
    	$category->save(); // INSERT en la tabla category

    	return redirect('/categories');

    }
    public function edit($id){
        $category = Category::find($id);
        return view('categories.edit')->with(compact('category'));

    }
    public function update(Request $request, $id){
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save(); // UPDATE en la tabla category

        return redirect('/categories');
    }

    public function destroy($id){
        $category = Category::find($id);

        $category->delete(); // DELETE en la tabla category

        return back();
    }

}
