<?php

    // Schauen, ob page in der URL gesetzt wurde
    if (isset($_GET['page'])) {
        
        // Schauen welchen wert page hat
        if ($_GET['page'] == '2') {
            require_once 'vars_page2.php';
        }
        elseif ($_GET['page'] == '3') {
            require_once 'vars_page3.php';
        }
        // bei allen anderen werten lade index
        else {
           require_once 'vars_index.php'; 
        }

    }
    // wenn nich, lade index
    else {
        require_once 'vars_index.php';
    }


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

    require_once 'navigation.php';

    echo '<div>';
    echo $text1;
    echo '</div>';

    echo '<div>';
    echo $text2;
    echo '</div>';

    echo '</body>';

    echo '</html>';

?>


