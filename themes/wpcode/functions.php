<?php

add_action('wp_enqueue_scripts', 'wpcodeScripts');

function wpcodeScripts() {

  wp_enqueue_style(
    'wpcode-main-css',
    get_template_directory_uri() . '/style.css',
    ['bootstrap'],
    time()
  );

  wp_enqueue_style(
    'wpcode-font-awesome',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css',
    array(),
    true
  );

  wp_enqueue_style(
    'bootstrap',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css',
    array(),
    true
  );

  wp_enqueue_script(
    'bootstrap',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js',
    array('jquery'),
    '5.0.0',
    true
  );

}
