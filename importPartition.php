<?php
include "_header.php";
?>

  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="panel-title">
          Importer une partition pour <span class="titre-oeuvre">Moment For Morricone</span>
        </h1>
      </div>
      
      <div class="panel-header">
        <h2>Famille d'instruments</h2>
      </div>
        
      <div class="row">
        <div class="btn-group">
          <button type="button" class="btn btn-big instru">Cuivres</button>
          <button type="button" class="btn btn-big instru">Percussion</button>
          <button type="button" class="btn btn-big instru">Bois</button>
          <button type="button" class="btn btn-big instru">Flûtes</button>
        </div>        
      </div>
      
      <div class="row" style="display:none">
        <div class="btn-group">
          <button type="button" class="btn btn-big instru">Trompette</button>
          <button type="button" class="btn btn-big instru">Trombone</button>
          <button type="button" class="btn btn-big instru">Bugle</button>
          <button type="button" class="btn btn-big instru">Cor</button>
        </div>        
      </div>
      
      <div class="row" style="display:none">
        <div class="btn-group">
          <button type="button" class="btn btn-big instru">(tous)</button>
          <button type="button" class="btn btn-big instru">1</button>
          <button type="button" class="btn btn-big instru">2</button>
          <button type="button" class="btn btn-big instru">3</button>
          <button type="button" class="btn btn-big instru">4</button>
        </div>        
      </div>
      
      <div class="row" style="display:none">
        <div class="btn-group">
          <button type="button" class="btn btn-big instru">Ut</button>
          <button type="button" class="btn btn-big instru">Mib</button>
          <button type="button" class="btn btn-big instru">Sib</button>
        </div>        
      </div>
      
      <div class="row" style="display:none">
        <div class="btn-group">
          <button type="button" class="btn btn-big instru">Clé de Sol</button>
          <button type="button" class="btn btn-big instru">Clé de Fa</button>
          <button type="button" class="btn btn-big instru">Clé d'Ut 3</button>
          <button type="button" class="btn btn-big instru">Clé d'Ut 4</button>
          <button type="button" class="btn btn-big instru">Sol et Fa</button>
          <button type="button" class="btn btn-big instru">Aucune</button>
        </div>        
      </div>
      
      <div class="row" style="display:none">
        
        Fichier à télécharger : <input type="file">
      </div>
    </div>
    
</div>

<script type="application/javascript" src="ressources/js/select-instrument.js"> </script>
<?php
include "_footer.php";
?>
