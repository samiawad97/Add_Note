<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{

    public function index()
    {
        $notes = Note::orderBy('created_at', 'DESC')->get();
        return view('notes')->with('notes', $notes);
    }
 
    public function create(){
        return view('create');
    }

    public function store(Request $request)
    {

        $note = new Note;
        $note->title = $request->title;
        $note->content = $request->content;
        $note->save();
    
        return redirect()->back();
     
    }

    
}
