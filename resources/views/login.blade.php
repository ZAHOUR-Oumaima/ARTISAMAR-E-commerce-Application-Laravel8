@extends('layout')
<link href="/css/loginStyle.css" type="text/css" rel="stylesheet"> 
@section('title')
Connexion
@endsection

@section('content')

<!--Inscription - Connexion-->
<div class="container-fluid">
    	<div class="row Login_Row justify-content-center">
    		<div class="col-md-4 col-xs-12" id="Block_connexion">
                <h2 id="cnx">Connexion</h2>
                <br>
                <form action="" method="POST">
                    @csrf
                    <div class="input-div">
                        <label for="email_cnx">Email</label><br>
                        <input id="email_cnx" name="email_cnx" type="email" class="form-control" placeholder="Entrez l'adresse email .." required/></br>
                        <label for="password_cnx">Mot de passe</label><br>
                        <input id="password_cnx" name="password_cnx" type="password" class="form-control" placeholder="Entrez le mot de passe .." required/></br>
                        <button type="submit" name="submit" class="btn" >Connexion</button></br>
                        <br>
                        <a id="forgotPWD" href="#"><p>Mot de passe oublié ?</p></a>
                    </div>
                </form>
            </div>
            <div class="col-md-4 col-xs-12 vertical-line" id="Block_inscription">
                <h2 id="insc">Nouveau client</h2>
                <br>
                <form action="add" method="POST">
                    @csrf
                    <div class="input-div">
                        <label for="username">Nom d'utilisateur</label><br>
                        <input id="username" name="username" type="text" class="form-control" placeholder="Entrez le nom d'utilisateur .." /></br>
                        @error('username')
                        <div style="color: red">{{$message}}</div>
                        @enderror
                        <label for="email_insc">Email</label><br>
                        <input id="email_insc" name="email" type="email" class="form-control" placeholder="Entrez l'adresse email .." /></br>
                        @error('email')
                        <div style="color: red">{{$message}}</div>
                        @enderror
                        <label for="password_insc">Mot de passe</label><br>
                        <input id="password_insc" name="password" type="password" class="form-control" placeholder="Entrez le mot de passe .." /></br>
                        @error('password')
                        <div style="color: red;">{{$message}}</div>
                        @enderror
                        <label for="password_confirm">Confirmer le mot de passe</label><br>
                        <input id="password_confirm" name="password_confirm" type="password" class="form-control" placeholder="Entrez le mot de passe .." /></br>
                        <button type="submit" name="submit" class="btn" >Inscription</button></br>
                        <br>
                    </div>
                </form>
            </div>
    	</div>
    </div>
<br><br><br>
@endsection