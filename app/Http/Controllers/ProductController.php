<?php

namespace App\Http\Controllers;

  
use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public readonly Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    /**
     * Display a listing of the products.
     */
    public function index()
    {
        $products = $this->product->all();
        return view('product.products', ['products' => $products]);
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
       
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('product.product_create', ['categories' => $categories, 'suppliers' => $suppliers]);
    }

    /**
     * Store a newly created product in storage.
     */
    public function store( $request)
    {
       
        $created = Product::create([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
            'preco' => $request->input('preco'),
            'quantidade' => $request->input('quantidade'),
            'category_id' => $request->input('category_id'),
            'supplier_id' => $request->input('supplier_id'),
        ]);

        
        if ($created) {
            return redirect()->route('products.index')->with('success', 'Produto cadastrado com sucesso!');
        }

        return redirect()->route('products.index')->with('error', 'Ocorreu um erro ao cadastrar o produto.');
    }

    /**
     * Display the specified product.
     */
    public function show(Product $product)
    {
        return view('product.product_show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(Product $product)
    {
        
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('product.product_edit', ['product' => $product, 'categories' => $categories, 'suppliers' => $suppliers]);
    }

    /**
     * Update the specified product in storage.
     */
    public function update( $request, string $id)
    {
      
        $updated = $this->product->where('id', $id)->update($request->except(['_token', '_method']));

        
        if ($updated) {
            return redirect()->route('products.index')->with('success', 'Produto editado com sucesso!');
        }
        
        return redirect()->route('products.index')->with('error', 'Ocorreu um erro ao editar o produto! Tente novamente');
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(string $id)
    {
        
        $deleted = $this->product->where('id', $id)->delete();

        
        if ($deleted) {
            return redirect()->route('products.index')->with('success', 'Produto excluído com sucesso!');
        }

        return redirect()->route('products.index')->with('error', 'Ocorreu um erro ao excluir o produto! Tente novamente');
    }
}
