<?php
session_start();
$action = $_POST['action'];
if($action == 'ajouter terme') {
    $terms = $_POST['terms'];

    if (!($_POST['langs'] == '')) {
        $_SESSION['langs'] = $_POST['langs'];
    }

    echo $terms . ' ' . $_SESSION['langs'];

    if (!isset($_SESSION['chosenTerms'])) {
        $chosenTerms = array();
        $_SESSION['chosenTerms'] = $chosenTerms;
    } else if (in_array($terms, $_SESSION['chosenTerms'])) {
        header('Location: choose.php?error=termError');
        die();
    } else {
        $_SESSION['chosenTerms'][] = $terms;
    }

    header('Location: choose.php');

} elseif ($action == 'export now' && empty($_SESSION['chosenTerms'])) {
    header('Location: choose.php?error=emptyList');
} elseif ($action == 'export now'){
    $header = "msgid \"\" \nmsgstr \"\" \n\"MIME-Version: 1.0\"\n\"Content-Type: text/plain; charset=UTF-8\"\n\"Content-Transfer-Encoding: 8bit\"\n\"X-Generator: pakilaro.alwaysdata.net\"\n\n";


    $filename = rand(0,500) . '.po';
    $dirToFile = './exportedStuffs/' . $filename;
    $editedFic = fopen($dirToFile, 'a+');
    fputs($editedFic,$header);
    foreach ($_SESSION['chosenTerms'] as $key => $value){
        fputs($editedFic,"#: \n");
        fputs($editedFic,'msgid "' . $value . "\"\n");
        fputs($editedFic,"msgstr \"ouhhhh la belle traduction\" \n \n");
    }
    fclose($editedFic);
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header("Content-Transfer-Encoding: Binary");
    header('Content-Disposition: attachment; filename="'. basename($filename) .'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($dirToFile);


}
?>

