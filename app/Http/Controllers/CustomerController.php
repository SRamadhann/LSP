<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = User::all();
        return view('admin.tampil.tampilCustomer', compact('customers'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $customers = User::find($id);
        return view('admin.crud.editCustomer', compact('customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'role' => 'required',
        ]);

        $customers = User::find($id);
        $customers->name = $request->input('name');
        $customers->role = $request->input('role');

        $customers->save();
        
        return redirect()->route('tampil.customer');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $customers = User::find($id);

        $customers->delete();

        return redirect()->route('tampil.customer');
    }
}
