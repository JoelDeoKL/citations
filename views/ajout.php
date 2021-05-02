<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <form action="#" method="POST">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-12">
                        <div style="text-align:center">
                            <h3>Ajouter une citation</h3>
                            <p>Vous pouvez ajouter une citation en remplissant ce formulaire ci-bas.<br><br><br><br></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Citation<span>*</span></label>
                            <textarea id="citation" name="citation" class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label>Auteur<span>*</span></label>
                            <input type="text" name="auteur" id="auteur"  class="form-control">
                            <input type="hidden" name="ajouter_par" id="ajouter_par" value="<?= $_SESSION["nom"]?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" value="ajouter_citation" class="btn btn-success float-right" name="inscrire">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>