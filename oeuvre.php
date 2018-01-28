<?php
include "_header.php";
?>

<form name="xx" action="xx" method="post">

  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="panel-title">
          Oeuvres
          <div class="btn btn-default" id="import-part">Importer une partition</div>
          <div class="btn btn-default" id="import-fact">Importer une facture</div>
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
              <div class="row">
                <!-- Partie gauche -->
                <div class="col-xs-12 col-sm-6">
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

                <!-- Partie droite -->
                <div class="col-xs-12 col-sm-6">
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

            <!-- Onglet Partitions -->
            <div role="tabpanel" class="tab-pane" id="tab-parts">
              <h1>Partitions</h1>
            </div>

            <!-- Onglet Factures -->
            <div role="tabpanel" class="tab-pane" id="tab-factures">
              <h1>Factures</h1>
            </div>

            <!-- Onglet media -->
            <div role="tabpanel" class="tab-pane" id="tab-media">
              <h1>Médias</h1>
            </div>
          </div>
        </div> <!-- panel default -->
      </div> <!-- panel body -->
    </div> <!-- panel -->
  </div> <!-- row -->
</form>

<?php
include "_footer.php";
?>
