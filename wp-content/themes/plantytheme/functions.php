<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/theme.css', array(), filemtime(get_stylesheet_directory() . '/theme.css'));
}

// Ajout d'un lien "Admin" dans le menu
function add_admin_link_to_menu($items, $args) {
    // Vérifie si l'utilisateur est connecté et a les capacités nécessaires
    if (is_user_logged_in()) {
        // Crée le lien "Admin" avec un accès à l'interface d'administration
        $admin_link = '<li class="menu-item"><a href="' . admin_url() . '">Admin</a></li>';
        // Ajoute le lien "Admin" à la fin des éléments du menu
        $items .= $admin_link;
    }
    // Retourne les éléments du menu modifiés
    return $items;
}

// Ajoute la fonction au hook 'wp_nav_menu_items'
add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);
?>