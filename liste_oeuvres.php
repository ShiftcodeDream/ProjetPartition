<?php
include "_header.php";
?>


  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="panel-title">
          Liste des oeuvres
          <div class="btn btn-default glyphicon glyphicon-plus" id="import-part"> </div>
        </h1>
      </div>
      <div class="panel-body">
        
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Titre
                <a href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                <a href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
              </th>
              <th>Compositeur
                <a href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                <a href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                </th>
              <th>Dernier concert
                <a href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                <a href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
              </th>
              <th class="text-right">Facture</th>
              <th class="text-center">Conducteur</th>
              <th class="text-center">Talon</th>
              <th class="text-center">Jouable</th>
            </tr>
            
            <tr class="filter">
              <th><input type="text" class="form-control" placeholder="Filtrer par titre"></th>
              <th><input type="text" class="form-control" placeholder="Filtrer par compositeur"></th>
              <th>&nbsp;</th>
              <th class="text-right"><select><option>-</option><option>avec</option><option>sans</option></select></th>
              <th class="text-center"><select><option>-</option><option>oui</option><option>non</option></select></th>
              <th class="text-center"><select><option>-</option><option>oui</option><option>non</option></select></th>
              <th class="text-center"><select><option>-</option><option>oui</option><option>non</option></select></th>
            </tr>
            
          </thead>
          <tbody>
            <tr>
              <td><a href="#">La Traviata</a></td>
              <td>Giuseppe Verdi</td>
              <td>15/05/1995</td>
              <td class="text-right"><a href="#">55956</a></td>
              <td class="text-center">oui</td>
              <td class="text-center">oui</td>
              <td class="text-center">oui</td>
            </tr>
            <tr>
              <td><a href="#">Bohemian Rhapsody</a></td>
              <td>Freddi Mercury</td>
              <td>05/10/2003</td>
              <td class="text-right"><a href="#">55954</a></td>
              <td class="text-center">oui</td>
              <td class="text-center">oui</td>
              <td class="text-center">oui</td>
            </tr>
          </tbody>
        </table>
        
        
      </div>
    </div>
</div>


<?php
include "_footer.php";
?>
