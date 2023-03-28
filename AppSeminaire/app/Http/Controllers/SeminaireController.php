<?php

namespace App\Http\Controllers;

use App\Models\Moderateur;
use App\Models\Seminaire;
use Illuminate\Http\Request;

class SeminaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $seminaires = Seminaire::all();
        return view('admin.seminaires.index', compact('seminaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $num_jours = ['1','2','3','4','5','6','7','8','9','10','11',
                        '12','13','14','15','16','17','18','19','20','21',
                        '22','23','24','25','26','27','28','29','30','31'];
        $lieux = ['Local B1', 'Local D5', 'Local B25'];
        $jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
        $mois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet',
                'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
        $moderateurs = Moderateur::all()->pluck('nom', 'id');
        return view('admin.seminaires.create', compact('lieux', 'jours', 'mois','num_jours','moderateurs'));
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
            'heure_debut' => 'required',
            'heure_fin' => 'required',
            'lieu' => 'required',
            'num_jour' => 'required',
            'jour' => 'required',
            'mois' => 'required',
            'moderateur' => 'required',
        ]);

        $seminaire = new Seminaire();
        $seminaire->heure_debut = $request->input('heure_debut');
        $seminaire->heure_fin = $request->input('heure_fin');
        $seminaire->lieu = $request->input('lieu');
        $seminaire->num_jour = $request->input('num_jour');
        $seminaire->jour = $request->input('jour');
        $seminaire->mois = $request->input('mois');
        $seminaire->annee = date('Y');
        $seminaire->moderateur_id = $request->input('moderateur');

        $seminaire->save();

        return back()->with('status', 'Le séminaire a été créé avec succès !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $seminaire = Seminaire::find($id);

        return view('admin.seminaires.show', compact('seminaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seminaire = Seminaire::find($id);
        $num_jours = ['1','2','3','4','5','6','7','8','9','10','11',
                        '12','13','14','15','16','17','18','19','20','21',
                        '22','23','24','25','26','27','28','29','30','31'];
        $lieux = ['Local B1', 'Local D5', 'Local B25'];
        $jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
        $mois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet',
                'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
        $moderateurs = Moderateur::all()->pluck('nom', 'id');
        return view('admin.seminaires.edit', compact('seminaire','lieux', 'jours', 'mois','num_jours','moderateurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'heure_debut' => 'required',
            'heure_fin' => 'required',
            'lieu' => 'required',
            'num_jour' => 'required',
            'jour' => 'required',
            'mois' => 'required',
            'moderateur_id' => 'required',
        ]);

        $seminaire = Seminaire::find($id);
        $seminaire->heure_debut = $request->input('heure_debut');
        $seminaire->heure_fin = $request->input('heure_fin');
        $seminaire->lieu = $request->input('lieu');
        $seminaire->num_jour = $request->input('num_jour');
        $seminaire->jour = $request->input('jour');
        $seminaire->mois = $request->input('mois');
        $seminaire->annee = date('Y');
        $seminaire->moderateur_id = $request->input('moderateur_id');

        $seminaire->update();

        return redirect('/seminaires')->with('status', 'Le séminaire a été modifié avec succès !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seminaire = Seminaire::find($id);
        $seminaire->delete();

        return back()->with('status', 'Le séminaire a été supprimé avec succès !!');
    }
}
