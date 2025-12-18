<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('adminDashboard.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('adminDashboard.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {

            // اسم فريد للصورة
            $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();

            // تخزين الصورة
            $request->image->move(public_path('uploads/products'), $imageName);

            // تخزين اسم الصورة في الداتا
            $data['image'] = 'uploads/products/' . $imageName;
        }

        Product::create($data);

        return redirect()->route('products.index')
            ->with('message', 'تم إضافة المنتج بنجاح')
            ->with('alert-type', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::where('id', $id)->first();
        return view('adminDashboard.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::where('id', $id)->first();
        $categories = Category::all();

        return view('adminDashboard.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, string $id)
    {
        $product = Product::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('image')) {

            // اسم فريد للصورة
            $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();

            // تخزين الصورة
            $request->image->move(public_path('uploads/products'), $imageName);

            // تخزين اسم الصورة في الداتا
            $data['image'] = 'uploads/products/' . $imageName;
        }

        $product->update($data);

        return redirect()->route('products.index')
            ->with('message', 'تم تعديل المنتج بنجاح')
            ->with('alert-type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        session()->flash('message', 'تم حذف المنتج بنجاح');
        session()->flash('alert-type', 'danger');
        return redirect('/products');
    }

    public function toggleSpecial(Product $product)
    {
        $product->is_special = !$product->is_special;
        $product->save();

        // رسالة نجاح
        return redirect()->back()
            ->with('message', 'تم تحديث حالة المنتج المميز بنجاح')
            ->with('alert-type', 'success');
    }
}
