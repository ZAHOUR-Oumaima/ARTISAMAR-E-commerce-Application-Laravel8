<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\utilisateur;
use App\Models\commande;
use App\Models\facture;
use Session;

class UsersController extends Controller
{
    //
    function addUser(Request $req)
    {
        //validation rules
        $req->validate([
            'username'=>'required | max:20',
            'email'=>'required',
            'password'=>'required | min:8' 
        ]);

        $utilisateur= new utilisateur;
        $utilisateur->username = $req->username;
        $utilisateur->email = $req->email;
        $utilisateur->password = $req->password;
        $utilisateur->first_name = "";
        $utilisateur->last_name = "";
        $utilisateur->phone = "";
        $utilisateur->address = "";
        $utilisateur->city = "";
        $utilisateur->save();
        //variable $session
        $user= Utilisateur::where(['email'=>$req->email])->first();
        $req->session()->put('user',$user);
        return  redirect('/');
        
    }
    function completeUser(Request $req)
    { 
        //validation rules
       $req->validate([
            'nom'=>'required | max:20',
            'prenom'=>'required | max:20',
            'numTelephone'=>'required | max:20',
            'adresse'=>'required',
            'ville'=>'required | max:40' 
        ]);
        

        $id_client = session::get('user')['id_user'];
        $utilisateur= Utilisateur::where(['id_user'=>$id_client])->first();
        
        // $utilisateur->username = session::get('user')['username'];
        // $utilisateur->email = session::get('user')['email'];
        // $utilisateur->password = session::get('user')['password'];
        $utilisateur->first_name = $req->prenom;
        $utilisateur->last_name = $req->nom;
        $utilisateur->phone = $req->numTelephone;
        $utilisateur->address = $req->adresse;
        $utilisateur->city = $req->ville;
        $utilisateur->save(); 
        
        //Enregistrement facture
        $date_fact= date('Y/m/d');
        if($utilisateur->city=="casablanca"){
            $frais= 50;
        }
        else $frais= 100;
        
        $commande= commande::where(['id_client'=>$id_client, 'date_com'=>$date_fact])->first();

        $facture = new facture;

        $facture->date_fact = $date_fact;
        $facture->id_com = $commande->id_com;
        $facture->frais_livraison = $frais;
        $facture->save();
        
        return view('facture', ['data_user'=>$utilisateur]);
    }

}
