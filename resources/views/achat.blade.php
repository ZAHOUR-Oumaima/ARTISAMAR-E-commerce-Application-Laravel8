@extends('layout')
<link href="/css/AchatStyle.css" type="text/css" rel="stylesheet"> 
@section('title')
Achat
@endsection

@section('content')

<!--commande-->
    <div class="row commande_form">
	<div class="col-70">
      <div class="container Achat">
        <h3 class="title_commande">Finalisation de la commande</h3>

        <form action="userComplete" method="POST">
        @csrf
          <div class="row commande">
            <div class="col"> 
              <h4>Adresse</h4>

              <div class="row commande"> 
                <div class="col-50"> 
                  <label for="nm"><i class="fa fa-user"></i> Nom</label>
                  <input class="formulaire-txt" type="text" id="nm" name="nom" placeholder="Entrer votre nom">
                </div>
                <div class="col-50"> 
                  <label for="prn"><i class="fa fa-user"></i> Prenom</label>
                  <input class="formulaire-txt" type="text" id="prn" name="prenom" placeholder="Entrer votre prenom">
                </div>
              </div>

              <div class="row commande"> 
                <div class="col-50"> 
                  <label for="num"><i class="fa fa-phone-square" aria-hidden="true"></i> Téléphone</label>
                  <input class="formulaire-txt" type="text" id="num" name="numTelephone"  placeholder="Entrer votre numéro de téléphone mobile ">
                </div>
                <div class="col-50"> 
                  <label for="email"><i class="fa fa-envelope"></i> Email</label>
                  <input class="formulaire-txt" type="text" id="email" name="email" placeholder="Entrer votre email">
                </div>
              </div>
              <label for="adr"><i class="fas fa-address-card" aria-hidden="true"></i> Adresse</label>
              <input class="formulaire-txt" type="text" id="adr" name="adresse"  placeholder="Entrer votre adresse">

              <div class="row commande"> 
                <div class="col-50"> 
                  <label for="rg"><i class="fa fa-map-marker" aria-hidden="true"></i> Région</label>
                  <input class="formulaire-txt" type="text" id="rg" name="region" placeholder="Entrer votre région">
                </div>
                <div class="col-50"> 
                  <label for="ville"><i class="fa fa-institution"></i> Ville</label>
                  <input class="formulaire-txt" type="text" id="ville" name="ville"  placeholder="Entrer votre ville">
                </div>
              </div>
            </div>  
          </div>
          <input type="submit" value="Enregistrer" class="btn">
        </form>
      </div>
    </div>
   
    <div class="col-30">
      <div class="container Achat">
        <h3 class="title_commande">Résumé</h3>
        <div class="row commande">
          <div class="col">
            <h4>Votre commande<span class="price" style="color: black"><i class="fa fa-shopping-cart" aria-hidden="true"></i><b>1</b></span></h4>
            <p><a class="link-product" href="#">TAPIE</a><span class="price">1000dh</p>
            <hr>
            <p>Totale <span class="price" style="color: black"><b>3600dh</b></span></p>
          </div>
        </div>

      </div>
    </div>
  </div>		
  <br><br><br>
@endsection