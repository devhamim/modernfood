<?php

namespace App\Http\Controllers;

use App\Models\dealerform;
use App\Models\visitingarea;
use Illuminate\Http\Request;

class DealerFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dealerforms = dealerform::all();
        $visitingareas = visitingarea::all();
        return view('backend.dealerform.index',[
            'dealerforms'=>$dealerforms,
            'visitingareas'=>$visitingareas,
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
        'conpany_name' => 'required',
        'name' => 'required',
        'husband_father' => '',
        'company_address' => 'required',
        'dealer_address' => 'required',
        'nid_birth' => 'required',
        'phone' => 'required',
        'email' => '',
        'warehouse' => '',
        'visiting_area' => '',
        'agree' => 'required',
    ];

    // Validation for your main form data
    $validatedData = $request->validate($rules);

    // Create a new dealerform model instance and fill it with the validated data
    $dealerForm = new dealerform;
    $dealerForm->fill($validatedData);
    $dealerForm->save();

    // Loop through the table rows and insert the data into the database
    for ($i = 1; $i <= 3; $i++) {
        $sl = $request->input("sl.$i");
        $company_name = $request->input("visiting_company_name.$i");
        $visiting_product = $request->input("visiting_product.$i");
        $monthly_sell = $request->input("monthly_sell.$i");

        // Create a new visitingarea instance
        $visitingarea = new visitingarea;
        $visitingarea->sl = $sl;
        $visitingarea->visiting_company_name = $company_name;
        $visitingarea->visiting_product = $visiting_product;
        $visitingarea->monthly_sell = $monthly_sell;

        // Set the dealerform_id to the ID of the created dealerForm
        $visitingarea->dealerform_id = $dealerForm->id;

        $visitingarea->save();
    }

    toast('Add Success', 'success');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        visitingarea::where('dealerform_id', $id)->delete();

        dealerform::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }

    // dealerform_visiting
    function dealerform_visiting($id){
        $visitingareas = visitingarea::where('dealerform_id', $id)->get();
        return view('backend.dealerform.visitingarea', [
            'visitingareas'=>$visitingareas,
        ]);
    }
}
