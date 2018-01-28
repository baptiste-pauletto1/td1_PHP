<?php
require '../../class/cache.php';


// On instancie un nouvel objet cache et on lui passe en paramètre
// le nom de la page. Ce nom doit être unique pour chaque page car il va
// générer un fichier du même nom.
$cache = new Cache('index');

// Si le cache est à jour, la méthode cacheView() l'affiche et le reste du
// code est ignoré.
$cache->cacheView();

// La méthode startBuffer(), enregistre tout ce qui suit en mémoire tampon.
$cache->startBuffer();

// Ici on affiche le code de la page, les requêtes SQL, etc.
echo 'Bonjour, je suis le contenu de la page </br>';

// La page est finie, on enregistre tout le contenu qu'elle génère.
$cache->endBuffer();
include '../../breadcrumbs.php';

echo 'Version sans cache !';
?>