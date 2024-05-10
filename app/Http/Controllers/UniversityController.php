<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;
use Inertia\Inertia;

use function Termwind\render;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universities=University::all();
        return Inertia::render("AdminPage",[
            'universities' => $universities
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
       $university= new University();
       $university->nom=$request->nom;
       $university->descriptionGen=$request->descriptionGen;
       $university->critereAdmission=$request->critereAdmission;
       if($request->file('photo')->isValid()){
           $photo=$request->photo;
           $fileName=$photo->getClientOriginalName();
           $filePath=$photo->storeAs("photos",$fileName,"public");
           $university->photo=$filePath;
           $university->save();
       }
       return redirect()->route('universities');
    }

    /**
     * Display the specified resource.
     */
    public function show(University $university)
    {
        return Inertia::render('');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(University $university)
    {
        return Inertia::render('comments.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, University $university)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(University $university)
    {

        $university->delete();
        return redirect()->back();
    }


}
