<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Auth;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        return view('categories.index')->with(['categories' => $category->get()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    
    public function create()
    {
        return view('categories.create');
    }
    
    public function store(Request $request, Category $category)
    {
        $input = $request['category'];
        $input['user_id'] = Auth::id();
        $category->fill($input)->save();
        return redirect('/categories');
    }
    
    public function delete(Category $category)
    {
        $category->delete();
        return redirect('/categories');
    }
}

