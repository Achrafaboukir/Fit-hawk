<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\ProductSize;

class productcontroller extends Controller
{
    public function index(Request $request)
    {
        $category = $request->input('category');
        $sexe = $request->input('sexe');
    
        // Retrieve products based on the selected category and gender
        $products = products::where('category', $category)
            ->where('sexe', $sexe)
            ->get();

    return view('products.index', ['products'=>$products]);
}


    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'brand' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'date' => 'required',
            'sexe' => 'required',
            'image' => 'required',
            
        ]);
        $validate=$request->validate([
            'sizes' => 'required|array',
            'sizes.*' => 'required|string',
        ]);

        // Create a new Product instance
        $product = new products();
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->category = $validatedData['category'];
        $product->brand = $validatedData['brand'];
        $product->stock = $validatedData['stock'];
        $product->price = $validatedData['price'];
        $product->date = $validatedData['date'];
        $product->sexe = $validatedData['sexe'];
        $product->image = $validatedData['image'];
        $product->save();

        // Create a new ProductSize instance for each size
        foreach ($validate['sizes'] as $size) {
            $productSize = new ProductSize();
            $productSize->product_id = $product->id;
            $productSize->size = $size;
            $productSize->save();
        }

        return redirect('/products')->with('success', 'Product has been added');
    }

    public function edit($id)
    {
        $product = products::findOrFail($id);
        $sizes = ProductSize::where('product_id', $id)->get();
        return view('products.edit', compact('product','sizes'));
    }

    public function update(Request $request, $id)
    {
        // Validate the input
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'brand' => 'required',
            'stock' => 'required|integer',
            'price' => 'required|numeric',
            'date' => 'required|date',
            'sexe' => 'required',
            'image' => 'required',
            'sizes' => 'required|array',
            'sizes.*' => 'string',
        ]);

        // Find the product by ID
        $product = products::findOrFail($id);

        // Update the product attributes
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->category = $validatedData['category'];
        $product->brand = $validatedData['brand'];
        $product->stock = $validatedData['stock'];
        $product->price = $validatedData['price'];
        $product->date = $validatedData['date'];
        $product->sexe = $validatedData['sexe'];
        $product->image = $validatedData['image'];
        $product->save();

        // Update the product sizes
        $sizes = $validatedData['sizes'];
        ProductSize::where('product_id', $id)->delete();

        foreach ($sizes as $size) {
            $productSize = new ProductSize();
            $productSize->product_id = $product->id;
            $productSize->size = $size;
            $productSize->save();
        }

        // Redirect back with a success message
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        $product = products::findOrFail($id);
        $product->delete();

        return redirect('/products')->with('success', 'Product has been deleted');
    }

    public function dashboard(){
        $products = products::orderBy('date', 'desc')->paginate(5); 
       return view('dashboard', compact('products'));
    }
    public function menclothes()
    {
       
         $jacket = products::where('category', 'jacket')->get();
        $pants = products::where('category', 'pant')->get();
        $shirts = products::where('sexe', 'male')
        ->where('category', 'tshirt')
        ->get();
        $polos = products::where('sexe', 'male')
        ->where('category', 'polos')
        ->get();
        $Sweatshirts = products::where('sexe', 'male')
        ->where('category', 'Sweatshirts')
        ->get();
        $longsleeve = products::where('sexe', 'male')
        ->where('category', 'long Sleeve')
        ->get();
        $allTops = products::where('sexe', 'male')
        ->get();
        return response()->json(['menshirts' => $shirts , 'menpants' => $pants , 'menjacket' => $jacket ,'polos'=>$polos , 'Sweatshirts'=>$Sweatshirts , 'longsleeve'=>$longsleeve , 'allTops'=>$allTops ]);
    }

    public function womenclothes()
    {
        $jacket = products::where('category', 'jacket')->get();
        $pants = products::where('category', 'pant')->get();
        $shirts = products::where('sexe', 'female')->get();
        return response()->json(['womenshirts' => $shirts , 'womenpants' => $pants , 'womenjacket' => $jacket , ]);
    }

    public function ShowApi($id)
    {
        $product = products::findOrFail($id);
        $productSize = ProductSize::where('product_id', $id)->get();

        return response()->json(['product' => $product , 'size'=>$productSize ]);
        
    }

    public function search(Request $request)
{
    $searchTerm = $request->input('search');
    $products = products::where('name', 'like', '%' . $searchTerm . '%')->get();

    return view('products.search', compact('products'));
}

}
