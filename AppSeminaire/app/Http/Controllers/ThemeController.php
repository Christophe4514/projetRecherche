<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'sujet' => 'required',
            'domaine_recherche' => 'required',
            'problematique' => 'required',
            'objectif' => 'required',
            'methode_travail' => 'required',
            'cas' => 'required',
            'orateur_id' => 'required',
        ]);

        $theme = new Theme();
        $theme->sujet = $request->input('sujet');
        $theme->domaine_recherche = $request->input('domaine_recherche');
        $theme->problematique = $request->input('problematique');
        $theme->objectif = $request->input('objectif');
        $theme->methode_travail = $request->input('methode_travail');
        $theme->cas = $request->input('cas');
        $theme->orateur_id = $request->input('orateur_id');
        $theme->status = "en attente";

        $theme->save();

        return back()->with('status', 'Le thème a été créé avec succès !!');
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
        $this->validate($request, [
            'sujet' => 'required',
            'domaine_recherche' => 'required',
            'problematique' => 'required',
            'objectif' => 'required',
            'methode_travail' => 'required',
            'cas' => 'required',
            'orateur_id' => 'required',
            'status' => 'required',
        ]);

        $theme = Theme::find($id);
        $theme->sujet = $request->input('sujet');
        $theme->domaine_recherche = $request->input('domaine_recherche');
        $theme->problematique = $request->input('problematique');
        $theme->objectif = $request->input('objectif');
        $theme->methode_travail = $request->input('methode_travail');
        $theme->cas = $request->input('cas');
        $theme->orateur_id = $request->input('orateur_id');
        $theme->status = $request->input('status');


        $theme->update();

        return back()->with('status', 'Le thème a été modifié avec succès !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $theme = Theme::find($id);

        $theme->delete();

        return back()->with('status', 'Le thème a été supprimé avec succès !!');
    }
}
