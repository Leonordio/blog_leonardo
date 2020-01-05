<?php
//Visualizza i post relativi a quel tag sull'index view.
  if (!empty($_GET['title'])){
        $posts = removePost($_GET['title']);
        header("Location: index.php");
    }