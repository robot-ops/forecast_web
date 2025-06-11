<?php

namespace App\Http\Controllers;

use App\Models\CoFiringData;
use Illuminate\Http\Request;

class CoFiringDataController extends Controller
{
    //
    public function index()
    {
        // Logic to retrieve and return co-firing data
        $cofiring = CoFiringData::all();
        return view('admin.table_history', compact('cofiring'));
    }

    public function create()
    {
        // Logic to show the form for creating new co-firing data
        return view('admin.firing_input');
    }
    public function store(Request $request)
    {
        // Logic to store new co-firing data
        $request->validate([
            'biomass' => 'required|numeric',
            'batubara' => 'required|numeric',
            'nk_biomass' => 'required|numeric',
            'nk_batubara' => 'required|numeric',
            'mwh_brown' => 'required|numeric',
            'mwh_green' => 'required|numeric',
            'mwh_total' => 'required|numeric',
            'sh_bm' => 'required|numeric',
            'co2_eq_avoid' => 'required|numeric',
            'date_input' => 'required|date',
            //'admin_id' => 'required|exists:admin,id', // Assuming you have an admin table
            // Add other fields as necessary
        ]);

        $data = $request->all();
        $data['admin_id'] = 1;

        CoFiringData::create($data);


        // CoFiringData::create($request->all());

        return redirect()->route('table-history.index')->with('success', 'Co-firing data added successfully.');
    }
}
