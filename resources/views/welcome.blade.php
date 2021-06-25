@extends('layout')

@section('title')
Artisamar
@endsection

@section('content')
<br><br><br><br>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/images/carousel1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="height:465px; width:1268px" src="/images/carousel3.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100"  style="height:465px; " src="/images/carousel2.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div style="text-align: center; margin-top: 30px;">
    <p>Les trésors de l’artisanat Marocain à votre portée</p>
    <h4>Artisamar, La boutique en ligne spécialisée dans l'artisanat marocain</h4>
</div>
<div style="justify-content: center; margin-left: 500px;">
@foreach($products as $product)
<div class="container produit-home">
    <img class="produit-img" src="{{$product['src']}}" alt="">
    <div class="caption">
        <h1>{{$product['Nom_prod']}}</h1>
        <p>{{$product['Description']}}</p>
        <span>{{$product['Prix_unitaire']}} DH</span>
        <form action="commande" method="POST">
            @csrf
            <button class="commande-btn" type="sbmit">Commander</button></a>
        </form>
    </div>
</div>
@endforeach
</div>


@endsection