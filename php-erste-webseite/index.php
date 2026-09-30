<?php

    $seitentitel = 'PHP Webseite';
    $headline = 'Das ist eine Webseite mit PHP';
    $text1 = 'Hallo! Ich bin eine Webseite und ich bin mit PHP programmiert. Juhu!!!';
    $text2 = 'Das ist noch ein Text.';

    $csstheme = 'css/style.css';


    // hier beginnt der bauplan für das HTML
    echo '<!DOCTYPE html>';
    echo '<html>';

    echo '<head>';

    // hier wird der Titel ausgegeben
    echo '<title>';
    echo $seitentitel;
    echo '</title>';

    echo '<meta charset="UTF-8">';

    echo '<link rel="stylesheet" href="';
    echo $csstheme;
    echo '" type="text/css">';

    echo '</head>';


    // hier wird der Body gebaut
    echo '<body>';

    echo '<h1>';
    echo $headline;
    echo '</h1>';

    echo '<div>';
    echo $text1;
    echo '</div>';

    echo '<div>';
    echo $text2;
    echo '</div>';

    echo '</body>';

    echo '</html>';

?>


