<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\utilisateur;
use App\Models\commande;
use App\Models\facture;
use Session;

class CommandeController extends Controller
{
    //
    function addCommande(Request $req)
    { 
        $id_client = session::get('user')['id_user'];
        $utilisateur= Utilisateur::where(['id_user'=>$id_client])->first();
        $address= $utilisateur->address;
        $date_com= date('Y/m/d');
        
        $commande= new commande;
        $commande->id_client= $id_client;
        $commande->adresse_com= $address;
        $commande->date_com= $date_com;
        $commande->save();
        
        return redirect('achat');
    }

    
}
