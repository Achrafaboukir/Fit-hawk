@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }} 
            </h2>
            <div class="ml-4">
              <form action="{{ route('products.search') }}" method="GET">
                  <div class="flex">
                      <input type="text" name="search" id="search" class="px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Search products">
                      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-2 rounded focus:outline-none focus:shadow-outline">Search</button>
                  </div>
              </form>
          </div>
        </div>
    </x-slot>

<div class="container mx-auto">
    <div class="grid grid-cols-1 p-8 md:grid-cols-2 lg:grid-cols-5 gap-6">
      @foreach ($products as $product)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <div class="relative">
            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-64 object-cover">
            <div class="absolute top-0 right-0 p-2 bg-gray-800 text-white uppercase font-semibold text-xs">{{ $product->category }}</div>
          </div>
          <div class="p-4">
            <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $product->name }}</h2>
            <div class="flex justify-between items-center">
              <span class="text-gray-700">{{ $product->brand }}</span>
              <span class="text-gray-700">{{ $product->stock }} in stock</span>
            </div>
            <div class="mt-4">
              <div class="flex items-center justify-between">
                <span class="text-xl font-bold text-gray-800">${{ $product->price }}</span>
                <a href="{{ route('products.edit', $product->id) }}" class="text-indigo-600 hover:text-indigo-800 transition duration-300">Edit</a>
              </div>
              <div class="flex items-center mt-2">
                <span class="text-sm text-gray-500">Added: {{ $product->date }}</span>
                <span class="text-sm text-gray-500 mx-2">|</span>
                <span class="text-sm text-gray-500">Sex: {{ $product->sexe }}</span>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</x-app-layout>
