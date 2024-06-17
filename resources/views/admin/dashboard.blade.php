<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-black-200 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6  text-black-900">
                    {{ __("You're logged in!") }}<br>
                    {{ __("Choose what you want to edit") }}
                    <p class="p-2"><a class="btn btn-primary" href="products">Products</a></p>
                    <p class="p-2"><a class="btn btn-secondary" href="testimonial">Testimonials</a></p>
                    <p class="p-2"><a class="btn btn-success" href="category">Category</a></p>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
