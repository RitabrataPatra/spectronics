<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Testimonial;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        $category = Category::orderBy('id', 'desc')->get();
        $total = Product::count();


        return view('admin.product.home', compact(['products', 'total', 'category']));
    }
    public function testimonial()
    {
        $testimonials = Testimonial::orderBy('id')->get();
        $total = Testimonial::count();

        return view('admin.product.testihome', compact(['testimonials', 'total']));
    }
    public function testi_create()
    {

        return view('admin.product.testi');
    }
    public function testi_save(Request $request)
    {
        // $validation = $request->validate([
        //     'title' => 'required',
        //     'category' => 'required',
        //     'price' => 'required',
        //     'image' => 'mimes:png,jpeg,jpg|max:2048',
        // ]);

        // $data = Product::create($validation);
        $test = new Testimonial;

        $test->title = $request->title;
        $test->designation = $request->designation;
        $test->Testimonial = $request->Testimonial;


        $test->save();




        if ($test) {
            session()->flash('success', 'Testimonial Added Successfully');
            return redirect(url('admin/testimonial'));
        } else {
            session()->flash('error', 'Some problem occured');
            return redirect(url('admin/testimonial'));
        }
    }
    public function testi_edit($id)
    {
        $testimonials = Testimonial::findOrFail($id);
        return view('admin.product.updatetesti', compact('testimonials'));
    }

    public function testi_update(Request $request, $id)
    {
        $data = Testimonial::find($id);
        $data->title = $request->title;
        $data->designation = $request->designation;
        $data->Testimonial = $request->Testimonial;

        $data->save();


        if ($data) {
            session()->flash('success', 'Testimonial Updated Successfully');
            return redirect(route('admin/testimonial'));
        } else {
            session()->flash('error', 'Some problem occured');
            return redirect(route('admin/testimonial/update'));
        }
    }
    public function testi_delete($id)
    {
        $testimonials = Testimonial::findOrFail($id)->delete();
        if ($testimonials) {
            session()->flash('success', 'Testimonial Deleted Successfully');
            return redirect(route('admin/testimonial'));
        } else {
            session()->flash('error', 'Testimonial Not Deleted successfully');
            return redirect(route('admin/testimonial'));
        }
    }

    public function create()
    {
        $category = Category::all();
        return view('admin.product.create', compact('category'));
    }

    public function save(Request $request)
    {
        // $validation = $request->validate([
        //     'title' => 'required',
        //     'category' => 'required',
        //     'price' => 'required',
        //     'image' => 'mimes:png,jpeg,jpg|max:2048',
        // ]);

        // $data = Product::create($validation);
        $data = new Product;
        $category = new Category;


        $data->title = $request->title;
        $data->catid = $request->catid;

        



        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('uploads', $imagename);

            $data->image = $imagename;
        }
        $data->save();




        if ($data) {
            session()->flash('success', 'Product Added Successfully');
            return redirect(url('admin/products'));
        } else {
            session()->flash('error', 'Some problem occured');
            return redirect(url('admin.products/create'));
        }
    }
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        $category = Category::all();

        return view('admin.product.update', compact('products', 'category'));
    }

    public function delete($id)
    {
        $products = Product::findOrFail($id);
        $image_path = public_path('uploads/'.$products->image);


        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        $products->delete();
        if ($products) {
            session()->flash('success', 'Product Deleted Successfully');
            return redirect(route('admin/products'));
        } else {
            session()->flash('error', 'Product Not Deleted successfully');
            return redirect(route('admin/products'));
        }
    }

    public function update(Request $request, $id)
    {
        $data = Product::find($id);
        
        $data->title = $request->title;
       
        $data->catid = $request->catid;



        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('uploads', $imagename);

            $data->image = $imagename; //
        }
        $data->save();
        if ($data) {
            session()->flash('success', 'Product Update Successfully');
            return redirect(route('admin/products'));
        } else {
            session()->flash('error', 'Some problem occured');
            return redirect(route('admin/products/update'));
        }
    }
}
