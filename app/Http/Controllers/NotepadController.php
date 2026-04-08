<?php

namespace App\Http\Controllers;

use App\Models\Notepad;
use Illuminate\Http\Request;

class NotepadController extends Controller
{
    // READ ALL
    public function index()
    {
        $notepads = Notepad::latest()->get();
        return view('notepads.index', compact('notepads'));
    }
 
    // SHOW CREATE FORM
    public function create()
    {
        return view('notepads.create');
    }
 
    // STORE DATA
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
 
        Notepad::create($request->all());
 
        return redirect()->route('notepads.index')
                         ->with('success', 'Notepad created successfully.');
    }
 
    // SHOW SINGLE POST
    public function show(Notepad $notepad)
    {
        return view('notepads.show', compact('notepad'));
    }
 
    // SHOW EDIT FORM
    public function edit(Notepad $notepad)
    {
        return view('notepads.edit', compact('notepad'));
    }
 
    // UPDATE DATA
    public function update(Request $request, Notepad $notepad)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
 
        $notepad->update($request->all());
 
        return redirect()->route('notepads.index')
                         ->with('success', 'Notepad updated successfully.');
    }
 
    // DELETE DATA
    public function destroy(Notepad $notepad)
    {
        $notepad->delete();
 
        return redirect()->route('notepads.index')
                         ->with('success', 'Notepad deleted successfully.');
    }
}
