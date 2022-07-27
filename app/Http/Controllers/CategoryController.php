<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
    	$categories = Category::get();
    	return view('admin.category')->with(['categories' => $categories,'category' => null]);
    }
    public function category_post(Request $request)
    {
    	// dd($request->all());
    	$request->validate([
    		'category_title' => 'required',
    	]);
    	Category::create([
    		'cat_title' => $request->category_title,
    	]);
    	return redirect()->route('category')->with(['success' => 'Category added successfully!']);
    }
    public function category_delete(Request $request,$id)
    {
    	$category = Category::findOrFail($id);
    	$category->delete();
    	return redirect()->route('category')->with(['success' => 'Category deleted successfully!']);
    }
    public function category_update(Request $request,$id)
    {
    	$categories = Category::get();
    	$category = Category::findOrFail($id);
    	// dd($categories);
    	return view('admin.category')->with(['category' => $category,'categories' => $categories]);
    }
    public function category_update_post(Request $request,$id)
    {
    	$category = Category::findOrFail($id);
    	$request->validate([
    		'category_title' => 'required',
    	]);
    	$category->update([
    		'cat_title' => $request->category_title,
    	]);
    	return redirect()->route('category');
    }
}
