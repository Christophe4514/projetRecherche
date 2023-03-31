<?php

namespace App\Http\Controllers;

use App\Models\Intervation;
use App\Models\Orateur;
use App\Models\Seminaire;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index(){
        $seminaires = DB::table('seminaires')->orderBy('created_at','asc')->limit(1)->get();
        foreach($seminaires as $item)
        {
            $id = $item->id;
        }
        $seminaire = Seminaire::find($id);
        $orateurs = Orateur::all();
        $interventions = Intervation::all();
        $themes = Theme::all()->where('status', 'valide')->pluck('sujet', 'id');
        $seminair = Seminaire::all()->pluck('nom', 'id');
        $num_intervations = ['1', '2', '3'];
        $grades = ['professeur',
        'apprenant',
        'doctorant',
        'chercheur',
      ];

        return view('clients.home', compact('seminaire','orateurs','interventions','themes','seminair','num_intervations','grades'));
    }

    public function create(){
        $grades = ['professeur',
                    'apprenant',
                    'doctorant',
                    'chercheur',
                  ];
        return view('clients.register',compact('grades'));
    }

    public function store(Request $request){
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
}
