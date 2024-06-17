<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black-800 dark:text-black-200 leading-tight">
            {{ __('Testimonials') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-black-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black-900 dark:text-black-100">
                   <div class="d-flex align-items-center justify-content-between">
                    <h1 class="mb-0">Testimonial List</h1>
                    <div>
                    <a href="{{ url('admin/dashboard') }}" class="btn btn-primary">Go Back</a>

                    <a class="btn btn-primary" href="{{url('admin/testimonial/create')}}">Add Testimonial</a>
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
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Testimonials</th>
                                <th>Action</th>
                                
                               
                                
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($testimonials as $testimonial)
                            <tr>
                                <td class="align-middle">{{$loop->iteration}}</td>
                                <td class="align-middle">{{$testimonial->title}}</td>
                                <td class="align-middle">{{$testimonial->designation}}</td>
                                <td class="align-middle">{{$testimonial->Testimonial}}</td>
                                
                                
                                <td class="align-middle">
                                <div class="btn-group" role="group" aria-label="Basic Example">
                                    <a type="button" class="btn btn-secondary" href="{{url('admin/testimonial/edit',$testimonial->id)}}">Edit</a>
                                    <a type="button" class="btn btn-danger" href="{{url('admin/testimonial/delete',$testimonial->id)}}">Delete</a>
                                </div>
                                </td>
                                
                                
                            </tr>  
                            @empty
                            <tr>
                                <td class="text-center" colspan="5">Testimonial Not Found</td>
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
