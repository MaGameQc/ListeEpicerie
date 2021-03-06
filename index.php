<?php
$servername = "mysql.helpinghost.net:3306";
$username = "magameca_diemetop";
$password = "Soadfan2011";
$dbname = "magameca_listeEpicerie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>

        <title>liste d'épicerie</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#">liste d'épicerie</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link download" href="#" style="color: blue;">télécharger liste <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#liste">consulter la liste</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#effacerListe" id="effacerListe">Effacer liste</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#fruits">Fruits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#légumes">Légumes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#finesherbes">Fines Herbes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#viandeEtVolaille">Viande Et Volaille</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#poissonEtFruitsDeMer">Poisson Et Fruits De Mer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#grignotines">Grignotines</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#surgeles">Surgelés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#boulangerie">Boulangerie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#patesAlimentairesEtRiz">Pâtes Alimentaire Et Riz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#condiments">Condiments, Pots Et Conserves</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#patisserie">Pâtisserie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#fromageEtProduitsLaitiers">Fromage Et Produits Laitiers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#autres">Autres</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="navBarSeperator"></div>

        <?php
// Check connection
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); } echo "Connected successfully"; ?>

        <h2>Liste d'épicerie</h2>

        <div class="container-fluid">
            <div class="row m-0">
                <div class="col-sm">
                    <div class="container">
                        <div class="container category" id="fruits">
                            <h1 id="fruits">Fruits</h1>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Avocats</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Bananes</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Clémentines</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Citrons</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Fraises</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Framboises / mûres</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Limes</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Oranges</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Pamplemousse</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Pommes</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Raisins</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Paquet de fruits</p>
                            </div>
                        </div>

                        <!-- **************************************************end of fruit***************************************** -->

                        <div class="container category" id="légumes">
                            <h1 id="fruits">Légumes</h1>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Ail</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Asperges</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Bébé épinards</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Brocoli</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Carottes</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Céleri</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Champignons</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Chou-fleur</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Concombres</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Courgettes</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Échalotes françaises</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Haricots</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Laitue</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Oignons</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Oignons rouges</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Pommes de terre</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Poivrons Rouges</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Poivrons verts</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Roquette</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Tomates</p>
                            </div>
                        </div>

                        <!-- ****************************************fin de légumes ********************************************** -->

                        <div class="container category" id="finesHerbes">
                            <h1 id="fruits">FINES HERBES</h1>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Aneth</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Basilic</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Coriandre</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Menthe</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Persil</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Romarin</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Thym</p>
                            </div>
                        </div>

                        <!-- ****************************************fin fines herbes***************************************** -->

                        <div class="container category" id="viandeEtVolaille">
                            <h1 id="fruits">VIANDE ET VOLAILLE</h1>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Bacon</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Boeuf haché</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>viande à sandwich</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Filet de porc</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Poulet</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>poulet pré-cuit</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Saucisses</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Steak</p>
                            </div>
                        </div>

                        <!-- **************************************fin de viande et volaille*********************************** -->

                        <div class="container category" id="poissonEtFruitsDeMer">
                            <h1 id="fruits">POISSON ET FRUITS DE MER</h1>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Crevettes</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Saumon</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Thon (conserve)</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>poisson panné (gros)</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>doigts de poissons panné</p>
                            </div>
                        </div>

                        <!-- ************************************************fin de poissons et fruits de mer************************************* -->

                        <div class="container category" id="grignotines">
                            <h1 id="fruits">GRIGNOTINES</h1>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Barres tendres</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Biscuits</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Compote de fruits</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Croustilles bbq</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Croustilles tostitos</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Croustilles assaisonné</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Pop-corn</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Pop-corn</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>chocolaet blanc</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>chocolat au lait</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>pépites de chocolats mi sucré</p>
                            </div>
                        </div>

                        <!-- *****************************************************fin de grignotines*********************************************** -->

                        <div class="container category" id="surgeles">
                            <h1 id="fruits">surgelés</h1>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Pizza</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>patates frites</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>crème glacé</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>frites déjené</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>tartinades pitbury avec la bonne crème blanche</p>
                            </div>
                        </div>

                        <!-- ********************************************fin de surgelés****************************************** -->

                        <div class="container category" id="boulangerie">
                            <h1 id="fruits">BOULANGERIE</h1>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Bagels</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Muffins anglais</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Pain</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Pains hamburger</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>pain hot-dog</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Pita</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Tortillas</p>
                            </div>
                        </div>

                        <!-- **************************************************************fin boulangerie************************************** -->

                        <div class="container category" id="patesAlimentairesEtRiz">
                            <h1 id="fruits">PÂTES ALIMENTAIRES ET RIZ</h1>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Farfale</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Fettuccini</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Compote de fruits</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Lasagne</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Macaroni</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>kraft diner</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>side kicks</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Penne</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Riz basmati</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Riz blanc</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Spaghetti</p>
                            </div>
                        </div>

                        <!-- ********************************************************fin pates alimentaire**************************************** -->

                        <div class="container category" id="Condiments">
                            <h1 id="fruits">CONDIMENTS, POTS ET CONSERVES</h1>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Beurre d’arachide</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Bouillon de poulet</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Cœurs d’artichauts</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Cœurs de palmiers</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Haricots rouges</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>bines</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Huile d’olive</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Ketchup</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Mayonnaise</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Miel</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>moutarde</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Moutarde miel</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Olives</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Pesto</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Sauce BBQ</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Sauce soya</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Tartinade au chocolat</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Crème Tomates</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Tomates en dés</p>
                            </div>
                        </div>

                        <!-- ************************************************************************fin de condiments et conserves***************************** -->

                        <div class="container category" id="patisserie">
                            <h1 id="fruits">PÂTISSERIE</h1>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Cacao</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Cassonade</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Farine à pain</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Farine à gâteaux</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Poudre à pâte</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Sucre</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Sucre à glacer</p>
                            </div>
                        </div>

                        <!-- ******************************************fin patisserie************************************************** -->

                        <div class="container category" id="fromageEtProduitsLaitiers">
                            <h1 id="fruits">FROMAGE ET PRODUITS LAITIERS</h1>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Beurre</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Crème 15%</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Crème 35%</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Crème sûre</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Carottes</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Céleri</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Fromages brie</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>block fromage chédar</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>block fromage mozza</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>block fromage montery jack</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>fromage en tranche suisse</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>fromage en tranche jaune</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>boursin</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Feta</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Oignons rouges</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Lait</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Oeufs</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Yogourt fraise</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Yogourt bananes</p>
                            </div>
                        </div>

                        <!-- ********************************************************fin fromages et produits laitier********************************** -->

                        <div class="container category" id="autres">
                            <h1 id="fruits">Autres</h1>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Bière</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Vino</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Café</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Café déca</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Céréales</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Jus d’orange</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>Jus de canneberges</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>sel</p>
                            </div>

                            <div class="row m-0">
                                <input type="checkbox" class="coche form-check-input" />
                                <p>poivre</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm" id="liste"></div>
            </div>
        </div>

        <form action="process.php" method="post">
            <button name="item" type="submit">shit</button>
        </form>

        <div id="my-node">
            You will get a image downloaded.
        </div>

        <button id="foo">download img</button>

        <script>
            var node = document.getElementById("my-node");
            var btn = document.getElementById("foo");
            btn.onclick = function () {
                node.innerHTML = "I'm an image now.";
                domtoimage.toBlob(document.getElementById("my-node")).then(function (blob) {
                    window.saveAs(blob, "my-node.png");
                });
            };
        </script>

        <script src="html2canvas.min.js"></script>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>

<?php

    

?>
<script>
    $(document).ready(function () {
        
        $("#effacerListe").click(function(){
        $.ajax({
            type: "post",
            url: "process.php",
            data: {
                erase: "",
            },
            async: false,
            success: function (response, data) {
                // We get the element having id of display_info and put the response inside it
                
                console.log(response + data);
            },
        });
        location.reload();
        });
        
        var itemListFromAjax;
        $.ajax({
            type: "post",
            url: "process.php",
            data: {
                item: "Avocats",
            },
            async: false,
            success: function (response, data) {
                // We get the element having id of display_info and put the response inside it
                var tmp = response.split(",");
                console.log(tmp);
                itemListFromAjax = tmp;
                //alert(response + data);
            },
        });

        $("h1").css("color", "blue");

        $("#navBarSeperator").height($("nav").css("height"));

        $("li").click(function () {
            $(".navbar-toggler").click();
        });

        var categoryList = [];
        var item;
        var category;

        $("H1").each(function () {
            categoryList.push($(this).text());
        });

        for (i = 0; i < categoryList.length; i++) {
            $("#liste").append("<div class='categorySideList'><h3>" + categoryList[i] + "</h3></div>");
        }

        $("input").click(function () {
            if ($(this).prop("checked") == true) {
                //console.log($(this).parent().parent().find("h1").text());
                item = $(this).parent().find("p").text();
                console.log("item " + item);
                category = $(this).parent().parent().find("h1").text();
                console.log("title 1 " + category);

                $.post(
                    "process.php",
                    {
                        nameChecked: item,
                    },
                    function (data, status) {
                        console.log("Data: " + data + "\nStatus: " + status);
                    }
                );

                $(".categorySideList").each(function () {
                    if (category == $(this).find("h3").text()) {
                        $(this).append("<p>" + item + "</p>");
                    }
                });
            } else if ($(this).prop("checked") == false) {
                $("#liste").empty();
                var uncheckedItem = $(this).parent().find("p").text();
                console.log(uncheckedItem + "uncheckedItem");
                $.post(
                    "process.php",
                    {
                        nameUnchecked: uncheckedItem,
                    },
                    function (data, status) {
                        console.log("Data: " + data + "\nStatus: " + status);
                    }
                );

                for (i = 0; i < categoryList.length; i++) {
                    $("#liste").append("<div class='categorySideList'><h3>" + categoryList[i] + "</h3></div>");
                }
                $("input").each(function () {
                    if ($(this).prop("checked") == true) {
                        item = $(this).parent().find("p").text();

                        category = $(this).parent().parent().find("h1").text();
                        console.log("title 1 " + category);

                        $(".categorySideList").each(function () {
                            if (category == $(this).find("h3").text()) {
                                $(this).append("<p>" + item + "</p>");
                            }
                        });
                    }
                });
            } else {
                console.log("else");
            }
        });

        console.log(categoryList);

        $(".download").click(function () {
            var today = new Date();
            var date = today.getFullYear() + "-" + (today.getMonth() + 1) + "-" + today.getDate();

            $("#liste").prepend("" + date + "");
            html2canvas(document.querySelector("#liste")).then((canvas) => {
                document.querySelector("#liste").appendChild(canvas);
                $("canvas").attr("id", "canvas");

                var link = document.createElement("a");
                link.download = "filename.png";
                link.href = document.querySelector("#canvas").toDataURL();
                link.click();
            });
        });
        
        
        
         for(i=0; i<itemListFromAjax.length-1; i++){
             $("p").each(function(){
                 if($(this).text() == itemListFromAjax[i]){
                     $(this).parent().find("input").prop('checked', true);
                     
                     category = $(this).parent().parent().find("h1").text();
                     $(".categorySideList").each(function () {
                         
                    if (category == $(this).find("h3").text()) {
                        $(this).append("<p>" + itemListFromAjax[i] + "</p>");
                    }
                });
                     
                     
                 }
             });
             console.log(itemListFromAjax[i]);
         }
    });
</script>
