<?php

namespace App\Http\Controllers;

use App\Models\media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Str;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medias = media::all();
        return view('backend.media.index', [
            'medias'=>$medias,
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
            'title'         =>'required',
            'sort_desp'       =>'required',
            'image'         =>'',
            'description'   =>'required',
        ];

        $validatesData = $request->validate($rules); 
        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/media'), $file_name);
            $validatesData['image'] = $file_name;
        }
        
        $validatesData['added_by'] = Auth::id(); 
        $validatesData['slug'] = Str::lower(str_replace(' ', '-', $request->title)). '-'. rand(0, 999999); 

        media::create($validatesData);
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
        $medias = media::find($id);
        return view('backend.media.edit', [
            'medias'=>$medias,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'title'             =>'required',
            'sort_desp'         =>'required',
            'image'             =>'',
            'description'       =>'required',
            'status'            =>'',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/media'), $file_name);
            $validatesData['image'] = $file_name; 
        }

        media::where('id', $id)->update($validatesData);
        toast('Update Success','success');   
        return redirect()->route('medias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        media::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }
}
