<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function category(){
        $category = Category::all();
        $total = Category::count();
        return view ('admin.product.category', compact('category', 'total'));
    }

    public function cat_create(){
        return view('admin.product.catcreate');
    }
    
    public function cat_save(Request $request)
    {
        // $validation = $request->validate([
        //     'title' => 'required',
        //     'category' => 'required',
        //     'price' => 'required',
        //     'image' => 'mimes:png,jpeg,jpg|max:2048',
        // ]);
        
        // $data = Product::create($validation);
        $data= new Category;

       
       
        $data->category=$request->category;
        
       

       
        $data->save();
        

        

        if ($data) {
            session()->flash('success', 'Category Added Successfully');
            return redirect(url('admin/category'));
        } else {
            session()->flash('error', 'Some problem occured');
            return redirect(url('admin/category/create'));
        }
    }
    public function cat_edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.product.updatecat', compact('category'));
    }
 
    public function cat_delete($id)
    {
        $category = Category::findOrFail($id)->delete();
        if ($category) {
            session()->flash('success', 'Category Deleted Successfully');
            return redirect(url('admin/category'));
        } else {
            session()->flash('error', 'Category Not Deleted successfully');
            return redirect(url('admin/category'));
        }
    }
 
    public function cat_update(Request $request, $id)
    {
        $data = Category ::find($id);
        
        
        $data->category=$request->category;
        
        
        $data->save();
        if ($data) {
            session()->flash('success', 'Category Update Successfully');
            return redirect(url('admin/category'));
        } else {
            session()->flash('error', 'Some problem occured');
            return redirect(url('admin/category/update'));
        }
    }

        // $products = Product::all();
        
        // $user = Auth::user();
        // // $userid= $user->id;
        // $userid = auth()?->user()?->id;
        // return view('Home.productpage',compact('products','category'));
    }


