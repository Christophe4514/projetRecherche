<?php

namespace App\Http\Controllers;

use App\Models\Orateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orateurs = Orateur::all();
        $grades = ['professeur',
                    'apprenant',
                    'doctorant',
                    'chercheur',
                  ];
        return view('admin.orateurs.index', compact('orateurs','grades'));
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
            'email' => 'required|email|unique:orateurs',
            'password' => 'required|min:6|same:confirm-password',
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
            $path = $request->file('photo')->storeAs('public/orateur_images', $fileNameToStrore);
        } else {
            $fileNameToStrore = 'noimage.jpg';
        }


        $orateur = new Orateur();
        $orateur->nom = $request->input('nom');
        $orateur->postnom = $request->input('postnom');
        $orateur->prenom = $request->input('prenom');
        $orateur->email = $request->input('email');
        $orateur->password = bcrypt($request->input('password'));
        $orateur->grade = $request->input('grade');
        $orateur->photo = $fileNameToStrore;

        $orateur->save();
        return back()->with('status', 'L\'orateur a été enregistré avec succès !!');
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
            'email' => 'required|email|unique:orateurs,email,'.$id,
            'password' => 'same:confirm-password',
            'nom' => 'required',
            'postnom' => 'required',
            'prenom' => 'required',
            'grade' => 'required',
            'photo' => 'image|nullable|max:5999'
        ]);

        $orateur = Orateur::find($id);
        $orateur->nom = $request->input('nom');
        $orateur->postnom = $request->input('postnom');
        $orateur->prenom = $request->input('prenom');
        $orateur->email = $request->input('email');
        $orateur->grade = $request->input('grade');

        if(!empty($request->input('password'))){
            $orateur->password = bcrypt($request->input('password'));
        }

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
            $path = $request->file('photo')->storeAs('public/orateur_images', $fileNameToStrore);

            if ($orateur->orateur_image != 'noimage.jpg') {
                Storage::delete('public/orateur_images/' . $orateur->photo);
            }

            $orateur->photo = $fileNameToStrore;
        }

        $orateur->update();

        return back()->with('status', 'L\'orateur a été modifié avec succès !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orateur = orateur::find($id);

        if ($orateur->photo != 'noimage.jpg') {
            Storage::delete('public/orateur_images/' . $orateur->photo);
        }

        $orateur->delete();

        return back()->with('status', 'L\'orateur a été supprimé avec succès !!');
    }
}
