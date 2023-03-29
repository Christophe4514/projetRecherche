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

        return view('clients.home', compact('seminaire','orateurs','interventions','themes','seminair','num_intervations'));
    }
}
