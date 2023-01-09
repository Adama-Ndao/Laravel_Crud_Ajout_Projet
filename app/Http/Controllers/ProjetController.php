<?php

namespace App\Http\Controllers;

use App\Models\Phase;
use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function projet()
    {
        $projets = Projet::all(); 

        return view('projet', [
            'projets' =>$projets
        ]);
    }

    public function ajout()
    {
        return view('ajout');
    }

    public function store(Request $request)
    {
        Projet::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'dateDebut' => $request->dateDebut,
            'dateFin' => $request->dateFin
        ]);
       
        return redirect()->back(); 

    }

    public function delete($id) {
        $projet = Projet::find($id);
        $projet->delete();
        return redirect('/projet');
    }

    public function supprimer($id) {
        $projet = Phase::find($id);
        $projet->delete();
        return redirect('/phase'.'/'.$projet->projet_id);
    }

    public function phase($id)
    {
        $projet = Projet::find($id); 

        return view('phase', [
            'projet' =>$projet
        ]);
    }
    public function ajouter($id)
    {
        return view('ajouter', ['id' =>$id]);
    }
    public function storer(Request $request)
    {
        Phase::create([
            'nom' => $request->nom,
            'duree' => $request->duree,
            'priorite' => $request->priorite,
            'projet_id' =>$request->id
        ]);
        return redirect()->back(); 
    }
    public function edit($id)
    {
        $projets = Projet::find($id);
        return view('edit', ['projets' =>$projets]);
       
    }
    public function update($id,Request $request) {
        $projets = Projet::find($id);
        $projets->nom = $request->nom;
        $projets->description = $request->description;
        $projets->dateDebut = $request->dateDebut;
        $projets->dateFin = $request->dateFin;

        $projets->save();
        return redirect('/projet');
    }
    
    public function updated($id,Request $request) {
        $phase = Phase::find($id);
        $phase->nom = $request->nom;
        $phase->duree = $request->duree;
        $phase->priorite = $request->priorite;


        $phase->save();
        return redirect('/phase'.'/'.$phase->projet_id);
    }

}
