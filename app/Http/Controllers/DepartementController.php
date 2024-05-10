<?php

namespace App\Http\Controllers;

use App\Models\departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    public function store(Request $request){
        $department= new departement();
       $department->libelle=$request->libelle;
        $department->save();
        
    }

    
}
