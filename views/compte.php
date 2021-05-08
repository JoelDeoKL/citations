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
                            <th width="40%">Citations <br> <span>(categorie)</span></th>
                            <th width="20%">Auteur</th>
                            <th width="20%">Date de création</th>
                            <th width="10%">Voir</th>
                            <th width="10%">Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(!empty($donnees)){
                                foreach ($donnees as $citation)
                                {
                                    ?>
                                    <tr>
                                        <td class="product-des" data-title="Citations">
                                            <p class="product-name"><a href="#"><?= $citation["citation"]?></a><br>
                                                <span>Dans la categorie :
                                                    <em><?php 
                                                        if($citation["categorie"] == 1){
                                                            echo "Amour";
                                                        }elseif($citation["categorie"] == 2){
                                                            echo "Amitié";
                                                        }
                                                    ?></em>
                                                </span>
                                            </p>
                                        </td>
                                        <td class="product-des" data-title="Auteur">
                                            <p class="product-name"><a href="#"><?= $citation["auteur"]?></a></p>
                                        </td>
                                        <td class="product-des" data-title="Date">
                                            <p class="product-name"><a href="#"><?= $citation["date_creation"]?></a></p>
                                        </td>
                                        <td class="action" data-title="View"><a href="#"><i class="ti-eye"></i></a></td>
                                        <td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
                                    </tr>
                                    <?php
                                }
                            }
                            
                        ?>
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
