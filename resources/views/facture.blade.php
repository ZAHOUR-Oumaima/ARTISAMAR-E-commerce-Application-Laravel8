@extends('layout')
<link href="/css/AchatStyle.css" type="text/css" rel="stylesheet"> 
<link href="/css/PaiementStyle.css" type="text/css" rel="stylesheet"> 
@section('title')
Facture
@endsection

<?php 
//   $nom = $_GET['nom'];
//   $prenom = $_GET['prenom'];
//   $adresse = $_GET['adresse'];
//   $ville = $_GET['ville'];
?>

@section('content')
<!--commande-->
<div class="row commande_form">
	<div class="col-70">
      <div class="container Achat">
        <h3 class="title_facture">Adresse De Livraison</h3>
        <div class="row justify-content-around">
            <div class="adresse col-md-6" >
                <p class="name">{{$data_user['first_name']}} {{$data_user['last_name']}} </p>
                <p class="name">{{$data_user['phone']}}</p>
                <p class="adresse-content">{{$data_user['address']}}, {{$data_user['city']}}, Maroc</p>
                <a href="#" style="padding-left: 320px;"><i class="far fa-edit"></i>Modifier</a>
            </div>
            <div class="col-md-5">
                <div style="border: 1px solid black; margin-top: 50px; padding: 5x;"> <a href="#"></a>+ AJOUTER UNE NOUVELLE ADRESSE</a></div>
            </div>
        </div>
      </div>
      <br><br><br>
        <div class="container Méthode-paiement">
            <div class="titre-page-mode"><h3>Mode De Paiement</h3></div> 
            <form action="" method="">
                <obligatoire/>
                <div class="form-check form-check-inline form-méthode-paiement">
                    <span class="méthode-titre" style="margin-left: -40px; color: white;">à la livraison</span>
                    <input class="form-check-input check-méthode" type="radio" name="méthode-paiement" id="inlineRadio1" value="OnDelivery" required>
                    <label class="form-check-label" for="inlineRadio1"><img class="paiement-img" src="/images/OnDelivery.png" alt=""></label>
                </div>
                <div class="form-check form-check-inline form-méthode-paiement">
                    <span class="méthode-titre enligne" style="color: white;">en ligne</span>
                    <input class="form-check-input check-méthode"  type="radio" name="méthode-paiement" id="inlineRadio2" value="Online">
                    <label class="form-check-label" for="inlineRadio2"><img class="paiement-img"  src="/images/Onligne.png" alt=""></label>
                </div>
                <input type="submit" value="Valider" class="btn-methode" >
                
            </form>
        </div>

    </div>

    <div class="col-30">
      <div class="container Achat Facture">
        <h3 class="title_facture">Facture</h3>
        <div class="row commande">
          <div class="col">
            <h4>Votre commande<span class="price" style="color: black"><i class="fa fa-shopping-cart" aria-hidden="true"></i><b> 1 </b></span></h4>
            <p><a class="link-product" href="#">TAPIE</a><span class="price">1000dh</p>
            <hr>
            <p>Frais de livraison <span class="price" style="color: black"><b>50 dh</b></span></p>
            <hr>
            <p>Totale <span class="price" style="color: black"><b>1050 dh</b></span></p>
          </div>
        </div>
      </div>
    </div>

</div>

<!-- Modal Commande-Succes -->
<div class="bg-modal">
    <div class="modal-content">
        <div class="close">+</div>
        <img src="/images/iconeSucces.png">
        <p>Merci pour votre confiance! Votre commande a bien été prise en compte.</p>
        <a href="#"  class="buttonPopUp"> OK </a>
    </div>
</div>
  
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <!-- <script>
    $("#submit").click(function(){
      alert("here";)
    });
  </script> -->

<script>
    	document.querySelector('.btn-methode').addEventListener('click',function(){
    		document.querySelector('.bg-modal').style.display = 'flex';
    	});
</script>

<script>
    	document.querySelector('.close').addEventListener('click',function(){
    		document.querySelector('.bg-modal').style.display = 'none';
    	});

        document.querySelector('.buttonPopUp').addEventListener('click',function(){
    		document.querySelector('.bg-modal').style.display = 'none';
    	});
</script>

  <br><br><br>

@endsection