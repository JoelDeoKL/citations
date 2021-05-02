<?php
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
                            <th class="text-center" width="40%">Citations</th>
                            <th width="20%">Auteur</th>
                            <th width="20%">Date de création</th>
                            <th width="10%">Voir</th>
                            <th width="10%">Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- @foreach($articles as $article) -->
                            <tr>
                                <td class="product-des" data-title="Citations">
                                    <p class="product-name"><a href="#">Citations</a></p>
                                </td>
                                <td class="product-des" data-title="Auteur">
                                    <p class="product-name"><a href="#">Auteur</a></p>
                                </td>
                                <td class="product-des" data-title="Date">
                                    <p class="product-name"><a href="#">Date</a></p>
                                </td>
                                <td class="action" data-title="View"><a href="#"><i class="ti-eye"></i></a></td>
                                <td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
                            </tr>
                        <!-- @endforeach -->
                    </tbody>
                </table>  
            </div>
            <div class="col-12">
                <br>
                <a href="index.php?kay=x-citations.ajout" class="btn btn-primary">Ajouter</a>
            </div>
        </div>
    </div>
</div>
