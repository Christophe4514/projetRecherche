<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use App\Models\Intervation;
use App\Models\Seminaire;
use Illuminate\Http\Request;

class IntervationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intervations = Intervation::all();
        $themes = Theme::all()->where('status', 'valide')->pluck('sujet', 'id');
        $seminaires = Seminaire::all()->pluck('nom', 'id');
        $num_intervations = ['1', '2', '3'];
        return view('admin.intervations.index', compact('intervations', 'themes', 'seminaires', 'num_intervations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'seminaire_id' => 'required',
            'heure_debut_intervention' => 'required|max:6',
            'heure_fin_intervention' => 'required|max:6',
            'theme_id' => 'required',
            'num_intervation' => 'required',
        ]);

        $intervation1 = Intervation::where('num_intervation', $request->input('num_intervation'))->where('seminaire_id', $request->input('seminaire_id'))->first();
        $intervation2 = Intervation::where('theme_id', $request->input('theme_id'))->where('seminaire_id', $request->input('seminaire_id'))->first();
        if (!empty($intervation1) || !empty($intervation2)) {
            return back()->with('danger', 'L\'intervention n° ' . $request->input('num_intervation') . ' a déjà été créé pour ce séminaire, Choisissez un autre numéro d\'ordre ou thème !!');
        } else {
            $intervation = new Intervation();
            $intervation->heure_debut_intervention = $request->input('heure_debut_intervention');
            $intervation->heure_fin_intervention = $request->input('heure_fin_intervention');
            $intervation->theme_id = $request->input('theme_id');
            $intervation->seminaire_id = $request->input('seminaire_id');
            $intervation->num_intervation = $request->input('num_intervation');

            $intervation->save();

            return back()->with('status', 'L\'intervention a été créée avec succès !!');
        }
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $intervation = Intervation::find($id);

        $intervation->delete();

        return back()->with('status', 'L\'intervention a été supprimée avec succès !!');
    }
}
