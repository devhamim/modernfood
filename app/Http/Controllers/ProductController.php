<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::all();
        return view('backend.product.index', [
            'products'=>$products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name'      =>'required',
            'title'         =>'',
            'image'         =>'required',
            'description'   =>'',
            'define'       =>'',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/product'), $file_name);
            $validatesData['image'] = $file_name;
        }

        product::create($validatesData);
        toast('Add Success','success');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = product::find($id);
        return view('backend.product.edit', [
            'products'=>$products,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'name'          =>'required',
            'title'         =>'',
            'image'         =>'',
            'description'   =>'',
            'define'        =>'required',
            'status'        =>'required',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/product'), $file_name);
            $validatesData['image'] = $file_name; 
        }
        
        product::where('id', $id)->update($validatesData);
        toast('Update Success','success');   
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        product::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }
}
