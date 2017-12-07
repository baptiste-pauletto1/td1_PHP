<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <html
lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL
    ;
};

function end_page()
{
    echo '</body></html>';
}
?>


<?php
    start_page('titre');
    $jour = date('d/m/Y', strtotime('2001-03-12'));
    $jourString = date('F d, Y, h:i a',strtotime('2001-03-12,22:16'));
    echo $jour;
    echo '</br>';
    echo $jourString;
?>

<hr/><br/><strong>Ceci est actuellement un joli test</strong><br/><hr/>

<?php
    end_page();
?>


