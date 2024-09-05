<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = Person::orderBy('id', 'desc')->paginate(15);
        return view('pages.people.index', ['people' => $people]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.people.create');
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
            'name'          => 'required',
            'birthDate'   => 'required',
            'email'       => 'required',
            // 'image'   => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2024'
        ]);

        $person              = new Person();
        $person->name        = $request->name;
        $person->birthDate = $request->birthDate;
        $person->email     = $request->email;
        $person->save();

        /*if ($request->file('image')) {

            $imagePath = $request->file('image');

            //nomes diferentes para cada imagem
            //                 id          timestamp              path
            $imageName = $player->id . '_' . time() . '_' . $imagePath->getClientOriginalName();

            //save image on folder
            $path = $request->file('image')->storeAs('images/players/' . $player->id, $imageName, 'public');

            $player->image = $path;
        }*/

        $person->save();

        return redirect('people')->with('status', 'Item created succesfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        return view('pages.people.show', ['person'=>$person]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        return view('pages.people.edit', ['person'=>$person]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        $person                = Person::find($person->id);
        $person->name          = $request->name;
        $person->birthDate   = $request->birthDate;
        $person->email       = $request->email;
        $person->save();

        /*
        if ($request->file('image')) {
            if ($player->image) {
                Storage::deleteDirectory('public/images/players/' . $player->id);
            }

            $imagePath = $request->file('image');

            //nomes diferentes para cada imagem
            //                 id          timestamp              path
            $imageName = $player->id . '_' . time() . '_' . $imagePath->getClientOriginalName();

            //save image on folder
            $path = $request->file('image')->storeAs('images/players/' . $player->id, $imageName, 'public');

            $player->image = $path;    
            */
        return redirect('people')->with('status','Item edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        //
        // Storage::deleteDirectory('public/images/players/' . $player->id);
        //Storage::delete('public/' . $player->image);
        
        $person->delete();

        return redirect('people')->with('status','Item deleted sucessfully!');
    
    }
}
