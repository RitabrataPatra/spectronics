<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index(){
        
        return view('admin.dashboard');
    }

    public function Home(){
        $products = Product::all();
        $testimonials = Testimonial::all();
        $category1 = Category::all();
        $user = Auth::user();
        // $userid= $user->id;
        $userid = auth()?->user()?->id;
        
        
        return view ('Home.index',compact('products','testimonials','category1'));
    }
    public function login_home(){
        $products = Product::all();
        $testimonials = Testimonial::all();
        $category = Category::all();
        $user = Auth::user();
        // $userid= $user->id;
        $userid = auth()?->user()?->id;
       
        return view ('Home.index',compact('products', 'testimonials','category'));
    }
    public function productspage($id){

        
            $category1 = Category::all();

            $category=Category::where('id',$id)->first();
            // dd($category);
            
            $products = Product::where('catid',$category->id)->get();
            // dd($products);
            return view('Home.productpage',compact('category1','products'));
        
        
        // $products = Product::all();
        
        // $user = Auth::user();
        // // $userid= $user->id;
        // $userid = auth()?->user()?->id;
        // return view('Home.productpage',compact('products','category'));
    }

    public function testimonialspage(){
        $products = Product::all();
        $testimonials = Testimonial::all();
        $category1 = Category::all();
        $user = Auth::user();
        // $userid= $user->id;
        $userid = auth()?->user()?->id;
       
        
        return view('Home.testipage',compact('testimonials', 'category1' ,'products'));
    }

    // About pages
    public function about(){
        $products = Product::all();
        $user = Auth::user();
        // $userid= $user->id;
        $userid = auth()?->user()?->id;
        $category1 = Category::all();
        return view('Home.about',compact('category1','products'));
    }
    public function contact(){
        $products = Product::all();
        $category1 = Category::all();
       
        return view ('Home.contact',compact('category1','products'));
    }
}

