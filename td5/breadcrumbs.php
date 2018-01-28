<?php
$def = "index";
$path = $_SERVER['PHP_SELF'];
$boutDeChemin = explode('/', $path);

echo('<a href=">">Accueil</a> >');
for ($i=0; i<count($boutDeChemin);$i++){
    echo('<a href="> ');
    for($j=1; $j<=$i; $j++ ){
        echo($boutDeChemin[$j]);
        if($j!=count($boutDeChemin)-1){ echo(">");}
    }

    if($i==count($boutDeChemin)-1){
        $prChunks = explode(".", $boutDeChemin[$i]);
        if ($prChunks[0] == $def) $prChunks[0] = "";
        $prChunks[0] = $prChunks[0] . "</a>";
    }
    else $prChunks[0]= $boutDeChemin[$i] . '</a>';
    echo('">');
    echo(str_replace("_" , " " , $prChunks[0]));

}
?>