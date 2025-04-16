<?php
session_start();
require_once "database/database.php";

 /**
*on affiche  le titre

 */
$pageTitle="S'inscrire dams ";

 /**
 *debut du tampon de la page de sortie
  */
  ob_start();

  //inclusion de la page register_html
  require_once "layouts/articles/register_html.php";

  //recuperation du contenu des tampons de la page register_html
  $pageContent=ob_get_clean();
  //inclure le layout de la page de sortie

  require_once "layouts/layout_html.php";





  



?>