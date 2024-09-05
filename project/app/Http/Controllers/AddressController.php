<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresses = Address::orderBy('id', 'desc')->paginate(15);
        return view('pages.addresses.index', ['addresses' => $addresses]);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.addresses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'address'  => 'required',
            'city'   => 'required',
            'country'   => 'required',
            'postal_code'   => 'required',
            'person_id'   => 'required'
        ]);

        // Address::create($request->all());

        Address::create([
            'address'  =>  $request->address,
            'city'  =>  $request->city,
            'country'  =>  $request->country,
            'postal_code'  =>  $request->postal_code,
            'person_id'  =>  $request->person_id
        ]);

        return redirect('addresses')->with('status', 'Item created succesfully!');    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        return view('pages.addresses.show', ['address'=>$address]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        return view('pages.addresses.edit', ['address' => $address]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        $address->update($request->all());

        return redirect('addresses')->with('status','Item edited successfully!');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        $address = Address::find($address->id);
        $address->delete();

        return redirect('addresses')->with('status','Item deleted sucessfully!');    }
}