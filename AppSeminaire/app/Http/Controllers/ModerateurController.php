<?php

namespace App\Http\Controllers;

use App\Models\Moderateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ModerateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $moderateurs = Moderateur::all();
        $grades = ['professeur',
                    'apprenant',
                    'doctorant',
                    'chercheur',
                  ];
        return view('admin.moderateurs.index', compact('moderateurs','grades'));
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
            'nom' => 'required',
            'postnom' => 'required',
            'prenom' => 'required',
            'grade' => 'required',
            'photo' => 'image|nullable|max:5999'
        ]);

        if ($request->hasFile('photo')) {
            //nom de l'image avec extension
            $fileNameWithExt = $request->file('photo')->getClientOriginalName();
            //nom  du fichier
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //extension
            $ext = $request->file('photo')->getClientOriginalExtension();
            //nom de l'image to store
            $fileNameToStrore = $filename . '_' . time() . '.' . $ext;
            //upload image et creation du dossier de stockage
            $path = $request->file('photo')->storeAs('public/moderateur_images', $fileNameToStrore);
        } else {
            $fileNameToStrore = 'noimage.jpg';
        }


        $moderateur = new Moderateur();
        $moderateur->nom = $request->input('nom');
        $moderateur->postnom = $request->input('postnom');
        $moderateur->prenom = $request->input('prenom');
        $moderateur->grade = $request->input('grade');
        $moderateur->photo = $fileNameToStrore;

        $moderateur->save();
        return back()->with('status', 'Le modérateur a été enregistré avec succès !!');
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
            'nom' => 'required',
            'postnom' => 'required',
            'prenom' => 'required',
            'grade' => 'required',
            'photo' => 'image|nullable|max:5999'
        ]);

        $moderateur = Moderateur::find($id);
        $moderateur->nom = $request->input('nom');
        $moderateur->postnom = $request->input('postnom');
        $moderateur->prenom = $request->input('prenom');
        $moderateur->grade = $request->input('grade');

        if ($request->hasFile('photo')) {
            //nom de l'image avec extension
            $fileNameWithExt = $request->file('photo')->getClientOriginalName();
            //nom  du fichier
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //extension
            $ext = $request->file('photo')->getClientOriginalExtension();
            //nom de l'image to store
            $fileNameToStrore = $filename . '_' . time() . '.' . $ext;
            //upload image et creation du dossier de stockage
            $path = $request->file('photo')->storeAs('public/moderateur_images', $fileNameToStrore);

            if ($moderateur->moderateur_image != 'noimage.jpg') {
                Storage::delete('public/moderateur_images/' . $moderateur->moderateur_image);
            }

            $moderateur->photo = $fileNameToStrore;
        }

        $moderateur->update();

        return back()->with('status', 'Le modérateur a été modifié avec succès !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $moderateur = moderateur::find($id);

        if ($moderateur->photo != 'noimage.jpg') {
            Storage::delete('public/moderateur_images/' . $moderateur->photo);
        }

        $moderateur->delete();

        return back()->with('status', 'Le modérateur a été supprimé avec succès !!');
    }
}
