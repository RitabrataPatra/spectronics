<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black-800 dark:text-black-200 leading-tight">
            {{ __('Admin Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-black-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black-900 dark:text-black-100">
                   <div class="d-flex align-items-center justify-content-between">
                    <h1 class="mb-0">List Product</h1>
                    <div>
                    <a class="btn btn-primary" href="{{url('admin/products/create')}}">Add Product</a>
                    <a href="{{ url('admin/dashboard') }}" class="btn btn-primary">Go Back</a>
                    </div>
                   </div>
                   <hr />
                   @if (Session::has('success'))
                   <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                   </div>
                       
                   @endif
                   <table class="table table-hover">
                        <thead class="table-primary">
                            <tr >
                                <th>#</th>
                                <th>Product ID</th>
                                <th>Title</th>
                                {{-- <th>CategoryId</th> --}}
                                <th>Category</th>
                                {{-- <th>Price</th> --}}
                                <th>Action</th>
                                <th>ImageName</th>
                                <th>Image</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                            <tr>
                                <td class="align-middle">{{$loop->iteration}}</td>
                                <td class="align-middle">{{$product->id}}</td>
                                <td class="align-middle">{{$product->title}}</td>
                                <td class="align-middle">{{$product->category->category}}</td>
                                {{-- <td class="align-middle">{{$product->category}}</td> --}}
                                
                                {{-- <td class="align-middle">{{$product->price}}</td> --}}
                                
                                <td class="align-middle">
                                <div class="btn-group" role="group" aria-label="Basic Example">
                                    <a type="button" class="btn btn-secondary" href="{{url('admin/products/edit',$product->id)}}">Edit</a>
                                    <a type="button" class="btn btn-danger" href="{{url('admin/products/delete',$product->id)}}">Delete</a>
                                </div>
                                </td>
                                <td class="align-middle">{{$product->image}}</td>
                                <td>
                                    <img width="100" src="/uploads/{{$product->image}}" alt="">
                                </td>
                                
                            </tr>  
                            @empty
                            <tr>
                                <td class="text-center" colspan="5">Product Not Found</td>
                            </tr>
                                
                            @endforelse
                        </tbody>
                   </table>
                    Table Content
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
