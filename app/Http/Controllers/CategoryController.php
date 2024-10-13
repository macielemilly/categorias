<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public readonly Category $category;

    public function __construct()
    {
        $this->category =new category;
    }
    public function index()
    {
    
        $categories = $this->category->all();

        return view(view: 'categories', data:['categories'=>$categories] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $created = $this->category->create([
            'nome' => $request->input('nome'),        
            'descricao' => $request->input('descricao') 
        ]);

        if($created){
            return redirect()->back()->with(key: 'message', value: 'cadastrado com sucesso');
        }
        return redirect()->back()->with(key: 'message', value: 'um erro aconteceu');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('category_show', ['category' => $category]);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        $this->category->where('id', $id)->delete();

        return redirect()->route(route: 'categories.index');
    }
}
