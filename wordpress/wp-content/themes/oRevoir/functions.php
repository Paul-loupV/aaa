<?php

    // hooks => qu'on détaillera plus tard

    // on déclare la fonction qui viendra charger les fichiers CSS
    function oRevoirr_setup() {
        // wp_enqueue_style( string $handle, string $src = '', string[] $deps = array(), string|bool|null $ver = false, string $media = 'all' )

        wp_enqueue_style( 
            'style-css',         // le nom de la feuille de style (vous choisissez le nom que vous donnez)
            get_theme_file_uri('assets/css/style.css'),         // la source de notre fichier css
            [],                  // dépendances en terme de feuille de style (tableau qui contient les noms vers les autres feuilles de style définies)
            '1.0.0'              // Le numéro de version de la feuille de style
        );
        wp_enqueue_script('script-js', get_theme_file_uri('assets/js/app.js'), [], '1.0.0');
    }

    // On défini après quelle action de Wordpress, on souhaite positionner son action (ici après l'installation du thème), cette action onews_setup sera une fonction qui nous permettra de charger les éléments de style.
    add_action('after_setup_theme', 'oRevoirr_setup');