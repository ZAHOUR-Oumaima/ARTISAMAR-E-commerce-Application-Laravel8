<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="/css/adminPanelStyle.css" />
    <link rel="stylesheet" href="/css/adminCrudStyle.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
    <title>DASHBOARD</title>
  </head>
  <body id="body">
    <div class="contain">
      <nav class="navbar">
        <div class="nav_icon" onclick="toggleSidebar()">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <div class="navbar__left">
          <a class="active_link" href="#">Admin</a> <!--active_link : surligne--> 
        </div>
        <div class="navbar__right">
          
            <img width="30" src="images/avatar.png" alt="" />
            <!-- <i class="fa fa-user-circle-o" aria-hidden="true"></i> -->
          
        </div>
      </nav>

      <div id="sidebar">

        <div class="sidebar__title">
          <div class="sidebar__img">
            <h1>Espace admin</h1>
          </div>
          <i 
            onclick="closeSidebar()"
            class="fa fa-times"
            id="sidebarIcon"
            aria-hidden="true"
          ></i>
        </div>

        <div class="sidebar__menu">

          <div class="sidebar__link active_menu_link"> <!--active_menu_link : active link-->
            <i class="fa fa-home"></i>
            <a href="#Dashboard">Dashboard</a>
          </div>

          <h2>Management du site</h2>
          <div class="sidebar__link">
            <i class="fa fa-image" aria-hidden="true"></i>
            <a href="#Carousel">Carousel</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-archive"></i>
            <a href="#Produits">Produits</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-percent"></i>
            <a href="#Promotions">Promotions</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-mail-bulk"></i>
            <a href="#Newsletter">Newsletter</a>
          </div>
          

          <h2>Clients</h2>
          <div class="sidebar__link">
            <i class="fas fa-layer-group"></i>
            <a href="#Commandes">Commandes</a>
          </div>
          <div class="sidebar__link">
            <i class="fas fa-file-contract"></i>
            <a href="#Contact">Contact</a>
          </div>
          <div class="sidebar__link">
            <i class="fas fa-ban"></i>
            <a href="#banne_client">banne client</a>
          </div>
          <div class="sidebar__link">
            <i class="fas fa-question"></i>
            <a href="#informations_clien">informations client</a>
          </div>

          <h2>Livraison</h2>
          <div class="sidebar__link">
            <i class="fas fa-truck"></i>
            <a href="#Livraison_commande">Livraison commande</a>
          </div>
          <div class="sidebar__link">
            <i class="fas fa-people-carry"></i>
            <a href="#livreurs">livreurs</a>
          </div>

          
          <div class="sidebar__logout">
            <i class="fa fa-power-off"></i>
            <a href="/login">Log out</a>
          </div>

        </div>
      </div>

      <main>
        <section id="Dashboard" class="section active">

          <!-- Dashboard -->

          <div class="main__container">
            <!-- MAIN TITLE STARTS HERE -->

            <div class="main__title">
              <img src="images/hello.svg" alt="" />
              <div class="main__greeting">
                <h1>Bonjour Admin</h1>
                <p>Bienvenu dans ton espace d'administration</p>
              </div>
            </div>

            <!-- MAIN TITLE ENDS HERE -->

            <!-- MAIN CARDS STARTS HERE -->
            <div class="main__cards">
              <div class="card">  
                <i
                  class="fas fa-users fa-2x text-lightblue"
                  aria-hidden="true"
                ></i>
                <div class="card_inner">
                  <p class="text-primary-p">Nombres de visiteurs</p>
                  <span class="font-bold text-title">1854</span>
                </div>
              </div>

              <div class="card">
                <i class="fa fa-shopping-basket fa-2x text-red" aria-hidden="true"></i>
                <div class="card_inner">
                  <p class="text-primary-p">Nombres de commandes</p>
                  <span class="font-bold text-title">12</span>
                </div>
              </div>

              <div class="card">
                <i class="fas fa-boxes fa-2x text-yellow"
                  aria-hidden="true"
                ></i>
                <div class="card_inner">
                  <p class="text-primary-p">Nombres de produits</p>
                  <span class="font-bold text-title">420</span>
                </div>
              </div>

              <div class="card">
                <i
                  class="fa fa-thumbs-up fa-2x text-green"
                  aria-hidden="true"
                ></i>
                <div class="card_inner">
                  <p class="text-primary-p">Nombres d'évaluation</p>
                  <span class="font-bold text-title">102</span>
                </div>
              </div>
            </div>
            <!-- MAIN CARDS ENDS HERE -->

            <!-- CHARTS STARTS HERE -->
            <div class="charts">

              <div class="charts__left">
                <div class="charts__left__title">
                  <div>
                    <h1>Rapport mensuel</h1>
                  </div>
                  <i class="fas fa-dollar-sign" aria-hidden="true"></i>
                </div>
                <div id="apex1"></div>
              </div>

              <div class="charts__right">
                <div class="charts__right__title">
                  <div>
                    <h1>Rapport générale</h1>
                  </div>
                  <i class="fas fa-dollar-sign" aria-hidden="true"></i>
                </div>

                <div class="charts__right__cards">
                  <div class="card1">
                    <h1>Revenus</h1>
                    <p>90.700 dh</p>
                  </div>

                  <div class="card2">
                    <h1>Ventes</h1>
                    <p>245 produits</p>
                  </div>

                  <div class="card3">
                    <h1>Clients</h1>
                    <p>562 clients</p>
                  </div>

                  <div class="card4">
                    <h1>Commandes</h1>
                    <p>142 commandes</p>
                  </div>

                </div>
              </div>
            </div>
            <!-- CHARTS ENDS HERE -->
          </div>
        </section>

        <!-- END Dashboard -->

        



        <!-- Produits -->

        <section id="Produits" class="section">
          <div class="container-lg">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-8"><h2>Les produits</h2></div>
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nom du produit</th>
                                <th>Description</th>
                                <th>Qunatitée</th>
                                <th>Prix</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tapis</td>
                                <td>Tapis berber</td>
                                <td>3</td>
                                <td>1700 dhs</td>
                                <td>Add image</td>
                                <td>
                                    <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                    <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                               
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
        </section>

        <!-- END Dashboard -->

      </main>


      
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="/js/adminPanelScript.js"></script>
  </body>
</html>