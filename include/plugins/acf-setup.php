<?php
// ===============================================
// Start ACF Options Page
// ===============================================
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
      'page_title'    => 'Geral', // título
      'menu_title'    => 'Geral', // Texto do menu
      'menu_slug'     => 'geral', // slug
      'capability'    => 'edit_posts', // quem pode acessar
      'position' => 2,
      'redirect' => true,
      'icon_url' => false,
  ));
}