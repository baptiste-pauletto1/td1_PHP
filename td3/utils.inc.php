<?php
ini_set('error_reporting', -1);
ini_set('display_errors', 'on');

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

function use_color()
{
static $color;
if($color == '#7CCA62')
{
    $color = '#B0DFA0';
}
else
{
    $color = '#7CCA62';
}
    return ($color);
}

?>