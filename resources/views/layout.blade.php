<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <!-- Style CSS -->
        <link href="/css/HomeStyle.css" type="text/css" rel="stylesheet">
        <link href="/css/HeaderStyle.css" type="text/css" rel="stylesheet">
        <link href="/css/FooterStyle.css" type="text/css" rel="stylesheet">
        <!-- Icons-->
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
        <!--Header-->
        <div class="Header">
            <!--Barre1 de navigation-->
            <nav class="min-navbar">
                <ul class="elts-min-navbar">
                    <li><a><i class="fas fa-phone-alt"></i> +212 6 xx xx xx</a></li>
                    <li><a href="#">A propos</a></li>
                </ul>
            </nav>
            <!--Barre2 de navigation-->
            <nav class="menu-nav">
                <div class="wrapper">
                    <div class="logo"><a href="/"><img src="/images/logo2.png" alt="" width="200px"></a></div>
                    <ul class="nav-links">
                        <li>
                            <a href="#" class="desktop-item">Accessoires</a>
                            <div class="mega-box">
                                <div class="content">
                                    <div class="row">
                                        <ul class="mega-links">
                                            <li class="menu_title">Bijoux</li>
                                            <li><a href="#">Bracelets & Bagues</a></li>
                                            <li><a href="#">Boucles d'oreille</a></li>
                                            <li><a href="#">Colliers</a></li>
                                            <li><a href="#">Boites à bijoux</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <ul class="mega-links">
                                            <li class="menu_title">Petits accesoires</li>
                                            <li><a href="#">Chapeaux</a></li>
                                            <li><a href="#">Echarpes</a></li>
                                            <li><a href="#">Ceintures</a></li>
                                            <li><a href="#">Sacs & porte monnaie</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="desktop-item">Cosmétique</a>
                            <div class="mega-box">
                                <div class="content">
                                    <div class="row">
                                        <ul class="mega-links">
                                            <li class="menu_title">Soin du visage</li>
                                            <li><a href="#">Huiles pour visage</a></li>
                                            <li><a href="#">Savon visage</a></li>
                                            <li><a href="#">Toniques et eaux</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <ul class="mega-links">
                                            <li class="menu_title">Soin cheveux</li>
                                            <li><a href="#">huiles pour cheveux</a></li>
                                            <li><a href="#">Masque cheveux</a></li>
                                            <li><a href="#">Shampoings</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <ul class="mega-links">
                                            <li class="menu_title">Soin du corps</li>
                                            <li><a href="#">huiles pour le corps</a></li>
                                            <li><a href="#">Savon pour le corps</a></li>
                                            <li><a href="#">Exfoliant pour le corps</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="desktop-item">Mode</a>
                            <div class="mega-box">
                                <div class="content">
                                    <div class="row">
                                        <ul class="mega-links">
                                            <li class="menu_title">Femme</li>
                                            <li><a href="#">Vêtements</a></li>
                                            <li><a href="#">Sacs </a></li>
                                            <li><a href="#">Chaussures</a></li>
                                            <li><a href="#">Bijoux</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <ul class="mega-links">
                                            <li class="menu_title">Homme</li>
                                            <li><a href="#">Vêtements</a></li>
                                            <li><a href="#">Porte feuilles</a></li>
                                            <li><a href="#">Chaussures</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <ul class="mega-links">
                                            <li class="menu_title">Enfant </li>
                                            <li><a href="#">Fille</a></li>
                                            <li><a href="#">Garçon</a></li>
                                            <li><a href="#">Bébé</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="desktop-item">Décoration</a>
                            <div class="mega-box">
                                <div class="content">
                                    <div class="row">
                                        <ul class="mega-links">
                                            <li class="menu_title">Salon & Chambres</li>
                                            <li><a href="#">Tapis & Couvertures</a></li>
                                            <li><a href="#">Coussins </a></li>
                                            <li><a href="#">Lampes & Abat-jour</a></li>
                                            <li><a href="#">Panier de rangement</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <ul class="mega-links">
                                            <li class="menu_title">Textile</li>
                                            <li><a href="#">linge de lit</a></li>
                                            <li><a href="#">Plaids marocains</a></li>
                                            <li><a href="#">Coussins</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <ul class="mega-links">
                                            <li class="menu_title">Décoration murale </li>
                                            <li><a href="#">Miroirs</a></li>
                                            <li><a href="#">Décoration murale</a></li>
                                            <li><a href="#">Carreaux de Zellige</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <ul class="mega-links">
                                            <li class="menu_title">Meuble d'accent </li>
                                            <li><a href="#">Poufs</a></li>
                                            <li><a href="#">Tables d'appoint</a></li>
                                            <li><a href="#">Coussins & Poufs</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="desktop-item">Décor de table</a>
                            <div class="mega-box">
                                <div class="content">
                                    <div class="row">
                                        <ul class="mega-links">
                                            <li class="menu_title">Poterie marocaine </li>
                                            <li><a href="#">Tajine</a></li>
                                            <li><a href="#">Boites & bonbonnières</a></li>
                                            <li><a href="#">Vases</a></li>
                                            <li><a href="#">Assiettes</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <ul class="mega-links">
                                            <li class="menu_title">Accessoires table</li>
                                            <li><a href="#">Bougeoir & Senteur</a></li>
                                            <li><a href="#">Linge de tables</a></li>
                                            <li><a href="#">Sucrier</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <ul class="mega-links">
                                            <li class="menu_title">Placemats </li>
                                            <li><a href="#">Sous verre</a></li>
                                            <li><a href="#">Sets de tables</a></li>
                                            <li><a href="#">trépied</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <ul class="mega-links">
                                            <li class="menu_title">Vaisselle</li>
                                            <li><a href="#">Plateaux & assiettes</a></li>
                                            <li><a href="#">bols & assiettes</a></li>
                                            <li><a href="#">Théières & coffret & Sucrier</a></li>
                                            <li><a href="#">Tajines</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>    
                        </li>
                    </ul>
                    </ul>
                        <form class="search" method="POST" action="">
                            <div class="search-box">
                                <input class="search-txt" style="display:inline;" type="text" placeholder="Chercher des produits">
                                <button class="search-btn" href="#"> <i class="fas fa-search"></i></button> 
                            </div>
                        </form>
                    </ul>
                    <ul class="flex-container user-tools nav-links">
                    @if (session()->has('user'))
                        <li>
                            <a href="#" class="desktop-item" style="color: white;"><i class="far fa-user"></i></a>
                            <div class="drop-menu">
                                <div class="content">
                                    <div class="row">
                                        <ul class="mega-links">
                                            <li><a href="login">Mon compte</a></li>
                                            <li><a href="login">Se déconnecter</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @else
                        <li>
                            <a href="#" class="desktop-item" style="color: white;"><i class="far fa-user"></i></a>
                            <div class="drop-menu">
                                <div class="content">
                                    <div class="row">
                                        <ul class="mega-links">
                                            <li><a href="login">Se connecter/S'inscrire</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endif
                        <li ><a href="#" style="color: white;"><i class="fas fa-shopping-cart"></i></a></li>
                        <li ><a href="#" style="color: white;"><i class="far fa-heart"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- content -->
        @yield('content')
        <!--footer-->
        <footer>
            <div class="main-content">
                <div class="left box">
                    <h2>À propos de nous</h2>
                    <div class="content">
                        <p> ARTISAMAR est une boutique en ligne présentant des produit artisanaux marocains. Elle créé dans le cadre d'un projet scolaire par quatre élèves ingénieurs, dont le but d'appliquer et de tester les connaissances developpement web</p>
                        <div class="social">
                            <a href="#facebook"><span class="fab fa-facebook-f" style="color: white;"></span></a>
                            <a href="#Instagram"><span class="fab fa-instagram" style="color: white;"></span></a>
                    
                        </div>
                    </div>
                </div>
                <div class="center box">
                    <h2>Addresse</h2>
                    <div class="content">
                        <div class="place">
                            <span class="fas fa-map-marker-alt"></span>
                            <span class="text">Casablanca, Maroc</span>
                        </div>
                        <div class="phone">
                            <span class="fas fa-phone-alt"></span>
                            <span class="text">+212 6 xx xx xx xx</span>
                        </div>
                        <div class="email">
                            <span class="fas fa-envelope"></span>
                            <span class="text">artisamar@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="right box">
                    <h2>Contactez Nous</h2>
                    <div class="content">
                        <form action="#">
                            <div class="email">
                                <div class="text">Email *</div>
                                <input type="email" required>
                            </div>
                            <div class="msg">
                                <div class="text">Message *</div>
                                <textarea  id=".msgForm" rows="2" cols="50" style="background-color:#242323; color:white" required></textarea>
                        
                            </div>
                            <div class="btn">
                                <button type="submit">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </br>
            <div class="bottom">
                <center>
                    <span class="credit">L'artisanat marocain pour tous et partout</a> | </span>
                    <span class="far fa-copyright"></span> 2020 Artisamar.
                </center>
            </div>
        </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>