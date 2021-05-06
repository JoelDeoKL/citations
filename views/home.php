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
            <?php
                var_dump($donnees["citation"]);
            ?>
        </div>
    </div>
</div>