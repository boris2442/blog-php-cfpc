<?php
require_once "database/database.php";
 /**
*on affiche  le titre

 */
$pageTitle='Accueil du blog';

 /**
 *debut du tampon de la page de sortie
  */
  ob_start();

  //inclusion de la page d'accueil
  require_once "layouts/articles/index_html.php";

  //recuperation du contenu des tampons de la page d'accueil
  $pageContent=ob_get_clean();
  //inclure le layout de la page de sortie

  require_once "layouts/layout_html.php";





  ?>