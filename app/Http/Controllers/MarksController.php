<?php

namespace App\Http\Controllers;

use App\Models\Marks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class MarksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marks=Marks::all();
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
        $request->validate([
            'score' => 'required|numeric', // par exemple
            'university_id' => 'required|exists:universities,id',
        ]);
    
        $mark = new Marks();
        $mark->qualiteEns = $request->qualiteEns;
        $mark->infrastructure = $request->infrastructure;
        $mark->recherche = $request->recherche;
        $mark->insertionPro = $request->insertionPro;
        $mark->users_id = Auth::id(); // Ou tout autre méthode pour obtenir l'ID de l'utilisateur actuel
        $mark->universities_id = $request->universities_id;
    
        // Enregistrez la notation dans la base de données
        $mark->save();
        
        // Redirigez l'utilisateur vers une autre page ou retournez une réponse JSON
        return redirect()->route('marks.index')->with('success', 'Notation ajoutée avec succès');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Marks $marks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Marks $marks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Marks $marks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marks $marks)
    {
       $marks->delete();
    }
}
