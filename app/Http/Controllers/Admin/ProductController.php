<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProduct;
use App\Http\Requests\UpdateProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'sportline | products',
            'breadCrumb' => 'products',
            'products' => DB::table('products')->simplePaginate(5)
        ];
        return view('pages.admin.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'sportline | produk baru'
        ];
        return view('pages.admin.product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct $request)
    {
        $validated = $request->validated();
        if ($validated['product_image']->isValid()) {
            // $extension = $validated['product_image']->extension();
            // $fileName = time() . $extension;
            $path = $request->product_image->store('product', 'public');

            $product = new Product;
            $product->product_name = $request->product_name;
            $product->product_price = $request->product_price;
            $product->product_qty = $request->product_qty;
            $product->product_description = $request->product_description;
            $product->product_image = $path;
            $product->save();
        }
        $request->session()->flash('status', 'sukses menambah produk!');
        return redirect()->to(url('admin/products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'title' => 'sportline | detail',
            'product' => Product::find($id),
            'breadCrumb' => 'Detail'
        ];
        return view('pages.admin.product.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'product' => Product::find($id),
            'breadCrumb' => 'edit',
            'title' => 'sportline | edit'
        ];

        return view('pages.admin.product.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduct $request, $id)
    {
        $validated = $request->validated();
        $path = '';
        if (isset($validated['product_image'])) {
            $path = $request->product_image->store('product', 'public');
        } else {
            $path = $validated['old_pict'];
        }

        if (Product::where('id', $id)
            ->update([
                'product_name' => $validated['product_name'],
                'product_price' => $validated['product_price'],
                'product_qty' => $validated['product_qty'],
                'product_description' => $validated['product_description'],
                'product_image' => $path,
            ])
        ) {
            $request->session()->flash('status', 'gagal update!');
            return redirect()->to(url('admin/products'));
        } else {
            $request->session()->flash('status', 'sukses update!');
            return redirect()->to(url('admin/products'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        if (Product::where('id', $id)->delete()) {
            $request->session()->flash('status', 'sukses update!');
            return redirect()->to(url('admin/products'));
        } else {
            $request->session()->flash('status', 'gagal update!');
            return redirect()->to(url('admin/products'));
        }
    }
}
