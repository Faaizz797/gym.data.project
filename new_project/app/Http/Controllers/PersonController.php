<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    // Menampilkan Halaman Table
    public function index()
    {
        // Mengambil data
        $person = Person::all();

        return view('table', compact(['person']));
    }

    // Menampilkan Halaman Form
    public function create()
    {
        return view('input');
    }

    // Progress Create
    public function store(Request $request)
    {
        $person = Person::create($request->except(['_token']));
        return redirect('table');
    }

    // Menampilkan Halaman Edit
    public function edit($id)
    {
        $person = Person::find($id);
        return view('update.edit', compact(['person']));
    }

    // Progress update
    public function update($id, Request $request)
    {
        $person = Person::find($id);
        $person -> update($request->all());
        return redirect('table');
    }

    // Progress Delete
    public function destroy($id, Request $request)
    {
        $person = Person::find($id);
        $person -> delete();
        return redirect('table');
    }
}
