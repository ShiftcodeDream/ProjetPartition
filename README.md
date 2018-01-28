# ProjetPartition
Projet de gestion de partition de musique

## Arborescence mise en place (pour le moment)
Cette arborescence est amenée à évoluer et à s'étoffer.

### Fichier _header.php
Doit être appelé au début de chaque page PHP. Invoque les feuilles de style bootstrap et personnalisées (entre autres)
Intègre le menu général du site
### Fichier _footer.php
Contient le pied de page, si nous décidons d'en mettre un.

Ainsi, la structure minimale d'un fichier .php affichant des infos à l'écran sera de la forme suivante :

`
<?php
include "_header.php";

... Contenu du fichier php ...

include "_footer.php";
?>
`

### Dossier Bootstrap
Contient le framework bootstrap et tout ce dont il a besoin pour fonctionner (sauf jQuery, placé à part)
Il sera possible de changer le look and feel de l'application en utilisant les feuilles de style générées par Less, mais je ne pense pas qu'on aura l'occasion de le faire.

## Dossier ressources
Contient les ressources statiques suivantes :
### css
Les modifications de feuille de style pour adapter l'affichage si besoin.

### js
Les scripts JavaScript à intégrer

### images
Les images statiques et la favicon du site

