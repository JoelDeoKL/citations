<?php
    session_start();
    if(empty($_SESSION['nom'])){
        header("Location: index.php?kay=x-users.connect");
    }

?>

<div class="shopping-cart section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table shopping-summery">
                    <thead>
                        <tr class="main-hading">
                            <th>PRODUIT</th>
                            <th>NOM</th>
                            <th class="text-center">PRIX ACHAT</th>
                            <th class="text-center">QUANTITE</th>
                            <th class="text-center">PRIX UNITAIRE</th>
                            <th class="text-center">REDUCTION</th>
                            <th class="text-center"><i class="ti-eye"></i></th>
                            <th class="text-center"><i class="ti-trash remove-icon"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- @foreach($articles as $article) -->
                            <tr>
                                <td class="product-des" data-title="Description">
                                    <p class="product-name"><a href="#">Citations</a></p>
                                    <p class="product-des">Date creer</p>
                                </td>
                            </tr>
                        <!-- @endforeach -->
                    </tbody>
                </table>  
            </div>
            <div class="col-12">
                <br>
                <a href="#" class="btn btn-primary">Ajouter</a>
            </div>
        </div>
    </div>
</div>
