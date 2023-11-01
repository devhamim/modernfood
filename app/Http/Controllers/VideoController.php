<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;
use Str;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = video::all();
        return view('backend.videos.index', [
            'videos'=>$videos,
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
            'link'         =>'required',
            'image'         =>'required',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/video'), $file_name);
            $validatesData['image'] = $file_name;
        }

        video::create($validatesData);
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
        $videos = video::find($id);
        return view('backend.videos.edit', [
            'videos'=>$videos,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'link'      =>'required',
            'title'         =>'required',
            'image'         =>'',
            'status'        =>'required',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/video'), $file_name);
            $validatesData['image'] = $file_name; 
        }
        
        video::where('id', $id)->update($validatesData);
        toast('Update Success','success');   
        return redirect()->route('videos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        video::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }
}
