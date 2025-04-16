<?php
session_start();
require_once "database/database.php";




 /**
*on affiche  le titre

 */
$pageTitle="Se connecter dans le blog";

 /**
 *debut du tampon de la page de sortie
  */
  ob_start();

  //inclusion de la page de login
  require_once "layouts/articles/login_html.php";

  //recuperation du contenu des tampons de la page de login
  $pageContent=ob_get_clean();
  //inclure le layout de la page de sortie

  require_once "layouts/layout_html.php";





  








?>