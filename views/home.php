<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <h5><em>Nos Citations</em> est un dictionnaire qui repgroupe plus de 4999 citations classés par themes et par auteurs.</h5>
        </div>
        <div class="col-12">
			<div class="product-info">
                <div class="nav-main">
                    <!-- Tab Nav -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#recent" role="tab">Récent</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#populaire" role="tab">Populaire</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#aleatoire" role="tab">Aléatoire</a></li>
                    </ul>
                    <!--/ End Tab Nav -->
			    </div>
            </div>
        </div>
        <div class="tab-content" id="myTabContent">
            <!-- Start Single Tab -->
            <div class="tab-pane fade show active" id="recent" role="tabpanel">
                <div class="tab-single">
                    <div class="row">
                        <?php
                            if(!empty($resultats)){
                                foreach ($resultats as $resultat)
                                {?>
                                    <div class="col-lg-12 col-md-6 col-xl-12 col-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <em><?= $resultat["date_creation"]?></em><br>
                                                <strong><em><?= $resultat["citation"]?></em></strong><br>
                                                <span>Auteur : <strong><em><?= $resultat["auteur"]?></em></strong></span>
                                                <span> (ajoutée par : <?= $resultat["ajouter_par"]?>)</span><br>
                                                <span>Categorie : <em><?php
                                                        if($resultat["categorie"] == 1){
                                                            echo "Amour";
                                                        }elseif($resultat["categorie"] == 2){
                                                            echo "Amitié";
                                                        }elseif($resultat["categorie"] == 2){
                                                            echo "Amitié";
                                                        }elseif($resultat["categorie"] == 2){
                                                            echo "Amitié";
                                                        }elseif($resultat["categorie"] == 3){
                                                            echo "Famille";
                                                        }elseif($resultat["categorie"] == 4){
                                                            echo "Bonheur";
                                                        }elseif($resultat["categorie"] == 5){
                                                            echo "Hommes & Femmes";
                                                        }elseif($resultat["categorie"] == 6){
                                                            echo "Travail";
                                                        }elseif($resultat["categorie"] == 7){
                                                            echo "Temps qui passe";
                                                        }elseif($resultat["categorie"] == 8){
                                                            echo "Animaux";
                                                        }else{
                                                            echo "Pas de categorie";
                                                        }
                                                    ?></em>
                                                </span>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                <?php
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
            <!--/ End Single Tab -->
            <!-- Start Single Tab -->
            <div class="tab-pane fade" id="populaire" role="tabpanel">
                <div class="tab-single">
                    <div class="row">
                        <!-- @foreach($femmes as $femme) -->
                            <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <h5>Ma citations</h5>
                                    </div>
                                </div>
                            </div>
                        <!-- @endforeach -->
                    </div>
                </div>
            </div>
            <!--/ End Single Tab -->
            <!-- Start Single Tab -->
            <div class="tab-pane fade" id="aleatoire" role="tabpanel">
                <div class="tab-single">
                    <div class="row">
                        <!-- @foreach($enfants as $enfant) -->
                            <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <h5>Ma citations</h5>
                                    </div>
                                </div>
                            </div>
                        <!-- @endforeach -->
                    </div>
                </div>
            </div>
            <!--/ End Single Tab -->
        </div>
    </div>
</div>