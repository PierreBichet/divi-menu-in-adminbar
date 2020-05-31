<?php /* <= ne copiez pas cette balise */

/* Ajouter liens Divi dans l'adminbar */

function dc_add_divi_items_in_adminbar($admin_bar){
    $admin_bar->add_menu( array(
        'id'    => 'dc-divi-adminbar-links',
        'title' => 'Divi',
        'href'  => '#',
        'meta'  => array(
            'title' => __('Divi'),            
        ),
    ));
    $admin_bar->add_menu( array(
        'id'    => 'dc-divi-theme-options',
        'parent' => 'dc-divi-adminbar-links',
        'title' => 'Options du thème',
        'href'   => esc_url( admin_url( 'theme-install.php' ) ),
        'meta'  => array(
            'title' => __('Options du thème'),
            'target' => '_blank',
            'class' => 'dc_divi_theme_options'
        ),
    ));
    $admin_bar->add_menu( array(
        'id'    => 'dc-divi-theme-builder',
        'parent' => 'dc-divi-adminbar-links',
        'title' => 'Theme Builder',
        'href'   => esc_url( admin_url( 'admin.php?page=et_theme_builder' ) ),
        'meta'  => array(
            'title' => __('Theme Builder'),
            'target' => '_blank',
            'class' => 'dc_divi_theme_builder'
        ),
    ));
    $admin_bar->add_menu( array(
        'id'    => 'dc-divi-role-editor',
        'parent' => 'dc-divi-adminbar-links',
        'title' => 'Éditeur de rôle',
        'href'   => esc_url( admin_url( 'admin.php?page=et_divi_role_editor' ) ),
        'meta'  => array(
            'title' => __('Editeur de rôle'),
            'target' => '_blank',
            'class' => 'dc_divi_role_editor'
        ),
    ));
    $admin_bar->add_menu( array(
        'id'    => 'dc-divi-library',
        'parent' => 'dc-divi-adminbar-links',
        'title' => 'Bibliothèque Divi',
        'href'   => esc_url( admin_url( 'edit.php?post_type=et_pb_layout' ) ),
        'meta'  => array(
            'title' => __('Éditeur de rôle'),
            'target' => '_blank',
            'class' => 'dc_divi_library'
        ),
    ));   
    $admin_bar->add_menu( array(
        'id'    => 'dc-divi-support-center',
        'parent' => 'dc-divi-adminbar-links',
        'title' => 'Support Center',
        'href'   => esc_url( admin_url( 'admin.php?page=et_support_center_divi' ) ),
        'meta'  => array(
            'title' => __('Support Center'),
            'target' => '_blank',
            'class' => 'dc_divi_support_center'
        ),
    ));        
}

add_action('admin_bar_menu', 'dc_add_divi_items_in_adminbar', 100);
