<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller

{

    public function home(){
        return view('welcome');
    }





    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|max:2048',
        ]);
        $url = null;
        if ($request->hasFile('image')) {
            // Upload directly to Cloudinary using the storage driver
            $path = Storage::disk('cloudinary')->putFile('products', $request->file('image'));
            /** @var \Illuminate\Filesystem\FilesystemAdapter $cloudinary */
            $cloudinary = Storage::disk('cloudinary');
            $url = $cloudinary->url($path);
        }

        Product::create([
            'name' => $data['name'],
            'description' => $data['description'] ?? null,
            'price' => $data['price'],
            'image_url' => $url,
        ]);

        return back()->with('success', 'Product added!');
    }


    public function index(){
        $products = Product::all();
        return view('welcome', compact('products'));
    }



}
