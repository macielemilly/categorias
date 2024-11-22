<?php

namespace App\Http\Controllers;

use App\Models\Category;  
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        
        $totalCategories = Category::count();

       
        return view('dashboard', compact('totalCategories')); 
    }
}

