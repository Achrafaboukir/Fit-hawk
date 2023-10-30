@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="container mx-auto">
    <div class="flex justify-center">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4">
                <h1 class="text-2xl font-bold mb-6">Add Product</h1>
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                        <input type="text" name="name" id="name" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" value="{{ old('name') }}">
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                        <textarea name="description" id="description" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">{{ old('description') }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Category</label>
                        <select name="category" id="category" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                            <option value="">Select a Category</option>
                            <option value="tshirt" >tshirt</option>
                            <option value="pant" >pant</option>
                            <option value="jacket" >jacket</option>
                            <option value="long Sleeve" >long Sleeve</option>
                            <option value="Sweatshirts" >Sweatshirts</option>
                            <option value="polos" >polos</option>

                        </select>                  
                      </div>
                    <div class="mb-4">
                        <label for="brand" class="block text-gray-700 text-sm font-bold mb-2">Brand</label>
                        <input type="text" name="brand" id="brand" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" value="{{ old('brand') }}">
                        @error('brand')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="stock" class="block text-gray-700 text-sm font-bold mb-2">Stock</label>
                        <input type="number" name="stock" id="stock" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" value="{{ old('stock') }}">
                    </div>
                    <div class="mb-4">
                        <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price</label>
                        <input type="number" name="price" id="price" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" value="{{ old('price') }}">
                    </div>
                    <div class="mb-4">
                        <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Date</label>
                        <input type="date" name="date" id="date" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" value="{{ old('date') }}">
                    </div>
                    <div class="mb-4">
                        <label for="sexe" class="block text-gray-700 text-sm font-bold mb-2">Sexe</label>
                        <select name="sexe" id="sexe" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                            <option value="">Select a sexe</option>
                            <option value="male" {{ old('sexe') == 'male' ? 'selected' : '' }}>male</option>
                            <option value="female" {{ old('sexe') == 'female' ? 'selected' : '' }}>female</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                        <input type="text" name="image" id="image" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Sizes</label>
                        <div class="flex">
                            <label class="inline-flex items-center mr-4">
                                <input type="checkbox" name="sizes[]" value="x" class="form-checkbox">
                                <span class="ml-2">x</span>
                            </label>
                            <label class="inline-flex items-center mr-4">
                                <input type="checkbox" name="sizes[]" value="xl" class="form-checkbox">
                                <span class="ml-2">xl</span>
                            </label>
                            <label class="inline-flex items-center mr-4">
                                <input type="checkbox" name="sizes[]" value="s" class="form-checkbox">
                                <span class="ml-2">s</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="sizes[]" value="l" class="form-checkbox">
                                <span class="ml-2">l</span>
                            </label>
                        </div>
                        @error('sizes')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
