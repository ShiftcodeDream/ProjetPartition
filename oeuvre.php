<?php
include "_header.php";
?>

  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="panel-title">
          Oeuvre <span class="titre-oeuvre">Moment For Morriconne</span>
          <div class="btn btn-default" id="import-part">Importer une partition</div>
          <div class="btn btn-default" id="import-fact">Importer une facture</div>
          <div class="btn btn-default" id="import-fact">Ajouter un média</div>
        </h1>
      </div>
      <div class="panel-body">

        <!-- Onglets -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active">
            <a href="#tab-descr" aria-controls="description" role="tab" data-toggle="tab">Description</a>
          </li>
          <li role="presentation">
            <a href="#tab-parts" aria-controls="partitions" role="tab" data-toggle="tab">Partitions</a>
          </li>
          <li role="presentation">
            <a href="#tab-factures" aria-controls="factures" role="tab" data-toggle="tab">Factures</a>
          </li>
          <li role="presentation">
            <a href="#tab-media" aria-controls="media" role="tab" data-toggle="tab">Médias</a>
          </li>
        </ul>

        <div class="panel panel-tab-content">
          <!-- Contenus des onglets -->
          <div class="tab-content">


            <!-- Onglet Description -->
            <div role="tabpanel" class="tab-pane active" id="tab-descr">
              <form name="xx" action="xx" method="post">
                <div class="container-fluid">
                  <div class="row">
                    <!-- Partie gauche -->
                    <div class="col-xs-12 col-sm-6">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-xs-3">
                            <label for="oe-titre" class="control-label required">Titre</label>
                          </div>
                          <div class="col-xs-9">
                            <input type="text" name="titre" id="oe-titre" class="form-control">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-xs-3">
                            <label for="oe-compositeur" class="control-label required">Compositeur</label>
                          </div>
                          <div class="col-xs-9">
                            <input type="text" name="compositeur" id="oe-compositeur" class="form-control">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-xs-3">
                            <label for="oe-categ" class="control-label required">Catégorie</label>
                          </div>
                          <div class="col-sm-9">
                            <select name="categorie" id="oe-categ" class="form-control">
                              <option value="CLA">Œuvres Classiques</option>
                              <option value="LEG">Œuvres Légères</option>
                              <option value="MAR">Marches et Hymnes</option>
                              <option value="DIV">Œuvres Diverses</option>
                            </select>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-xs-3">
                            <label for="oe-genre" class="control-label">Genre</label>
                          </div>
                          <div class="col-xs-9">
                            <input type="text" name="genre" id="oe-genre" class="form-control">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-xs-3">
                            <label for="oe-arrangeur" class="control-label">Arrangeur</label>
                          </div>
                          <div class="col-xs-9">
                            <input type="text" name="arrangeur" id="oe-arrangeur" class="form-control">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-xs-3">
                            <label for="oe-editeur" class="control-label">Editeur</label>
                          </div>
                          <div class="col-xs-9">
                            <input type="text" name="editeur" id="oe-editeur" class="form-control">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-xs-3">
                            <label for="oe-emplacement" class="control-label">Emplacement</label>
                          </div>
                          <div class="col-xs-9">
                            <input type="text" name="emplacement" id="oe-emplacement" class="form-control">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-xs-3">
                            <label for="oe-annee" class="control-label">Année de composition</label>
                          </div>
                          <div class="col-xs-9">
                            <input type="number" name="annee" id="oe-annee" class="form-control" min="1000" max="2200">
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Partie droite -->
                    <div class="col-xs-12 col-sm-6">
                      <div class="container-fluid">
                        <div class="row">
                          <input type="checkbox" id="oe-conducteur">
                          <label for="oe-conducteur" class="control-label">Nous avons le conducteur</label>
                        </div>
                        <div class="row">
                          <input type="checkbox" id="oe-facture">
                          <label for="oe-facture" class="control-label">Nous avons une facture</label>
                        </div>
                        <div class="row">
                          <input type="checkbox" id="oe-talon">
                          <label for="oe-talon" class="control-label">Nous avons un talon de partitions complet</label>
                        </div>
                        <div class="row">
                          <input type="checkbox" id="oe-jouable">
                          <label for="oe-jouable" class="control-label">Cette oeuvre peut être jouée</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>

            <!-- Onglet Partitions -->
            <div role="tabpanel" class="tab-pane" id="tab-parts">
              <div class="container-fluid">
                <h3>Liste des partitions pour l'oeuvre <span class="titre-oeuvre">Moment For Morriconne</span></h3>
                <table class="table-condensed">
                  <thead>
                    <tr>
                      <th colspan="2">Instrument</th>
                      <th>Tonalité</th>
                      <th>Clé</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr><td colspan="4" class="categ-tableau">Cuivres</td></tr>
                    <tr><td>&nbsp;</td><td><a href="#">Trompette 1</a></td><td>Ut</td><td>Sol</td></tr>
                    <tr><td>&nbsp;</td><td><a href="#">Trompette 2</a></td><td>Sib</td><td>Sol</td></tr>
                    <tr><td>&nbsp;</td><td><a href="#">Tuba</a></td><td>Sib</td><td>Fa</td></tr>
                    <tr><td colspan="4" class="categ-tableau">Bois</td></tr>
                    <tr><td>&nbsp;</td><td><a href="#">Basson</a></td><td>Ut</td><td>Ut 3</td></tr>
                    <tr><td>&nbsp;</td><td><a href="#">Clarinette 1</a></td><td>Ut</td><td>Sol</td></tr>
                    <tr><td>&nbsp;</td><td><a href="#">Hautbois</a></td><td>Ut</td><td>Sol</td></tr>
                  </tbody>
                </table>
              </div>
            </div>

            <!-- Onglet Factures -->
            <div role="tabpanel" class="tab-pane" id="tab-factures">
              <div class="container-fluid">
                <h3>Les Factures</h3>
                <table class="table">
                  <thead>
                    <tr><th>Numéro</th><th>Editeur</th><th>Date</th><th>Montant TTC</th><th>&nbsp;</th></tr>
                  </thead>
                  <tbody>
                    <tr><td><a href="#">55635</a></td><td>Les Editions du Plat Pays</td><td>15/01/1997</td><td>515,05 Francs</td><td><div class="btn btn-default glyphicon glyphicon-eye-open"> </div></td></tr>
                    <tr><td><a href="#">6883</a></td><td>Les Editions du Plat Pays</td><td>18/03/2004</td><td>219,95 Euros</td><td><div class="btn btn-default glyphicon glyphicon-eye-open"> </div></td></tr>
                  </tbody>
                </table>
              </div>
            </div>

            <!-- Onglet media -->
            <div role="tabpanel" class="tab-pane" id="tab-media">
              <div class="container-fluid">
                <h3>Liens se rapportant à l'oeuvre</h3>
                <table class="table">
                  <thead>
                    <tr><th>Description</th><th>Lien</th><th>Actions</th></tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Interprétation par un drôle d'instrument</td>
                      <td><a href="https://www.youtube.com/watch?v=lY7sXKGZl2w" target="_blank">https://www.youtube.com/watch?v=lY7sXKGZl2w</a></td>
                      <td><div class="btn btn-default glyphicon glyphicon-pencil"> </div>
                        <div class="btn btn-default glyphicon glyphicon-trash"> </div></td>
                    </tr>
                    <tr>
                      <td>Enregistrement de bonne facture</td>
                      <td><a href="https://www.youtube.com/watch?v=E9YOcZcKs7I" target="_blank">https://www.youtube.com/watch?v=E9YOcZcKs7I</a></td>

                      <td><div class="btn btn-default glyphicon glyphicon-pencil"> </div>
                        <div class="btn btn-default glyphicon glyphicon-trash"> </div></td>
                    </tr>
                  </tbody>
                </table>

              <h3>Enregistrements audio</h3>
              <table class="table">
                  <tbody>
                    <tr><td>
                      <audio controls>
                        <source src="media/Gomalan%20Brass%20Quintet%20-%20Extract%20of%20Morricone.mp3" type="audio/mp3">
                      </audio>
                      </td><td>Extrait par le Gomalan Brass Quintet</td>
                      <td><div class="btn btn-default glyphicon glyphicon-pencil"> </div>
                        <div class="btn btn-default glyphicon glyphicon-trash"> </div></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div> <!-- panel default -->
      </div> <!-- panel body -->
    </div> <!-- panel -->
  </div> <!-- row -->

<?php
include "_footer.php";
?>
