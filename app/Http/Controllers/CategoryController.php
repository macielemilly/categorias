<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public readonly Category $category;

    public function __construct()
    {
        $this->category = new category;
    }
    public function index()
    {
        $categories = $this->category->all();

        return view('category.categories', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.category_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
{
    
    $created = Category::create([
        'nome' => $request->input('nome'),
        'descricao' => $request->input('descricao'),
    ]);

   
    if ($created) {
        return redirect()->route('categories.index')->with('success', 'Categoria cadastrada com sucesso!');
    }

    return redirect()->route('categories.index')->with('error', 'Ocorreu um erro ao cadastrar a categoria.');
}

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('category.category_show', ['category' => $category]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.category_edit', ['category' => $category]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCategoryRequest $request, string $id)
    {
        $updated = $this->category->where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
            return  redirect()->route('categories.index')->with('success', 'Categoria editada com sucesso!');
        }
        return  redirect()->route('categories.index')->with('error', 'Um erro aconteceu ao editar categoria! Tente novamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = $this->category->where('id', $id)->delete();

        if ($deleted) {
            return  redirect()->route('categories.index')->with('success', 'Categoria excluida com sucesso!');
        }
        return  redirect()->route('categories.index')->with('error', 'Um erro aconteceu ao excluir a categoria! Tente novamente');
    }
}
