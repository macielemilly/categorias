<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplierRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public readonly Supplier $supplier;

    public function __construct()
    {
        $this->supplier = new Supplier();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = $this->supplier->all();
        return view('supplier.suppliers', ['suppliers' => $suppliers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supplier.supplier_create');  // Return the supplier creation view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SupplierRequest $request)
    {
        $created = Supplier::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone'),
            'descricao' => $request->input('descricao'),
        ]);

        if ($created) {
            return redirect()->route('suppliers.index')->with('success', 'Fornecedor cadastrado com sucesso!');
        }

        return redirect()->route('suppliers.index')->with('error', 'Ocorreu um erro ao cadastrar o fornecedor.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        return view('supplier.supplier_show', ['supplier' => $supplier]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        return view('supplier.supplier_edit', ['supplier' => $supplier]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SupplierRequest $request, string $id)
    {
        $updated = $this->supplier->where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
            return redirect()->route('suppliers.index')->with('success', 'Fornecedor editado com sucesso!');
        }
        return redirect()->route('suppliers.index')->with('error', 'Ocorreu um erro ao editar o fornecedor! Tente novamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = $this->supplier->where('id', $id)->delete();

        if ($deleted) {
            return redirect()->route('suppliers.index')->with('success', 'Fornecedor excluído com sucesso!');
        }
        return redirect()->route('suppliers.index')->with('error', 'Ocorreu um erro ao excluir o fornecedor! Tente novamente');
    }
}
