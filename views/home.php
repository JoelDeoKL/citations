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
                        <!-- @foreach($hommes as $homme) -->
                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
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
                                        <?php
                                            var_dump($donnees);
                                        ?>
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