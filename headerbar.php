<?php
/*
Plugin Name: headerbar
Plugin URI: 
Description: insère un barre spécial au dessus du header
Author: Cpradlls
Version: 1.0
Author URI: 
*/

 
// Hook the 'wp_head' action hook, add the function named 'header_bar' to it
add_action("wp_head", "header_bar");

add_action( 'wp_enqueue_scripts', 'swp_register_plugin_styles' );
/**
 * Register style sheet.
 */
function swp_register_plugin_styles() {
  wp_register_style( 'headerbar-style', plugins_url( 'headerbar/assets/css/plugin.css' ) );
  wp_enqueue_style( 'headerbar-style' );
}
 
// Define 'header_bar'
function header_bar()
{
  echo '<div class="background">',
            '<div class="devis">',
                '<a class="lienimg" href="https://jmd-reno.fr/devis/">',
                    '<img class="icone" src="https://jmd-reno.fr/wp-content/plugins/headerbar/assets/img/pen.png" alt="Icone de devis">',
                '</a>',
                '<a class="lienp" href="https://jmd-reno.fr/devis/">',
                    '<p class="paragraph">Devis</p>',
                '</a>',
            '</div>',
            '<div class="phone">',
                '<a class="lienimg" href="tel:+33643295003">',
                    '<img class="icone" src="https://jmd-reno.fr/wp-content/plugins/headerbar/assets/img/phone-call.png" alt="Icone appel téléphonique">',
                '</a>',
                '<a class="lienp" href="tel:+33643295003">',
                    '<p class="paragraph">06 43 29 50 03</p>',
                '</a>',
            '</div>',
        '</div>';
}


?>